  <?php require_once('../controller/connexionController.php');  


  ?>
    <script defer type="text/javascript" src="../public/assets/js/menuBurger.js"></script>
  <header id="header1">

      <nav id="nav1">
        
          <div id="pages1" class="pages">
            <div id="pagesAll" class="pages1Only">
              <a id="hreflogo1"href="index.php?page=accueil">
                <img id="logo" class="logoMobile" src="assets/img/PourEuxNancySVG.svg" alt="logo"></a>
              <a class="ahover"href="index.php?page=accueil">Accueil</a>
              <a class="ahover"href="index.php?page=leCollectif">Le collectif</a>
              <a class="ahover"href="index.php?page=signin">Nous rejoindre</a>
              <a class="ahover seConnecterMobile"href="index.php?page=login">Se connecter</a>
              <a class="ahover"href="index.php?page=actualités">Actualités</a>
              <a class="ahover"href="index.php?page=deposerPanier">Paniers Repas</a>
              <a class="ahover"href="index.php?page=livraison">Livraisons</a>
              <a class="ahover"href="index.php?page=contact">Contact</a>  
              </div>
          </div>

          <div id="sideheader">
 <?php hideSideBarWhenConnected1() ?>
             <a href="https://www.instagram.com/poureuxnancy/?hl=en"><i id="instalogo" class="fa-brands fa-instagram" href="https://www.instagram.com/poureuxnancy/?hl=fr"></i></a>
              <a href="https://www.facebook.com/groups/832655407231327/"><i id="fblogo" class="fa-brands fa-facebook" href="https://www.facebook.com/groups/832655407231327"></i></a>

          
         
      </nav>
   <?php        showAdminPanel($bdd->connexion, $_SESSION); ?>
      <i  class="fa-solid fa-bars menuBurger"></i>
      
  </header>
