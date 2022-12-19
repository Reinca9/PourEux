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
  header('Location:index.php');
  }else{
    echo '<div id="mdpInexistant">Mot de passe invalide</div>';


        }

      }
  
    }
  }
function showAdminPanel(PDO $bdd){
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
     
      

        

?>