<?php
require_once('models/login.php');

if(isset($_POST['connection'])) {
    $user = Connection($_POST['email'], $_POST['password']);
}
require_once('views/login.php');
