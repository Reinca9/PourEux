<?php function connexion($bdd, $email, $mdp){

if(isset($_POST['mail'])){
$id = strip_tags($_POST['mail']); 
$password = ($_POST['mdp']);

$userstr = 'SELECT * FROM user WHERE email_user=:email_user';
$userquery = $bdd->prepare($userstr);
$userquery->bindValue(':email_user', $id, PDO::PARAM_STR);
$userquery->execute();
$bdduser = $userquery->fetch();
if ( $bdduser == false){
echo '<div> identifiant inexistant </div>';


}
else {
$passwordHash = $bdduser['mdp'];
$password = password_verify($password, $passwordHash);

  if ($password ==  true ){
  echo 'connecté';

  $_SESSION['ID_role']= $bdduser['ID_role'];
  $_SESSION['id'] = $id;
  $_SESSION ['mdp'] =  $password;
  header('Location:index.php');
  }
  else{
echo 'mot de passe invalide';


    }

   }

  }
     
        
}
?>