<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
include('header2.php');
require_once('../model/paniersModel.php');
require_once('../model/userModel.php');
require_once('../controller/connexionController.php');
require_once('../config/Database.php');
require_once('../controller/panierController.php');
$repas = getRepasById($bdd->connexion);    
updateRepas($bdd->connexion);    
$loggedInUserId = selectConnectedUser($bdd->connexion,$_SESSION['identifiant']);       
 ?>

          
<body>
    <div>empty content</div>
    <div id="deposerPanierDiv">
        <h1 id="deposerPanierTitle">Déposer un repas</h1>
        <div id=" myDatepicker" class="datepicker">
            <div class="date">
                <div class="group">
                    <form id="envoyerPanierForm" action="" method="POST">
                        <div id="heurePickerForm">
                            <div>
                                <label class="labelHourPicker" for="appt">Heure de disponiblité</label>
                                <input type="time" id="appt" name="heureDispo" min="11:00" max="21:00"
                                    class="inputDeclareTime" required>  
                            </div>
                        </div>
                        <div id="textAreaDiv">
                            <textarea name="messageDepot" form ="envoyerPanierForm"name=" messageDeclarerPanier" form="envoyerPanierForm" id="messageDeclarerPanier"
                                cols="30" rows="10"
                                placeholder="Description du repas, portions..."></textarea >
                                 <?php bouttonInsererRepas($bdd->connexion) ?>
                            <button id="buttonDeclarerPanier" type="submit" name="panierSubmit">C'est parti!</button>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <div id="vosPanierRepasDiv">
        <h2>Vos paniers repas déclarés</h2>
        <div class="selectPanierGroup">
            <?php  $loggedInUserId = selectConnectedUser($bdd->connexion, $_SESSION['identifiant']);
            foreach($repas as $repasUser){
                if($repas['id_user_cuisinier'] == $loggedInUserId){
                  ?>
             <form id="updateform" method="POST" action="">
        <input class="updateinput" type="text" name="heureModify" placeholder="Heure dispo" value="<?php echo $repas['hrdispo_repas'] ?>"
            required />
        <input class="updateinput" type="text" name="repas_statut" value="<?php echo $repas['repas_statut'] ?>"
            placeholder="Statut du repas" required />
        <input class="updateinput" type="text" name="messageModify" value="<?php echo $repas['message_depot'] ?>"
            placeholder="Descritption du repas" required />
       
                    
        <button name="modifierRepas"id="buttonModifierPanier">Modifier</button>
         <?php deleteRepas($bdd->connexion, $loggedInUserId); ?>
        <button name="supprimerRepas" id="buttonSupprimerRepas">Supprimer</button>
    </form>
  <?php 

} }?>
        </div>
        
    </div>
    <script type=" text/javascript" src="../public/assets/js/modifierPanier.js"></script>
</body>

</html>