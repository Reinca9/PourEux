 <?php  

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
                insertIntoRelationRepasUser($bdd,$loggedInUserId, $repasId['id_repas_repas']);
                header('Location:index.php?page=deposerPanier');
                }else{
                    header('Location:index.php?page=login');
            }
        }
    }
function deleteRepas(PDO $bdd){          
$idRepas = $_GET['idRepas'];
    $deleteQuery = "DELETE FROM repas WHERE id_repas = $idRepas";
    $query = $bdd->prepare($deleteQuery);
    $query->execute();
    header('Location:index.php?page=deposerPanier');

     }


        function updateRepas($bdd){
            if(isset($_SESSION['identifiant'])){
                if(isset($_POST['modifierRepas'])){
                $idRepas = $_GET['idRepas'];
                $hDispo = $_POST['heureModify'];
                $repasStatut = $_POST['repas_statut'];
                $mDepot = $_POST['messageModify'];
                $modifier = "UPDATE repas SET hrdispo_repas = :hrdispo_repas, repas_statut = :repas_statut, message_depot = :message_depot WHERE 
                $idRepas = 'id_repas'";
                $queryUpdate = $bdd->prepare($modifier);
                $queryUpdate->bindValue(':hrdispo_repas', $hDispo, PDO::PARAM_STR);
                $queryUpdate->bindValue(':repas_statut', $repasStatut, PDO::PARAM_STR);
                $queryUpdate->bindValue(':message_depot', $mDepot, PDO::PARAM_STR);
                $queryUpdate->execute();
                header('Location:index.php?page=deposerPanier');
                        }
            }}
        function connectedOrRedirect(PDO $bdd){
            if(isset($_SESSION['identifiant'])){
            $loggedInUserId = selectConnectedUser($bdd,$_SESSION['identifiant']); 
            return $loggedInUserId;  
            }else{
                header('Location:index.php?page=login');
            }
        }
        
  
            ?>