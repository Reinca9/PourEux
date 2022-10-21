<?php


require_once('../model/AdresseModel.php');
require_once('../model/userModel.php');
require_once('../model/villeModel.php');
require_once('../controller/function.php');



function inscription($bdd, $array){
    $ok =  false;
    if(isset($array['nom']) && isset($array['ville'])){
        $mdp = strip_tags($array['mdp']);
        $nom = strip_tags($array['nom']);
        $prenom = strip_tags($array['prenom']);
        $email = strip_tags($array['email']);
        $tel = strip_tags($array['tel']);
        $adresse = strip_tags($array['rue']);
        $mdp2 = strip_tags($array['mdp_repeat']);
        $cp = strip_tags($array['adresseCp']);
        $ville = strip_tags($array['adresseVille']);
        $fb = strip_tags($array['facebook']);
        $ok =  false;
        if(isset($array['email'])){
            if ($array['mdp'] == $array['mdp_repeat']) {

                $bdduser = getUsers($bdd);
                foreach ($bdduser as $resultat){
                    if ($email == $resultat ['email'])
                    $ok =  true;
                }
            }
            $mdp = password_hash($mdp, PASSWORD_BCRYPT);
            if (isset($prenom, $age, $telephone, $email, $email, $adresse, $mdp, $ville)){
                if ($ok == false) {
                    $bddarray = getVilleByNom($bdd, $ville);
                    foreach($bddarray as $resultat ){
                        $ville_id = $resultat ['ville_id'];
                    }
                    if(isset($ville_id)){
                        setNewUser($bdd, $mdp, $nom, $prenom, $email, $age, $adresse, $tel, $ville_id);
                    }
                }
            }
        }
    }
}

function createNewUser(PDO $bdd, array $user){
}
?>