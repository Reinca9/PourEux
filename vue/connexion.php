<?php
include('header2.php')
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



        </form>
    </div>
    <img id="loginLogoSvg" src=" assets/img/login-logo.svg" alt="">
</div>