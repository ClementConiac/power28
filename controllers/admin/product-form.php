<?php

if(!isset($_SESSION['is_admin']) OR $_SESSION['is_admin'] == 0){
    header('location:index.php');
    exit;
}
require_once ('models/admin/product.php');
require_once ('models/admin/faq.php');
require_once ('models/admin/image.php');
require_once ('models/admin/user.php');




$imageAll = imageAll();
$userAll = userAll();
$faqQuestionAnswerAll = faqQuestionAnswerAll();
$faqCategoryAll = faqCategoryAll();
$productAll = productAll();
$productList = productList();
$categoryImageAll = categoryImageAll();


if(isset($_POST['save'])) {
    newProduct($_POST['name'], $_POST['description'], $_POST['price']);
}
if(isset($_POST['update'])){
    modifyProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['id']);
}
if(($_GET['page'] == 'administration') && (isset($_GET['admin']) == 'modify-product') && isset($_GET['product_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){
    $product = informationProduct($_GET['product_id']);
}
require_once ('views/admin/product-form.php');