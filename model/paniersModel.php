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
function insertNewRepas(PDO $bdd){
    
        $hDepot = $_POST['heureDispo'];
        $dDepot = $_POST['dateDispo'];
        $mDepot = $_POST['messageDepot'];
        $queryStr = "INSERT INTO repas (id_repas, timestamp_depot, hrdispo_repas, id_user_cuisinier, id_user_livreur, repas_statut, message_depot) VALUES (null, CURRENT_TIMESTAMP(), :hrdispo_repas, :id_user_cuisiner, :id_user_livreur, :repas_statut, :message_depot)";
        $query = $bdd->prepare($queryStr);
        $query->bindValue(':hrdispo_repas', $hrdispoRepas, PDO::PARAM_INT);
        $query->bindValue(':id_user_cuisinier', $_SESSION['id_user'], PDO::PARAM_INT);
        $query->bindValue(':id_user_livreur', $idUserLivreur, PDO::PARAM_INT);
        $query->bindValue(':repas_statut', $repasStatut, PDO::PARAM_STR);
        $query->bindValue(':message_depot', $mDepot, PDO::PARAM_STR);
        $query->execute();
       }
