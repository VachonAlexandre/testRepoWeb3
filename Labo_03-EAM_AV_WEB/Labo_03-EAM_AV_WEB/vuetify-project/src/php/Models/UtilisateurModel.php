<?php

class UtilisateurModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;

    }
    public function getAllUtilisateurs() {
        $sql = "SELECT * FROM `utilisateurs`";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUtilisateurByCourriel($courriel) {
        $sql = "SELECT * FROM `utilisateurs` WHERE courriel = :courriel";
        $result = $this->db->prepare($sql);
        $result->execute(["courriel" => $courriel]);
        $user = $result->fetch(PDO::FETCH_ASSOC);
        
        return $user !== false ? $user : [];
    }

    public function getUtilisateurById($id) {
        $sql = "SELECT * FROM `utilisateurs` WHERE id = :id";
        $result = $this->db->prepare($sql);
        $result->execute(["id" => $id]);

        return $result->fetch(PDO::FETCH_ASSOC);
    }
    public function createUtilisateur($nom, $prenom, $password, $courriel) {
        $sql = "INSERT INTO utilisateurs (nom, prenom, password,courriel) VALUES (:nom , :prenom, :password,:courriel)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nom',$nom, PDO::PARAM_STR);
        $stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->bindValue(':courriel', $courriel, PDO::PARAM_STR);

        return $stmt->execute();

    }

    public function updateUtilisateur($id,$nom, $prenom, $password, $courriel) {
        $sql = "UPDATE utilisateurs SET nom = :nom, prenom = :prenom, password= :password, courriel = :courriel WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->bindValue(':courriel', $courriel, PDO::PARAM_STR);


        return $stmt->execute();
    }

    public function deleteUtilisateur($id) {
        $sql = "DELETE FROM utilisateurs WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        return $stmt->execute();
    }
}