<?php
require_once('../controller/inscriptionController.php');
require('header2.php');
if(isset($_POST['nom'])){
  inscription($bdd->connexion, $_POST);
}
?>
<script defer type="text/javascript" src="../public/assets/js/sameEmail.js"></script>
<script defer type="text/javascript" src="../public/assets/js/ville.js"></script>
<div>empty content</div>
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
                <button class=" signButton" id="jeMinscris" type=" submit">
                    M'inscrire
                </button>
        </div>
        <img id="loginLogoSvgInscription" src=" assets/img/login-logo.svg" alt="">
        </form>
    </div>
</div>