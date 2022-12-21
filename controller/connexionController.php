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
  header('Location:index.php?page=deposerPanier');
  }else{
    echo '<div id="mdpInexistant">Mot de passe invalide</div>';


        }

      }
  
    }
  } 

function selectConnectedUser(PDO $bdd,string $username){
  if(isset($_SESSION['identifiant'])){
  $userMail = strip_tags($_SESSION['identifiant']);
  $userstr = "SELECT * FROM user WHERE email_user = '$userMail'";
  $userquery = $bdd->prepare($userstr);
  $userquery->bindValue(':email_user', $username, PDO::PARAM_INT);
  $userquery->execute();
  $bdduser = $userquery->fetch();
  $loggedInUserId = $bdduser['id_user'];
  return $loggedInUserId;

  }
}
function showAdminPanel(PDO $bdd, $username){
  if(isset($_SESSION['identifiant'])){
  $userMail = strip_tags($_SESSION['identifiant']);

  $userstr = "SELECT * FROM user WHERE email_user = '$userMail'";
  $userquery = $bdd->prepare($userstr);
  $userquery->bindValue(':email_user', $username, PDO::PARAM_INT);
  $userquery->execute();
  $bdduser = $userquery->fetch();
  $idUser = $bdduser['id_user'];
  $role = "SELECT id_role_user_role FROM user_role  WHERE  id_user_user_role = '$idUser'";
  $query = $bdd->prepare($role);
  $query->bindValue(':role', $role, PDO::PARAM_INT);
  $query->execute();
  $role = $query->fetch();
      if($role['id_role_user_role'] == 3){
        echo'<a id="adminPanel" href="adminIndex.php?page=allUsers">Gestion administrateur</a>';
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