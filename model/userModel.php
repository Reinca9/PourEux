<?php
function setNewUser($bdd, $array)
{
  $password = password_hash($array['mdp'], PASSWORD_BCRYPT);
  $str = 'INSERT INTO user (prenom_user, nom_user, mdp_user, adresse_user, code_postal_user, rue_user, telephone_user, email_user, facebook_user) VALUES (:prenom_user, :nom_user, :mdp_user, :adresse_user, :code_postal_user, :rue_user, :telephone_user, :email_user, :facebook_user)';

  $query = $bdd->prepare($str);
  $query->bindValue(':prenom_user', $array['prenom'], PDO::PARAM_STR);
  $query->bindValue(':nom_user', $array['nom'], PDO::PARAM_STR);
  $query->bindValue(':mdp_user', $password, PDO::PARAM_STR);
  $query->bindValue(':adresse_user', $array['adresseVille'], PDO::PARAM_STR);
  $query->bindValue(':code_postal_user', $array['adresseCp'], PDO::PARAM_INT);
  $query->bindValue(':rue_user', $array['rue'], PDO::PARAM_STR);
  $query->bindValue(':telephone_user', $array['tel'], PDO::PARAM_INT);
  $query->bindValue(':email_user', $array['email'], PDO::PARAM_STR);
  $query->bindValue(':facebook_user', $array['facebook'], PDO::PARAM_STR);
  $query->execute();
  $userId = SelectUserId($bdd, $array);
  insertIntoUserRole($array, $bdd, $userId);
}
function SelectUserId(PDO $bdd, $array)
{
  $queryUserId = 'SELECT MAX(id_user) AS id_user_user_role FROM user';
  $query = $bdd->prepare($queryUserId);
  $query->execute();
  $userId = $query->fetch(PDO::FETCH_ASSOC);
  return $userId;
}
function insertIntoUserRole($user, $bdd, $userId)
{
  $str = 'INSERT INTO user_role (id_role_user_role, id_user_user_role) VALUES (:b,:a)';
  $query = $bdd->prepare($str);
  $query->bindValue(':b', $user['roleSelect'], PDO::PARAM_INT);
  $query->bindValue(':a', $userId['id_user_user_role'], PDO::PARAM_INT);
  $query->execute();
}
function insertIntoRelationRepasUser(PDO $bdd,$loggedInUserId){
  
  $repasId = selectMaxRepasId($bdd);
  $str = 'INSERT INTO repas_user (id_repas_user, id_repas_repas) VALUES (:a, :b)';
  $query = $bdd->prepare($str);
  $query->bindValue(':a', $loggedInUserId, PDO::PARAM_INT);
  $query->bindValue(':b', $repasId['id_repas_repas'], PDO::PARAM_INT);
  $query->execute();
}
 function selectMaxRepasId( $bdd)
{
  $queryRepas = 'SELECT MAX(id_repas) AS id_repas_repas FROM repas';
  $query = $bdd->prepare($queryRepas);
  $query->execute();
  $repasId = $query->fetch(PDO::FETCH_ASSOC);
  return $repasId;
}

function verifyConnexion(PDO $bdd, $mail, $pw)
{
  $str = 'SELECT * FROM user WHERE mail=:mail';
  $userquery = $bdd->prepare($str);
  $userquery->bindValue(':mail', $mail, PDO::PARAM_STR);
  $userquery->execute();
  $bdduser = $userquery->fetch();
  if ($bdd == false) {
    echo '<span id="idInexistant">Identifiant inexistant</span>';
  }
}
function getUsers($bdd)
{
  $userstr = 'SELECT * FROM user';
  $userquery = $bdd->prepare($userstr);
  $userquery->execute();
  $bdduser = $userquery->fetchAll();
  return $bdduser;
}



function getUserByEmail(PDO $bdd, string $mail)
{
  $str = 'SELECT * FROM user WHERE mail_user = :mail';
  $query = $bdd->prepare($str);
  $query->bindValue(':mail', $mail, PDO::PARAM_STR);
  $query->execute();
  return $query->fetch(PDO::FETCH_ASSOC);
}
function getUserByRepas(PDO $bdd, string $user)
{
  $str = "SELECT id_user_cuisnier, id_user_livreur FROM repas INNER JOIN user WHERE repas_user = :repas";
  $query = $bdd->prepare($str);
  $query->bindValue(':repas', $repas, PDO::PARAM_INT);
  $query->execute();
  return $query->fetch(PDO::FETCH_ASSOC);
}

function getVilleByNom($bdd, $nom)
{
  $selectstr = 'SELECT * FROM ville WHERE ville_nom=:ville';
  $userquery = $bdd->prepare($selectstr);
  $userquery->bindValue(':ville', $nom, PDO::PARAM_STR);
  $userquery->execute();
  $bddarray = $userquery->fetchAll();
  return $bddarray;
}
function deposerRepas($bdd, $id){
  if(isset($_SESSION['identifiant'])){

  }else{
    header('Location:index.php?page=login');
  }
}