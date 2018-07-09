<?php
require_once('models/product.php');
$productCategory = productCategory();


if (isset($_GET['category_id'])){
    $productCurrentCategory = productCurrentCategory($_GET['category_id']);
}
require_once('views/product.php');