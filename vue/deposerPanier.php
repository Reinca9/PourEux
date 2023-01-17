<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<?php 
// include('header2.php');
require_once('../model/paniersModel.php');
require_once('../model/userModel.php');
require_once('../controller/connexionController.php');
require_once('../config/Database.php');
require_once('../controller/panierController.php');

$repasUser = getRepasById($bdd->connexion);  
connectedOrRedirect($bdd->connexion);
bouttonInsererRepas($bdd->connexion);

 ?>

          
<body>
    <div>.</div>
    <div id="deposerPanierDiv">
        <h1 id="deposerPanierTitle">Déposer un repas</h1>
        <div id="myDatepicker" class="datepicker">
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
            <?php
            foreach($repasUser as $repasUser2){
                $_SESSION['repasId'] = $repasUser2['id_repas'];
                  ?>
            <form id="updateform" method="POST" action="">
            <input id="updateHour"value="<?php echo $repasUser2['hrdispo_repas'] ?>"type="time"  name="heureDispo" min="11:00" max="21:00" required>
            <input form="updateform" type="text" name="repas_statut" value="<?php echo $repasUser2['repas_statut'] ?>"
            placeholder="Statut du repas" required />
            <textarea  form ="updateform"name="messageModify" id="messageModify"
                                cols="30" rows="10"
                                placeholder="<?php echo $repasUser2['message_depot'] ?>"></textarea >          
            <button name="modifierRepas"id="buttonModifierPanier">
            <a name="modifierRepas"id="buttonModifierPanier"  href="index.php?page=updateRepas&amp;idRepas=<?= $repasUser2['id_repas'] ?>">Modifier</a></button>
             <button name="supprimerRepas" id="buttonSupprimerRepas"> 
            <a name="supprimerRepas" id="buttonSupprimerRepas2" href="index.php?page=deleteRepas&amp;idRepas=<?= $repasUser2['id_repas'] ?>"> Supprimer </a></button>
    </form>
  <?php 
}
 ?>
        </div>
        
    </div>
    <script type=" text/javascript" src="../public/assets/js/modifierPanier.js"></script>
</body>

</html>