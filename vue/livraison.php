<!DOCTYPE html>
<html lang="en">
<?php
include('header2.php');
include_once('../model/paniersModel.php');
include_once('../controller/panierController.php');
$repas =  getAllRepas($bdd->connexion);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>.</div>
    <section id="mainLivraison">
        <div id="listePaniersDiv">
            <div id="flexDivLivraison">
                <h1>Liste des paniers disponibles</h1>
                 <form id="ajouterRepasForm" method="POST">
                <?php foreach($repas as $repasDispo){ 
                    ?>
                <button name="ajouterRepas"href="index.php?page=ajouterRepas&amp;idRepas=<?= $repasDispo['id_repas'] ?>"id="listeBouclePaniers" value="<?php echo $repasDispo['hrdispo_repas']?>">
                <span id="infoRepasDispo">

                     <span class="spanBoucleRepas"><p>Heure de disponibilité:</p> <?php echo  $repasDispo['hrdispo_repas']; ?> </span>
                   <span class="spanBoucleRepas"><p>Contenu du repas:</p><?php echo $repasDispo['message_depot']; ?></span>
                </span>
                 <i id="ajouterRepasIcon"class="fa-solid fa-cart-plus">Livrer</i>
                </button>
                
                <?php } ?>
                </form>
            </div>
        </div>
        <!-- <div id="listeLivraisonsDiv">
            <div id="flexDivVosLivraisons">
                <h2>Vos livraisons</h2>
                <span>Vous livrez<i class=" fa-solid fa-trash"></i></span>
            </div>
        </div> -->
    </section>
</body>

</html>