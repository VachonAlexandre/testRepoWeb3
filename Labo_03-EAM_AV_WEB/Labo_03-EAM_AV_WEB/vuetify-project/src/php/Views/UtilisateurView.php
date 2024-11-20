<?php

class UtilisateurView
{


    public function displayUtilisateurs($utilisateurs)
    {

        echo "<table>";
        foreach ($utilisateurs as $utilisateur) {
            echo "<tr><td>{$utilisateur['id']}</td><td>{$utilisateur['nom']}</td><td>{$utilisateur['prenom']}</td><td>{$utilisateur['courriel']}</td></tr>";
        }
        echo "</table>";

    }

    public function displayPageUser($utilisateur){
        $prenom = $_SESSION['post_data']['prenom'] ?? $utilisateur['prenom'];
        $nom = $_SESSION['post_data']['nomDeFamille'] ?? $utilisateur['nom'];
        $email = $_SESSION['post_data']['email'] ?? $utilisateur['courriel'];
    

        echo "<p id=\"titre\">MON PROFIL</p>
        <p class=\"bienvenue\">Bonjour {$utilisateur['prenom']} {$utilisateur['nom']},<br>
            Bienvenue sur votre profil utilisateur!</p>
        <div id=\"connexionForm\">
            <p class='error'>" . ($_SESSION['errors']['prenom'] ?? '') . "</p>
            <input id=\"prenom\" name=\"prenom\" type=\"text\" placeholder=\"PRENOM\" value=\"{$prenom}\">
            <br>
            <p class='error'>" . ($_SESSION['errors']['nomDeFamille'] ?? '') . "</p>
            <input id=\"nomDeFamille\" name=\"nomDeFamille\" type=\"text\" placeholder=\"NOM DE FAMILLE\" value=\"{$nom}\">
            <br>
            <p class='error'>" . ($_SESSION['errors']['email'] ?? '') . "</p>
            <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"ADRESSE COURRIEL\" value=\"{$email}\">
            <br>
            <p class='error'>" . ($_SESSION['errors']['mdp'] ?? '') . "</p>
            <input id=\"mdp\" name=\"mdp\" type=\"password\" placeholder=\"MOT DE PASSE\">
            <br>
            <div id=\"buttonsUtilisateur\">
            <input class=\"buttons\" type=\"submit\" value=\"MODIFIER\">
            </div>
        </div>";

    }

}