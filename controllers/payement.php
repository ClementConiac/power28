<?php
require_once('models/payement.php');

if (isset($_POST['buy'])){
    $total = price($_POST['productPrice'], $_POST['hostingPrice']);
}
if (!isset($_POST['buy'])){
    header('location:index.php?page=home');
}




require_once('views/payement.php');