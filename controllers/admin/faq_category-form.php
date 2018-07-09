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
$faqCategoryList = faqCategoryList();
$faqCategoryAll = faqCategoryAll();
$productAll = productAll();
$categoryImageAll = categoryImageAll();



if(isset($_POST['save'])) {
    newFaqCategory($_POST['name']);
}
if(isset($_POST['update'])){
    modifyFaqCategory($_POST['name'], $_POST['id']);
}
if(($_GET['page'] == 'administration') && (isset($_GET['admin']) == 'modify-faq-category') && isset($_GET['faq-category_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){
    $categories = informationFaqCategory($_GET['faq-category_id']);
}

require_once ('views/admin/faq_category-form.php');