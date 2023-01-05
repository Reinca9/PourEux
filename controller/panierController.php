 <?php  
 include_once('../config/Database.php');
 function bouttonInsererRepas(PDO $bdd){
        if(isset($_POST['panierSubmit'])){ 
            if(isset($_SESSION['identifiant'])) {            
                $loggedInUserId = selectConnectedUser($bdd, $_SESSION['identifiant']);
                $repasStatut = 'disponible';
                $hDepot = $_POST['heureDispo'];
                $mDepot = $_POST['messageDepot'];
                $repasStatut = "disponible";
                insertNewRepas($bdd, $hDepot, $loggedInUserId, $repasStatut, $mDepot);
                $repasId = selectMaxRepasId($bdd);
                insertIntoRelationRepasUser($bdd,$loggedInUserId);
                }else{
                    header('Location:index.php?page=login');
            }
        }
    }
        function deleteRepas($bdd, $loggedInUserId){
            if(isset($_SESSION['identifiant'])){
                if(isset($_POST['supprimerRepas'])){
                    $deleteQuery = "DELETE*FROM repas    WHERE id_user_cuisinier = '$loggedInUserId'";
                    $query = $bdd->prepare($deleteQuery);
                    $query->execute();
                    echo'<p id="repasSuppr">Repas supprimé</p>';
                 }

        }else{
             header('Location:index.php?page=login');
        }
    }
        function updateRepas($bdd, $id){
            if(isset($_SESSION['identifiant'])){
                if(isset($_POST['modifierRepas'])){
                $repasUser = getRepasById($bdd->connexion);
                $loggedInUserId = selectConnectedUser($bdd, $_SESSION['identifiant']);        
                $hDispo = $_POST['heureModify'];
                $repasStatut = $_POST['repas_statut'];
                $mDepot = $_POST['messageModify'];
                $modifier = "UPDATE repas SET hrdispo_repas = :hrdispo_repas, repas_statut = :repas_statut, message_depot = :message_depot WHERE 
                '$id' = 'id_repas'";
                $queryUpdate = $bdd->prepare($modifier);
                $queryUpdate->bindValue(':hrdispo_repas', $hDispo, PDO::PARAM_STR);
                $queryUpdate->bindValue(':repas_statut', $repasStatut, PDO::PARAM_STR);
                $queryUpdate->bindValue(':message_depot', $mDepot, PDO::PARAM_STR);
                $queryUpdate->execute();
                        }
            }else{
                header('Location:index.php?page=login');
            }
        }
            ?>