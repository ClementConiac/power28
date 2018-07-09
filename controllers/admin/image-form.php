<?php
if(!isset($_SESSION['is_admin']) OR $_SESSION['is_admin'] == 0){
    header('location:index.php');
    exit;
}
require_once ('models/admin/faq.php');
require_once ('models/admin/image.php');
require_once ('models/admin/user.php');
require_once ('models/admin/product.php');
require_once ('models/admin/image.php');



$imageAll = imageAll();
$userAll = userAll();
$faqQuestionAnswerAll = faqQuestionAnswerAll();
$faqQuestionAnswerList = faqQuestionAnswerList();
$faqCategoryAll = faqCategoryAll();
$images = imageList();
$productAll = productAll();
$categoriesScreen = categoryImageList();
$categoryImageAll = categoryImageAll();


if(isset($_POST['add_image'])){
    newImage($_POST['description'], $_POST['categoriesScreen'], $_FILES['image'], $_FILES['image']['name'], $_FILES['image']['tmp_name'] );
}

require_once ('views/admin/image-form.php');
