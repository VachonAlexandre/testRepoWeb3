<?php
require_once __DIR__ ."/../Models/AbonnementModel.php";
class AbonnementController {

    private $model;

    public function __construct($database){

        $this->model = new AbonnementModel($database);


    }

    public function getAllAbonnements(){
        return $this->model->getAllAbonnements();
    }

    public function getAbonnement($courriel){
        return $this->model->getAbonnement($courriel);
    }

    public function createAbonnement($courriel){
        return $this->model->createAbonnement($courriel);

    }


public function updateAbonnement($id,$courriel)
{
    return $this->model->updateAbonnement($id, $courriel);

}

public function deleteAbonnement($id){
return $this->model->deleteAbonnement($id);
}}
