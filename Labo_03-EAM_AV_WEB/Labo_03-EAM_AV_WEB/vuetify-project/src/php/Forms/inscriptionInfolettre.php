<?php
session_start();
require_once "../Database.php";
require "../Controllers/AbonnementController.php";
$db = Database::getInstance();
$conn = $db->getConnection();
$ac= new AbonnementController($conn);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $errors = "";
    $messageConfirmation = "Merci pour votre inscription !";

    //Vérification email
    if (empty($email)) {
        $errors = "L'adresse courriel est obligatoire.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors = "L'adresse courriel n'est pas valide.";
    } else if (count($ac->getAbonnement($email)) > 0) {
        $errors = "L'adresse courriel existe déjà";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $_POST;
        header("Location: /Labo_02-VME_EAM_WEB/infolettre");
        exit();
    }

    $ac->createAbonnement($email);
    header("Location: /Labo_02-VME_EAM_WEB/infolettre");
    $_SESSION['confirmation'] = $messageConfirmation;
    exit();
}