<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
require('header2.php');
require_once('../model/paniersModel.php');
require_once('../model/userModel.php');
$userid = $_POST['mail'];
?>

<body>
    <div>empty content</div>
    <div id="deposerPanierDiv">
        <h1 id="deposerPanierTitle">Déposer un repas</h1>
        <div id=" myDatepicker" class="datepicker">
            <div class="date">
                <div class="group">
                    <form id="envoyerPanierForm" action=" submit">
                        <div id="datePickerForm">

                            <div id="datePickFlex">
                                <label for="datePick">Date de disponibilité</label>
                                <input type="date" placeholder="MM/JJ/AAAA" id="id-textbox-1"
                                    aria-describedby="id-description-1" name="dateDispo">
                                <span class="desc" id="id-description-1"> <span class="sr-only">
                            </div>
                        </div>
                        <div id="heurePickerForm">
                            <div>
                                <label class="labelHourPicker" for="appt">Heure de disponiblité</label>
                                <input type="time" id="appt" name="heureDispo" min="11:00" max="21:00"
                                    class="inputDeclareTime" required>  
                            </div>
                        </div>
                        <div id="textAreaDiv">
                            <textarea name=" messageDeclarerPanier" form="envoyerPanierForm" id="messageDeclarerPanier"
                                cols="30" rows="10"
                                placeholder="Avez vous des informations à communiquer au livreur..."></textarea name="messageDepot">
                            <button id="buttonDeclarerPanier" type="submit" name="panierSubmit">C'est parti!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
       if(isset($_POST['panierSubmit'])){
        insertNewRepas($bdd);
       }

       if (isset ($_SESSION ['mail']) && isset($_SESSION['mdp'])){
$login = $_SESSION['mail'];
$mdp = $_SESSION ['mdp'];
$authok = true;

}
                ?>

    <div id="vosPanierRepasDiv">
        <h2>Vos paniers repas déclarés</h2>
        <div class="selectPanierGroup">
            <form action="POST">
                <select name="" id="">
                    <?php
 $selectStr = "SELECT*FROM repas INNER JOIN user ON id_user = repas.id_user_cuisinier WHERE user.id_user LIKE :id_user_cuisinier";
            ?>
                </select>




            </form>
        </div>
        <button id="buttonModifierPanier">Modifier</button>
    </div>
    <script type=" text/javascript" src="../public/assets/js/modifierPanier.js"></script>
</body>

</html>