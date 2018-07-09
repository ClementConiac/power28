<?php

if(!isset($_SESSION['is_admin']) OR $_SESSION['is_admin'] == 0){
    header('location:index.php');
    exit;
}
require_once ('models/admin/faq.php');
require_once ('models/admin/image.php');
require_once ('models/admin/user.php');
require_once ('models/admin/product.php');




$userAll = userAll();
$imageAll = imageAll();
$images = imageList();
$faqQuestionAnswerAll = faqQuestionAnswerAll();
$faqCategoryAll = faqCategoryAll();
$productAll = productAll();
$categoryImageAll = categoryImageAll();



if(isset($_GET['image_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){
    deleteImage($_GET['image_id']);
}




require_once ('views/admin/image-list.php');