<?php
require_once('models/success-charge.php');


if (!empty($_GET['transactionId']) && !empty($_GET['product'])){
    $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

    $transactionId = $GET['transactionId'];
    $product = $GET['product'];
}

else{
    header('location:index.php?page=home');
}

require_once('views/success-charge.php');