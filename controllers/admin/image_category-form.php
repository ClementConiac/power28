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


if(isset($_POST['save'])) {
    newImageCategory($_POST['categoryName'], $_POST['categoryDescription']);
}
if(isset($_POST['update'])){
    modifyImageCategory($_POST['categoryName'], $_POST['categoryDescription'], $_POST['id']);
}
if(($_GET['page'] == 'administration') && (isset($_GET['admin']) == 'modify-image-category') && isset($_GET['image-category_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){
    $categories = informationImageCategory($_GET['image-category_id']);
}

require_once ('views/admin/image_category-form.php');