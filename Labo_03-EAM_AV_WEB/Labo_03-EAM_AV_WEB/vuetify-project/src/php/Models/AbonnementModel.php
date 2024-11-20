<?php

class AbonnementModel {

    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAllAbonnements() {
        $sql = "SELECT * FROM `abonnement`;";
        $result = $this->db->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getAbonnement($courriel) {
        $sql = "SELECT * FROM `abonnements` WHERE courriel = :courriel";
        $result = $this->db->prepare($sql);
        $result->execute(["courriel" => $courriel]);
        $abonnement = $result->fetch(PDO::FETCH_ASSOC);
        
        return $abonnement !== false ? $abonnement : [];
    }

    public function createAbonnement($courriel) {
        $sql = "INSERT INTO abonnements (courriel) VALUES (:courriel)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':courriel', $courriel, PDO::PARAM_STR);
        return $stmt->execute();
    }

public function updateAbonnement($id,$courriel){
$sql = "UPDATE abonnements SET courriel = :courriel  WHERE id = :id ";
$stmt = $this->db->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(":courriel", $courriel, PDO::PARAM_STR);
return $stmt->execute();
}

public function deleteAbonnement($id) {
        $sql = "DELETE FROM abonnements WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
}

}