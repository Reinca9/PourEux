<?php
require('../controller/inscriptionController.php');
require_once('../model/userModel.php');
require('header2.php');
if(isset($_POST['nom'])){
  setNewUser($bdd->connexion, $_POST);
}
?>
<!-- <script defer type="text/javascript" src="../public/assets/js/sameEmail.js"></script> -->
<script type="text/javascript" src="../public/assets/js/formVerification.js"></script>
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
                        <option value="cuisinier">Cuisinier</option>
                        <option value="livreur">Livreur</option>
                    </select>
                </div>
                <div id="nomPrenom">
                    <div class=" inputGroup">
                        <input id="inputNom" type="text" class="signInput" id="nom" name="nom" placeholder="Nom">
                    </div>
                    <div class="inputGroup">
                        <input type="text" class="signInput" id="prenom" name="prenom" placeholder="Prénom">
                    </div>
                </div>
                <div class="inputGroup">
                    <input type="number" class="signInput" id="tel" name="tel" placeholder="Portable">
                </div>
                <div id="mailInput">
                    <div class="inputGroup">
                        <input type="email" class="signInput" id="email" name="email" placeholder="E-mail">

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

                        <input type="text" class="signInput" id="adressePrefix" name="adressePrefix" placeholder="Rue"
                            autocomplete="address-line2">
                    </div>
                    <div class="inputGroup">
                        <input type="text" class="signInput" id="adresseComplement" name="adresseComplement"
                            placeholder="Complement d'adresse*" autocomplete="address-line4">
                    </div>
                </div>
                <div id="passwordGroup">
                    <div class="inputGroup">
                        <label for="mdp" class="inputLabel">
                            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" class="signInput">
                        </label>
                    </div>
                    <div class="inputGroup">
                        <label for="confirmMdp" class="inputLabel">
                            <input type="password" name="confirmMdp" id="confirmMdp"
                                placeholder="Confirmer mot de passe" class="signInput">
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