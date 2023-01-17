<?php
include_once('../controller/panierController.php');
include_once('deposerPanier.php');
$array = $_POST;
updateRepas($bdd->connexion, $array);


?> 