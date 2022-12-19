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
function insertNewRepas(PDO $bdd, $hDepot,$loggedInUserId,$repasStatut,$mDepot ){

        $queryStr = "INSERT INTO repas (hrdispo_repas, id_user_cuisinier, null, repas_statut, message_depot) VALUES (:hrdispo_repas, :id_user_cuisiner, null, :repas_statut, :message_depot)";
        $query = $bdd->prepare($queryStr);
        $query->bindValue(':hrdispo_repas', $hDepot, PDO::PARAM_STR);
        $query->bindValue(':id_user_cuisinier', $loggedInUserId, PDO::PARAM_INT);
        $query->bindValue(':disponible', $repasStatut, PDO::PARAM_STR);
        $query->bindValue(':message_depot', $mDepot, PDO::PARAM_STR);
        $query->execute();
        }
       
    
 