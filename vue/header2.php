      <?php require_once('../controller/connexionController.php');  
 
      
  ?>
    <script defer type="text/javascript" src="../public/assets/js/menuBurger.js"></script>
  <header id="header2">

      <nav id="nav2">
        <div id="pages2" class="pages">
            <div id="pagesAll" class="pagesAll2">
              <a id="logo2href"href="index.php?page=accueil">
              <img id="logo2" class="logoMobile"src="assets/img/PourEuxNancySVG.svg" alt="logo"></a>   
              <a href="index.php?page=accueil">Accueil</a>
              <a href="index.php?page=leCollectif">Le collectif</a>
              <a href="index.php?page=signin">Nous rejoindre</a>
              <a class="ahover seConnecterMobile"href="index.php?page=login">Se connecter</a>
              <a href="index.php?page=actualités">Actualités</a>
              <a href="index.php?page=deposerPanier">Paniers Repas</a>
              <a href="index.php?page=livraison">Livraisons</a>
              <a href="index.php?page=contact">Contact</a>
            </div>
          </div>

          <div id="sideheader2">
           <?php hideSideBarWhenConnected2(); ?>
              <a href="https://www.instagram.com/poureuxnancy/?hl=en"><i id="instalogo" class="fa-brands fa-instagram" href="https://www.instagram.com/poureuxnancy/?hl=fr"></i></a>
              <a href="https://www.facebook.com/groups/832655407231327/"><i id="fblogo" class="fa-brands fa-facebook" href="https://www.facebook.com/groups/832655407231327"></i></a>


      </nav>
   <?php        showAdminPanel($bdd->connexion, $_SESSION); ?>
      <i class="fa-solid fa-bars menuBurger"></i>
      
  </header>
