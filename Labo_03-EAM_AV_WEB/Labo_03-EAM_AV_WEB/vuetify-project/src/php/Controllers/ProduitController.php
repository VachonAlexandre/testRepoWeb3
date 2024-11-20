<?php
require_once __DIR__ .'/../Models/ProduitModel.php';

class ProduitController
{

    private $model;
    public function __construct($database)
    {
        $this->model = new ProduitModel($database);
    }


    public function getAllProduits()
    {
        return $this->model->getAllProduits();
    }

 public function getProduitsFiltrer($type,$prix,$taille,$couleur){


        $type == "" ? $type = '%': $type ;
        $taille == "" ? $taille = '%': $taille = '%'.$taille.'%' ;
        $couleur == "" ? $couleur = '%': $couleur ;

        switch ($prix) {
            case '0-50':
                $prixMin = 0;
                $prixMax = 50;
                break;
            case '50-100':
                $prixMin = 50;
                $prixMax = 100;
                break;
            case '100-150':
                $prixMin = 100;
                $prixMax = 150;
                break;
            case '150-200':
                $prixMin = 150;
                $prixMax = 200;
                break;
            default:
                $prixMin = 0;
                $prixMax = 200;
                break;
        }

    return $this->model->getProduitsFiltrer($type,$prixMin,$prixMax,$taille,$couleur);

 }

    public function getProduitById($id){
        return $this->model->getProduitById($id);
    }
    public function createProduit($type, $nom, $image, $description, $prix, $taille, $couleur)
    {
        return $this->model->createProduit($type, $nom, $image, $description, $prix, $taille, $couleur);

    }
    public function getProduitsExclusifs(){
        return $this->model->getProduitsExclusifs();
    }
    public function getProduitsSummerCollection(){
        return $this->model->getProduitsSummerCollection();
    }
    public function updateProduit($id, $type, $nom, $image, $description, $prix, $taille, $couleur){
        return $this->model->updateProduit($id, $type, $nom, $image,$description,$prix,$taille, $couleur);
    }
    public function deleteProduit($id){
        return $this->model->deleteProduit($id);
    }
}