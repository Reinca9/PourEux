<?php 
require_once('../config/Database.php');


function connexion($bdd){
if(isset($_POST['mail'])){  
$username = strip_tags($_POST['mail']); 
$password = ($_POST['mdp']);

$userstr = 'SELECT * FROM user WHERE email_user=:email_user';
$userquery = $bdd->prepare($userstr);
$userquery->bindValue(':email_user', $username, PDO::PARAM_STR);
$userquery->execute();
$bdduser = $userquery->fetch();
if ( $bdduser == false){
echo '<div id="idInexistant">Identifiant inexistant</div>';
 }
else {
$passwordVerif = $bdduser['mdp_user'];
$password = password_verify($password, $passwordVerif);

  if ($password = true){
   echo '<div id="vousEtesConnecté">Connecté</div>';
  $_SESSION['identifiant'] = $username;
  $_SESSION ['mdp'] =  $password;
  header('Location:index.php?page=leCollectif');
  }else{
    echo '<div id="mdpInexistant">Mot de passe invalide</div>';


        }

      }
  
    }
  }
  //  <?php showAdminPanel($bdd, $id, $password) 
function showAdminPanel(PDO $bdd, $id, $password){
  if(isset($_SESSION['identifiant'])){
  $userMail = strip_tags($_POST['mail']);
  $userstr = 'SELECT * FROM user WHERE email_user=:email_user';
  $userquery = $bdd->prepare($userstr);
  $userquery->bindValue(':email_user', $username, PDO::PARAM_STR);
  $userquery->execute();
  $bdduser = $userquery->fetch();
  $role = 'SELECT id_user_user_role FROM user_role INNER JOIN user WHERE user.id_user = :a';
  $query = $bdd->prepare($role);
  $query->bindValue(':roleUser', $$roleUser, PDO::PARAM_INT);
  $query->execute();
  $query = $roleQuery->fetch();
    if($bdduser = true){
      if($roleQuery['id_role_user_role'] = 3){
        echo'<a id="adminPanel" href="index.php?page=adminPanel">Admin Panel</a>';
      }
    }
    
  }
  
     
}
function hideSideBarWhenConnected1(){
  if(isset($_SESSION['identifiant'])){
    echo '<div class="coEtDecoDiv">;
     <p id="Connecté">Vous êtes connecté</p>
    <a id="seDeco1" href="index.php?page=session">Se deconnecter</a>
    </div>';  
    }else{
    echo '<i id="connexion" class="fa-solid fa-user"></i>
              <a id="connexionTxt" href="index.php?page=login">Connexion</a>
              <a id="inscription" href="index.php?page=signin">Inscription</a>';
    
    }
}

function hideSideBarWhenConnected2(){
  if(isset($_SESSION['identifiant'])){
    echo'<div class="coEtDecoDiv2"> 
     <p id="Connecté">Vous êtes connecté</p>
    <a id="seDeco" href="index.php?page=session">Se deconnecter</a>
    </div>';
  }else{
    echo '<i id="connexion" class="fa-solid fa-user"></i>
              <a href="index.php?page=login">Connexion</a>
              <a id="inscription" href="index.php?page=signin">Inscription</a>';
  }
  
}
    
      

        

?>