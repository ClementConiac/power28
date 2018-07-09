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
$categoryImageAll = categoryImageAll();
$productList = productList();


if(isset($_GET['product_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){
    deleteProduct($_GET['product_id']);
}


require_once ('views/admin/product-list.php');