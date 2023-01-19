<?php
include_once('../config/Database.php');
include_once('userModel.php');

function displayRepasById(PDO $bdd){
    $repas = getRepasById($bdd);
    $loggedInUserId = selectConnectedUser($bdd, $_SESSION['identifiant']);
    
    }
function getAllRepas(PDO $bdd){
    
        $str = "SELECT*FROM repas WHERE repas_statut = 'disponible'";
        $repas = $bdd->query($str);
        $repasDispo = $repas->fetchAll();
        return $repasDispo;
        if(isset($repasDispo)){
            return $repasDispo;
        }else{
            echo"<div>Aucun repas dispo</div>";
        }
    
}
function getRepasById(PDO $bdd){
    if(isset($_SESSION['identifiant'])){
        $loggedInUserId = selectConnectedUser($bdd, $_SESSION['identifiant']);
        $str = "SELECT*FROM repas  WHERE id_user_cuisinier = '$loggedInUserId'";
        $repas = $bdd->query($str);
        $repasUser = $repas->fetchAll();
        if(isset($repasUser)){
             return $repasUser;
            }
        }else{
                
                echo "<div>Vous n'avez déclaré aucuns repas</div>";
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
       
    
 