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
function displayRepasById(PDO $bdd){
    $repas = getRepasById($bdd);
    $loggedInUserId = selectConnectedUser($bdd, $_SESSION['identifiant']);
    
    }

function getRepasById(PDO $bdd){
    if(isset($_SESSION['identifiant'])){
        $loggedInUserId = selectConnectedUser($bdd, $_SESSION['identifiant']);
        $str = "SELECT*FROM repas  WHERE id_user_cuisinier = '$loggedInUserId'";
        $query = $bdd->prepare($str);
        if($query->rowCount()>0){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        }else{
                header('Location:index.php?page=login');
            }
        }
function insertNewRepas(PDO $bdd, $hDepot,$loggedInUserId,$repasStatut,$mDepot){
        $queryStr = "INSERT INTO repas (hrdispo_repas, id_user_cuisinier,id_user_livreur,repas_statut, message_depot) VALUES (:hrdispo_repas, :id_user_cuisiner,:id_user_livreur,:repas_statut, :message_depot)";
        $query = $bdd->prepare($queryStr);
        $query->bindValue(':hrdispo_repas', $hDepot, PDO::PARAM_STR);
        $query->bindValue(':id_user_cuisiner', $loggedInUserId, PDO::PARAM_INT);
        $query->bindValue(':id_user_livreur', $loggedInUserId, PDO::PARAM_INT);
        $query->bindValue(':repas_statut', $repasStatut, PDO::PARAM_STR);
        $query->bindValue(':message_depot', $mDepot, PDO::PARAM_STR);
        $query->execute();
        }
       
    
 