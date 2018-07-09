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
$faqCategoryList = faqCategoryList();
$productAll = productAll();
$categoryImageAll = categoryImageAll();




if(isset($_GET['faq-category_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){
    deleteFaqCategory($_GET['faq-category_id']);
}


require_once ('views/admin/faq_category-list.php');