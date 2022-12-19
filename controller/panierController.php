 <?php  function bouttonInsererRepas(PDO $bdd){
        if(isset($_POST['panierSubmit'])){
    if(isset($_SESSION['identifiant'])){
        $loggedInUserId = selectConnectedUser($bdd, $_SESSION['identifiant']);
        $repasStatut = 'disponible';
        $hDepot = $_POST['heureDispo'];
        $mDepot = $_POST['messageDepot'];
        insertNewRepas($bdd, $hDepot, $loggedInUserId, $repasStatut, $mDepot);
        }
    }else{
            header('Location:index.php?page=login');
    }}

    ?>