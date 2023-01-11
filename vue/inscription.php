<?php
require_once('../controller/inscriptionController.php');
require('header2.php');
inscription($bdd->connexion, $_POST);   
    
  

$url = "https://www.google.com/recaptcha/api/siteverify?secret=6LehoFMiAAAAAKxB97Wjry-mpDY3FFhmvAQ4FZr0}";
if(function_exists('curl_version')){
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($curl);
}else{
    $response = file_get_contents($url);
}
if(empty($response) || is_null($response)){
   
}else{
    $data = json_decode($response);
    if($data->success){
    }else{
       
    }
}

?>
<script defer type="text/javascript" src="../public/assets/js/sameEmail.js"></script>
<script defer type="text/javascript" src="../public/assets/js/ville.js"></script>
<div>.</div>
<div id="pageInscription">
    <div id="backgroundInscription">
        <div class="inscriptionContainer">
            <form id="formSignIn" action="" method="POST" class="signForm">
                <h1 id="inscrivezVous" class="formTitle">Nous rejoindre</h1>
                <div class="roleGroup">
                    <label for="roleSelect" id="roleLabel">Souhaitez vous livrer ou cuisiner</label>
                    <select name="roleSelect" id="roleSelect">
                        <option value="1">Cuisinier</option>
                        <option value="2">Livreur</option>
                    </select>
                </div>
                <div id="nomPrenom">
                    <div class=" inputGroup">
                        <input id="inputNom" type="text" class="signInput" id="nom" name="nom" placeholder="Nom"
                            autocomplete="given-name">
                    </div>
                    <div class="inputGroup">
                        <input type="text" class="signInput" id="prenom" name="prenom" placeholder="Prénom"
                            autocomplete="family-name">
                    </div>
                </div>
                <div class=" inputGroup">
                    <input type="tel" class="signInput" id="tel" name="tel" placeholder="Téléphone">
                </div>
                <div id="mailInput">
                    <div class="inputGroup">
                        <input type="email" class="signInput" id="email" name="email" placeholder="E-mail"
                            autocomplete="email">

                    </div>
                    <div class="inputGroup">
                        <input type="email" class="signInput" id="email2" name="email_repeat"
                            placeholder="Confirmez votre email">
                    </div>
                    <div id="errorMailSpan"></div>
                </div>
                <div class="villeAndCp">
                    <div class="inputGroup">
                        <input type="text" class="signInput" id="adresseVille" name="adresseVille" placeholder="Ville"
                            autocomplete="address-level2" onkeyup="getVilleByName()" onfocus="closeProp()">
                        <div class="proposition" id="villeProp"></div>
                    </div>
                    <div class="inputGroup">

                        <input type="text" class="signInput" id="adresseCp" name="adresseCp" placeholder="Code postal"
                            autocomplete="postal-code" onkeyup="getVilleByCp()" onfocus="closeProp()">
                        <div class="proposition" id="cpProp"></div>
                    </div>
                </div>
                <div id="adresseRue">
                    <div class="inputGroup">
                        <input type="text" class="signInput" id="adressePrefix" name="rue" placeholder="Rue"
                            autocomplete="address-line2">
                    </div>
                    <div class="inputGroup">
                        <input type="text" class="signInput" name="facebook" placeholder="Votre Facebook">

                    </div>
                </div>
                <div id=" passwordGroup">
                    <div class="inputGroup">
                        <label for="mdp" class="inputLabel">
                            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" class="signInput"
                                minlength="5">
                        </label>
                    </div>
                    <div class=" inputGroup">
                        <label for="confirmMdp" class="inputLabel">
                            <input type="password" name="mdp_repeat" id="confirmMdp"
                                placeholder="Confirmez le mot de passe" class="signInput" minlength="5">
                        </label>
                    </div>
                </div>
                <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
                <button class=" signButton" id="jeMinscris" type="submit">
                    M'inscrire
                </button>
                <script src="https://www.google.com/recaptcha/api.js?render=6LehoFMiAAAAALMS729hoUB6KDhj2VlignCcCNC8"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LehoFMiAAAAALMS729hoUB6KDhj2VlignCcCNC8', {action: ''}).then(function(token) {
        document.getElementById('recaptchaResponse').value = token
    });
});
</script>
        </div>
        <img id="loginLogoSvgInscription" src=" assets/img/login-logo.svg" alt="">
        </form>
    </div>
</div>