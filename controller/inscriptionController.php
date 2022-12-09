<?php


require_once('../model/AdresseModel.php');
require_once('../model/userModel.php');
require_once('../model/villeModel.php');
require_once('../controller/function.php');



function inscription($bdd, $array){
    $ok =  false;
    if(isset($array['nom']) && isset($array['adresseVille'])){
        $mdp = strip_tags($array['mdp']);
        $nom = strip_tags($array['nom']);
        $prenom = strip_tags($array['prenom']); 
        $email = strip_tags($array['email']);
        $tel = strip_tags($array['tel']);
        $adresse = strip_tags($array['rue']);
        $cp = strip_tags($array['adresseCp']);
        $ville = strip_tags($array['adresseVille']);
        $fb = strip_tags($array['facebook']);
        
        setNewUser($bdd,$array);
                    
                }
            }

?>