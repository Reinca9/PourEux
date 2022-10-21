<?php function connexion($bdd, $email, $mdp){

if(isset($email)){


    $bdduser = verifUser($bdd, $email);
    if ( $bdduser == false OR empty($bdduser)){
      echo 'identifiant inexistant';
    }
    else {
      $mdpHash = $bdduser['mdp'];
      $mdp = password_verify($mdp, $mdpHash);
      echo 'mot de passe invalide';
    }
    if ($mdp ==  true ){
        echo 'connecté';
        header('Location:index.php');
        $_SESSION['id_role']= $bdduser['id_role'];
        $_SESSION['email'] = $email;
        $_SESSION ['mdp'] =  $mdp;
   }
    else{
        echo 'mot de passe invalide';
         }
    }
}
?>