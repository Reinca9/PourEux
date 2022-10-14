<?php

function setNewUser(PDO $bdd, array $user){
    $str = 'INSERT INTO user (prenom_user, nom_user, adresse_user, code_postal_user, repas_user, telephone_user, email_user, facebook_user, id_ville_user) VALUES (:prenom_user, :nom_user, :adresse_user, :code_postal_user, :repas_user, :telephone_user, :email_user, :facebook_user, :id_ville_user)';

    $query = $bdd->prepare($str);
    $query->bindValue(':prenom_user', $user['prenom'], PDO::PARAM_STR);
    $query->bindValue(':nom_user', $user['nom'], PDO::PARAM_STR);
    $query->bindValue(':adresse_user', $user['adresse'], PDO::PARAM_STR);
    $query->bindValue(':code_postal_user', $user['cp'], PDO::PARAM_STR);
    $query->bindValue(':repas_user', $user['repas'], PDO::PARAM_STR);
    $query->bindValue(':telephone_user', $user['role'], PDO::PARAM_INT);
    $query->bindValue(':email_user', $user['adresse'], PDO::PARAM_INT);
    $query->bindValue(':')
    return $query->execute();
}

function getUserByEmail(PDO $bdd, string $mail){
    $str = 'SELECT * FROM user WHERE mail_user = :mail';

    $query = $bdd->prepare($str);

    $query->bindValue(':mail', $mail, PDO::PARAM_STR);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}

?>