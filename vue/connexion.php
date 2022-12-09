<?php
include('header2.php');
if(isset($_POST['mail'])){
    $username = strip_tags($_POST['mail']);
    $password = $_POST['mdp'];
    
}
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
<div>empty content</div>
<div id="connexionContainer">
    <div id="formConnexionContainer">
        <h1 id="seConnecterh1">Se connecter</h1>
        <form action="" method="POST" class="loginForm">
            <div class="inputGroup">
                <input type="email" name="mail" id="mail" placeholder="Email" class="connexionInput"
                    autocomplete="email">
            </div>

            <div class=" inputGroup">
                <input type="password" name="mdp" placeholder="Mot de passe" id="mdp" class="connexionInput"
                    autocomplete="current-password">
            </div>
            <button type="submit" id="loginButton">
                Connexion
            </button>
            <div class="divResterConnecté">
                <div id="tickAndLabel">
                    <input id="tickResterConnecté" type="checkbox" name="resterConnecté">
                    <span>Rester connecté</span>
                </div>
                <div>
                    <a id="mdpoublie" href="">Mot de passe oublié?</a>
                </div>

            </div>


<input type="hidden" id="recaptchaResponse" name="recaptcha-response">
<script src="https://www.google.com/recaptcha/api.js?render=6LehoFMiAAAAALMS729hoUB6KDhj2VlignCcCNC8"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LehoFMiAAAAALMS729hoUB6KDhj2VlignCcCNC8', {action: ''}).then(function(token) {
        document.getElementById('recaptchaResponse').value = token
    });
});
</script>
        </form>
    </div>
    <img id="loginLogoSvg" src=" assets/img/login-logo.svg" alt="">
</div>