<?php
require_once __DIR__ .'/../Models/UtilisateurModel.php';
class UtilisateurController {

private $model;

public function __construct($database)
{
$this->model = new UtilisateurModel($database);

}
public function getUtilisateurByCourriel($courriel){
    return $this->model->getUtilisateurByCourriel($courriel);
}
public function getUtilisateurById($id){
    return $this->model->getUtilisateurById($id);
}
public function getAllUtilisateurs(){
    return $this->model->getAllUtilisateurs();
}

public function createUtilisateur($nom, $prenom, $password, $courriel){
    $hash = password_hash($password, PASSWORD_DEFAULT);
    return $this->model->createUtilisateur($nom, $prenom, $hash, $courriel);

}
public function updateUtilisateur($id,$nom, $prenom, $password, $courriel){
    $hash = password_hash($password, PASSWORD_DEFAULT);
    return $this->model->updateUtilisateur($id,$nom, $prenom, $hash, $courriel);
}
public function deleteUtilisateur($id){
    return $this->model->deleteUtilisateur($id);
}


}