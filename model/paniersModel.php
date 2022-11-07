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
  $str = "SELECT*FROM repas INNER JOIN user ON user.id_user = repas.id_user_cuisinier WHERE id_repas = :id";
  $query = $bdd->prepare($str);
  $query->bindValue(':id', $id, PDO::PARAM_INT);
  $query->execute();
  $repas = $query->fetch();
  return $repas;
}
function insertNewRepas(PDO $bdd, string $name){
  $str = 'INSERT INTO repas (id_repas, timestamp_depot, nb_portions, hrdispo_repas, id_user_cuisinier, id_user_livreur) VALUES (:id_repas, CURRENT_TIMESTAMP, :nb_portions, :hrdispo_repas, :id_user_cuisinier, :id_user_livreur)';

  $query = $bdd->prepare($str);
  $query->bindValue(':id_repas', $idrepas, PDO::PARAM_INT);
  $query->bindValue(CURRENT_TIMESTAMP, $timestamp, PDO::PARAM_STR);
  $query->bindValue(':nb_portions', $nbportions, PDO::PARAM_INT);
  $query->bindValue(':hrdispo_repas', $hrdisporepas, PDO::PARAM_STR);
  $query->bindValue(':id_user_cuisinier', $idcuisinier, PDO::PARAM_INT);
  $query->bindValue(':id_user_livreur', $idlivreur, PDO::PARAM_INT);
  $query->execute();
}