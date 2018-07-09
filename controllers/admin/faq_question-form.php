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
$faqQuestionAnswerList = faqQuestionAnswerList();
$faqCategoryAll = faqCategoryAll();
$faqCategoryList = faqCategoryList();
$productAll = productAll();
$categoryImageAll = categoryImageAll();



if(isset($_POST['save'])) {
    newFaqQuestion($_POST['question'], $_POST['answer'], $_POST['categories']);
}
if(isset($_POST['update'])){
    modifyFaqQuestion($_POST['question'], $_POST['answer'], $_POST['categories'], $_POST['id']);
}
if(($_GET['page'] == 'administration') && (isset($_GET['admin']) == 'modify-faq-question') && isset($_GET['faq-question_id']) && isset($_GET['action']) && $_GET['action'] == 'edit'){
    $questions = informationFaqQuestion($_GET['faq-question_id']);
}

require_once ('views/admin/faq_question-form.php');