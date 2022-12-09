<!DOCTYPE html>
<html lang="en">
<?php
include('header2.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (isset ($_SESSION ['mail']) && isset($_SESSION['mdp'])){
$login = $_SESSION['mail'];
$mdp = $_SESSION ['mdp'];
$authok = true;

}


?>

<body>
    <div>empty content</div>
    <section id="mainLivraison">
        <div id="listePaniersDiv">
            <div id="flexDivLivraison">
                <h1>Liste des paniers disponibles</h1>
                <span id="listeBouclePaniers">PANIER<i class=" fa-solid fa-plus"></i></i>Ajouter à vos livraisons</span>
            </div>
        </div>
        <div id="listeLivraisonsDiv">
            <div id="flexDivVosLivraisons">
                <h2>Vos livraisons</h2>
                <span>Vous livrez<i class=" fa-solid fa-trash"></i></span>
            </div>
        </div>
    </section>
</body>

</html>