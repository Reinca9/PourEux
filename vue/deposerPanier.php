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
                                <label for="datePick">Date du repas préparé</label>
                                <input type="date" placeholder="MM/JJ/AAAA" id="id-textbox-1"
                                    aria-describedby="id-description-1">
                                <span class="desc" id="id-description-1"> <span class="sr-only">
                            </div>
                        </div>
                        <div id="heurePickerForm">
                            <div>
                                <label class="labelHourPicker" for="appt">Heure début disponiblité</label>
                                <input type="time" id="appt" name="appt" min="11:00" max="21:00"
                                    class="inputDeclareTime" required>
                            </div>
                            <div>
                                <label class="labelHourPicker" for=" appt">Heure fin disponiblité</label>
                                <input type="time" id="appt" name="appt" min="11:00" max="21:00"
                                    class="inputDeclareTime" required>
                            </div>
                        </div>
                        <div id="textAreaDiv">
                            <textarea name=" messageDeclarerPanier" form="envoyerPanierForm" id="messageDeclarerPanier"
                                cols="30" rows="10"
                                placeholder="Avez vous des informations à communiquer au livreur..."></textarea>
                            <button id="buttonDeclarerPanier" type=" submit">C'est parti!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="vosPanierRepasDiv">
        <h2>Vos paniers repas</h2>
        <div class="selectPanierGroup">
            <div>
                <input type="text">
            </div>
        </div>
        <button id="buttonModifierPanier">Modifier</button>
    </div>
    <script type=" text/javascript" src="../public/assets/js/modifierPanier.js"></script>
</body>

</html>