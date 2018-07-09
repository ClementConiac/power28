<?php
require_once('models/user-profile.php');
require_once ('models/login.php');
require_once ('models/signin.php');
if(!isset($_SESSION['user'])){
    header('location:../index.php');
    exit;
}
$users = connectedUser($_SESSION['id']);

if(isset($_POST['update'])){
    $user = updateConnectedUser($_POST['email'], $_POST['firstname'], $_POST['lastname'],
    $_POST['password'], $_POST['password_confirm'], $_POST['societyName'], $_POST['societyAdress'], $_POST['siret'], $_POST['phone'], $_SESSION['id']);
}

require_once ('views/user-profile.php');

?>