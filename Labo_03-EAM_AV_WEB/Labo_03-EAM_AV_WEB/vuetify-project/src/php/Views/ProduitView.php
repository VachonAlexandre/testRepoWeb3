<?php

class ProduitView
{


    public function displayProduitsDetails($produits)
    {

        foreach ($produits as $produit) {
            echo "<div class='produit' onclick='location.href=\"/Labo_02-VME_EAM_WEB/produit?id={$produit['id']}\"'>
                    <img src={$produit['image']} alt='polo licorne' width='250' height='280' >
                    <p class='description realistic-marker-highlight'>{$produit['nom']}</p>
                    <p class='prix'>{$produit['prix']}$</p>
                </div>";
        }

    }

    public function displayProduitsImage($produits)
    {
        foreach ($produits as $produit) {
            echo "<img src={$produit['image']} alt={$produit['nom']}  onclick='location.href=\"/Labo_02-VME_EAM_WEB/produit?id={$produit['id']}\"'>";
        }
    }
    public function displayProduit($produits){
        foreach ($produits as $produit) {
        echo "<div class=\"imagesProduit\">
        <p><a href='/Labo_02-VME_EAM_WEB/'>Accueil</a> / <a href='/Labo_02-VME_EAM_WEB/catalogue'>Produits</a> / {$produit['nom']} </p>
    <img id=\"productImageMain\" src={$produit['image']} alt=\"polo licornes\">
    <div class=\"sousImagesProduit\">
        <img src={$produit['image']} alt=\"polo licornes\" class=\"imageList\">
        <img src={$produit['image']} alt=\"polo licornes\" class=\"imageList\">
    </div>
</div>
<div class=\"description\">
    <p class=\"grandeLettre\">{$produit['nom']}</p>
    <p style='font-size: 20px  '>{$produit['prix']}$</p>
    <p id=\"prix\">{$produit['description']}</p>
    <ul class=\"petiteLettre\">
        <li>Taille: {$produit['taille']}</li>
        <li>Couleur: {$produit['couleur']}</li>
    </ul>
</div>";
    }

    }

}

