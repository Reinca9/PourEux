<?php 
require_once('../config/Database.php');


function connexion($bdd, $username, $password){
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
$password = password_verify($password, $bdduser['mdp_user']);

  if ($password ==  true ){
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

     
      

        

?>