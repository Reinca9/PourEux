<?php

function getRepas(PDO $bdd){
    $str = 'SELECT * FROM repas' ;
    $query = $bdd->query($str);
    if($query->rowCount()>0){
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }else{
        throw new \Exception("Vous n'avez déclaré aucun repas");
    }
}
function getRepasById(PDO $bdd, $id){
  $str = 'SELECT * FROM repas WHERE id_repas = :id';
  $query = $bdd->prepare($str);
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  $query->execute();

  return $query->fetch();
}
function insertNewRepas(PDO $bdd, string $name){
  $str = 'INSERT INTO repas (id_repas, date_preparation, date_livraison, statut_repas, id_user_repas) VALUES (:ID_produit, :nom_produit, :prix_produit, :img_produit, :ID_taxe, ID_offre, ID_categorie)';

  $query = $bdd->prepare($str);
  $query->bindValue(':ID_produit', $id, PDO::PARAM_INT);
  $query->bindValue(':nom_produit', $nomproduit, PDO::PARAM_STR);
  $query->bindValue(':prix_produit', $prixproduit, PDO::PARAM_INT);
  $query->bindValue(':img_produit', $imgproduit, PDO::PARAM_STR);
  $query->bindValue(':ID_taxe', $idtaxe, PDO::PARAM_INT);
  $query->bindValue(':ID_offre', $idoffre, PDO::PARAM_INT);
  $query->bindValue(':ID_categorie', $idcategorie, PDO::PARAM_INT);
  $query->execute();
}