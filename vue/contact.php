<!DOCTYPE html>
<html lang="en">
<?php
include('header2.php');
?>
<script src="https://kit.fontawesome.com/bd1f979c00.js" crossorigin="anonymous"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>empty content</div>
    <main id="mainContact">
        <div id="mainContactContent">
            <h1>Contact</h1>
            <span><i class="fa-solid fa-phone contactIcons"></i> 03 xx xx xx xx</span>
            <span><i class="fa-solid fa-mobile contactIcons contactPhoneIcon"></i> 06 xx xx xx xx</span>
            <div id="formContact">
                <span>
                    <input id=" contactName" type=" text" placeholder="Votre nom">
                    <input id="contactEmail" type="email" placeholder="Votre email">
                </span>
                <textarea name="" id="contactTA" cols="30" rows="10" placeholder="Tapez votre message ici"></textarea>
                <button id="contactSubmitButton" type="submit">C'est parti</button>

            </div>
    </main>
</body>

</html>