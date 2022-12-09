<?php

session_start();
require('../model/config/Database.php');
$bdd = new Database('poureuxbdd', 'root', '', 'localhost');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pour Eux Nancy</title>
    <script src="https://kit.fontawesome.com/bd1f979c00.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>


    <main>
        <?php
      if(isset($_GET['page'])){
        switch($_GET['page']){


        case 'signin':
            include('../vue/inscription.php');
            break;
        case 'accueil':
            include('../vue/accueil.php');
            break;
        case 'login':
            include('../vue/connexion.php');
            break;
        case 'leCollectif':
            include('../vue/leCollectif.php');
            break;
        case 'actualités':
            include('../vue/actualites.php');
            break;
        case 'deposerPanier':
            include('../vue/deposerPanier.php');
            break;
        case 'contact':
            include('../vue/contact.php');
            break;
        case 'livraison':
            include('../vue/livraison.php');
            break;
        default:
            include('../vue/accueil.php');
        }
      } else {
        include('../vue/accueil.php');
      }

    ?>
    </main>
    <?php
 require('../vue\footer.php');
  ?>

</body>

</html>