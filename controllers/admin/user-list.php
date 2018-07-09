<?php

if(!isset($_SESSION['is_admin']) OR $_SESSION['is_admin'] == 0){
    header('location:index.php');
    exit;
}
require_once ('models/admin/faq.php');
require_once ('models/admin/image.php');
require_once ('models/admin/user.php');
require_once ('models/admin/product.php');




$faqQuestionAnswerAll = faqQuestionAnswerAll();
$faqCategoryAll = faqCategoryAll();
$imageAll = imageAll();
$userAll = userAll();
$users = userList();
$productAll = productAll();
$categoryImageAll = categoryImageAll();



if(isset($_GET['user_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){
    deleteUser($_GET['user_id']);

}

require_once ('views/admin/user-list.php');