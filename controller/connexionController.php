<?php

function connectUser(PDO $bdd, array $array){
  if(isset($array['mail'], $_POST['mdp'])){
    $user['mail'] = strip_tags($array['mail']);
    $user['mdp'] = $array['mdp'];
    $bddInfo = getUserByEmail($bdd, $user['mail']);
    if($bddInfo != false){
      if(password_verify($user['mdp'], $bddInfo['mdp_user'])){
        $_SESSION['user'] = $bddInfo;

        assignPanierToUser($bdd);

        unset($_SESSION['user']['mdp_user']);
        unset($_SESSION['panier']);
        header('Location: index.php');
      } else {
        return '<span class="error">Mauvais mot de passe</span>';
      }
    }else{
      return '<span class="error">Adresse mail inconnue</span>';
    }
  }
}

?>