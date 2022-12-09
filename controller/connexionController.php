<?php function connexion($bdd, $username, $password){

if(isset($_POST['identifiant'])){
$username = strip_tags($_POST['identifiant']); 
$password = ($_POST['mdp']);

$userstr = 'SELECT * FROM user WHERE email_user=:email_user';
$userquery = $bdd->prepare($userstr);
$userquery->bindValue(':email_user', $username, PDO::PARAM_STR);
$userquery->execute();
$bdduser = $userquery->fetch();
if ( $bdduser == false){
echo 'identifiant inexistant';


}
else {
$passwordHash = $bdduser['mdp'];
$password = password_verify($password, $passwordHash);

  if ($password ==  true ){
  echo 'connecté';

  $_SESSION['ID_role']= $bdduser['ID_role'];
  $_SESSION['identifiant'] = $username;
  $_SESSION ['mdp'] =  $password;
  header('Location:index.php');
  }
  else{
echo 'mot de passe invalide';


  }

  }

}
     
        
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