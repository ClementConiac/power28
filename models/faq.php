<?php
function faqCategories (){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM category_faq ');
    return $query->fetchAll();
}

function faqQuestionsAnswers (){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM question_faq ');
    return $query->fetchAll();
}

