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
$users = userList();
$faqCategoryAll = faqCategoryAll();
$productAll = productAll();
$categoryImageAll = categoryImageAll();





if(isset($_POST['save'])) {
    newUser($_POST['firstname'], $_POST['lastname'], $_POST['password'], $_POST['email'], $_POST['is_admin']);
}
if(isset($_POST['update'])){
    modifyUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['id'], $_POST['password']);
}
if(($_GET['page'] == 'administration') && (isset($_GET['admin']) == 'modify-user') && isset($_GET['user_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){
    $user = informationUser($_GET['user_id']);
}

require_once ('views/admin/user-form.php');