<?php

if(!isset($_SESSION['is_admin']) OR $_SESSION['is_admin'] == 0){
    header('location:index.php');
    exit;
}
require_once ('models/admin/faq.php');
require_once ('models/admin/image.php');
require_once ('models/admin/user.php');
require_once ('models/admin/product.php');




$imageAll = imageAll();
$userAll = userAll();
$faqQuestionAnswerAll = faqQuestionAnswerAll();
$faqCategoryAll = faqCategoryAll();
$productAll = productAll();
$categoryImageAll = categoryImageAll();
$categoryImageList = categoryImageList();



if(isset($_GET['category-image_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){
    deleteImageCategory($_GET['category-image_id']);
    die;
}

require_once ('views/admin/image_category-list.php');