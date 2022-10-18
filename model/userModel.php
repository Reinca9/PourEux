<?php


function setNewUser(PDO $bdd, array $user){
    $str = 'INSERT INTO user (prenom_user, nom_user, mdp_user, adresse_user, code_postal_user, rue_user, telephone_user, email_user, facebook_user) VALUES (:prenom_user, :nom_user, :mdp_user, :adresse_user, :code_postal_user, :rue_user, :telephone_user, :email_user, :facebook_user)';
 
    $query = $bdd->prepare($str);
    $query->bindValue(':prenom_user', $user['prenom'], PDO::PARAM_STR);
    $query->bindValue(':nom_user', $user['nom'], PDO::PARAM_STR);
    $query->bindValue(':mdp_user', $user['mdp'], PDO::PARAM_STR);
    $query->bindValue(':adresse_user', $user['adresseVille'], PDO::PARAM_STR);
    $query->bindValue(':code_postal_user', $user['adresseCp'], PDO::PARAM_INT);
    $query->bindValue(':rue_user', $user['rue'], PDO::PARAM_STR);
    $query->bindValue(':telephone_user', $user['tel'], PDO::PARAM_INT);
    $query->bindValue(':email_user', $user['email'], PDO::PARAM_STR);
    $query->bindValue(':facebook_user', $user['facebook'], PDO::PARAM_STR);
    $query->execute();
    $userId = SelectUserId($bdd, $user);
     insertIntoUserRole($user,$bdd, $userId);

}
function SelectUserId(PDO $bdd, $user){
      $queryUserId = 'SELECT MAX(id_user) AS id_user_user_role FROM user';
      $query = $bdd->prepare($queryUserId);
      $query->execute();
      $userId = $query->fetch(PDO::FETCH_ASSOC);
     return $userId;
      
    }
    function insertIntoUserRole($user,$bdd, $userId){
      $str = 'INSERT INTO user_role (id_role_user_role, id_user_user_role) VALUES (:b,:a)';
      $query = $bdd->prepare($str);
      $query->bindValue(':b',$user['roleSelect'],PDO::PARAM_INT);   
      $query->bindValue(':a',$userId['id_user_user_role'],PDO::PARAM_INT);  
      $query->execute();
     
    }
    function verifyConnexion(PDO $bdd, $mail, $pw){
      $str = 'SELECT * FROM user WHERE mail=:mail';
      $userquery = $bdd->prepare($str);
      $userquery->bindValue(':mail', $mail, PDO::PARAM_STR);
      $userquery->execute();
      $bdduser = $userquery->fetch();
      if($bdd == false){
        echo '<span id="idInexistant">Identifiant inexistant</span>';
      }
    }
    function 








    
function getUserByEmail(PDO $bdd, string $mail){
    $str = 'SELECT * FROM user WHERE mail_user = :mail';
    $query = $bdd->prepare($str);
    $query->bindValue(':mail', $mail, PDO::PARAM_STR);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}
function getUserByRepas(PDO $bdd, string $user){
  $str ="SELECT id_user_cuisnier, id_user_livreur FROM repas INNER JOIN user WHERE repas_user = :repas";
  $query = $bdd->prepare($str);
  $query->bindValue(':repas', $repas, PDO::PARAM_INT);
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