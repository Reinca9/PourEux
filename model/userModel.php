<?php

function setNewUser(PDO $bdd, array $user){
    $str = 'INSERT INTO user (prenom_user, nom_user, adresse_user, code_postal_user, repas_user, telephone_user, email_user, facebook_user, id_ville_user) VALUES (:prenom_user, :nom_user, :adresse_user, :code_postal_user, :repas_user, :telephone_user, :email_user, :facebook_user, :id_ville_user)';

    $query = $bdd->prepare($str);
    $query->bindValue(':prenom_user', $user['prenom'], PDO::PARAM_STR);
    $query->bindValue(':nom_user', $user['nom'], PDO::PARAM_STR);
    $query->bindValue(':adresse_user', $user['adresse'], PDO::PARAM_STR);
    $query->bindValue(':code_postal_user', $user['cp'], PDO::PARAM_STR);
    $query->bindValue(':repas_user', $user['repas'], PDO::PARAM_STR);
    $query->bindValue(':telephone_user', $user['tel'], PDO::PARAM_INT);
    $query->bindValue(':email_user', $user['email'], PDO::PARAM_INT);
    $query->bindValue(':facebook_user', $user['facebook'], PDO::PARAM_STR);
    $query->bindValue(':id_ville_user', $user['ville'], PDO::PARAM_STR);
    return $query->execute();
}

function getUserByEmail(PDO $bdd, string $mail){
    $str = 'SELECT * FROM user WHERE mail_user = :mail';

    $query = $bdd->prepare($str);

    $query->bindValue(':mail', $mail, PDO::PARAM_STR);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}
function connectUser(PDO $bdd, array $array){
  if(isset($array['email'], $_POST['mdp'])){
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