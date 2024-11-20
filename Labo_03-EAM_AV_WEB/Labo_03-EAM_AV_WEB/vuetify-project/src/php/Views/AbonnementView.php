<?php

class AbonnementView
{
public function displayAbonnements($abonnements)
{


    echo "<table>";
    foreach ($abonnements as $abonnement) {
        echo "<tr><td>{$abonnement['id']}</td><td>{$abonnement['courriel']}</td></tr>";
    }
    echo "</table>";
}
}