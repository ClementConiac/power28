<?php
require_once('models/signin.php');

if(isset($_POST['register'])) {
    $user = newUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'],
            $_POST['password_confirm'], $_POST['societyName'], $_POST['societyAdress'], $_POST['siret'], $_POST['phone'], $_SESSION['id']);
}
require_once('views/signin.php');