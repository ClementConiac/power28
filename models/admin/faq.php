<?php
function faqQuestionAnswerAll(){
    $db = dbConnect();
    $query = $db->query("SELECT COUNT(*) FROM question_faq")->fetchColumn();
    return $query;
}
function faqQuestionAnswerList(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM question_faq');
    return $query->fetchAll();
}
function faqCategoryAll(){
    $db = dbConnect();
    $query = $db->query("SELECT COUNT(*) FROM category_faq")->fetchColumn();
    return $query;
}
function faqCategoryList(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM category_faq');
    return $query->fetchAll();
}
function deleteQuestionAnswer($question_answer_id){
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM question_faq WHERE id = ?');
    $result = $query->execute(
        [
            $question_answer_id
        ]
    );
    if($result){
        $message = "Suppression efféctuée.";
        header('location:index.php?page=administration&admin=faq-question');
        exit;
    }
    else{
        $message = "Impossible de supprimer la seléction.";
    }
}
function deleteFaqCategory($faq_category_id){
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM category_faq WHERE id = ?');
    $result = $query->execute(
        [
            $faq_category_id
        ]
    );
    if($result){
        $message = "Suppression efféctuée.";
        header('location:index.php?page=administration&admin=faq-category');
        exit;
    }
    else{
        $message = "Impossible de supprimer la seléction.";
    }
}


function newFaqCategory($name){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO category_faq (name) VALUES (?)');
    $newFaqCategory = $query->execute(
        [
            $name,
        ]
    );
    if($newFaqCategory){
        header('location:index.php?page=administration&admin=faq-category');
        exit;
    }
    else{
        $message = "Impossible d'enregistrer la nouvelle categorie ...";
    }
}


function modifyFaqCategory($name, $id){
    $db = dbConnect();
    $query = $db->prepare('UPDATE category_faq SET
		name = :name
		WHERE id = :id'
    );
    $result = $query->execute(
        [
            'name' => $name,
            'id' => $id
        ]
    );
    if ($result) {
        header('location:index.php?page=administration&admin=faq-category');
        exit;
    } else {
        $message = 'Erreur.';
    }
}
function informationFaqCategory($faq_category_id){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM category_faq WHERE id = ?');
    $query->execute(array($faq_category_id));
    return $query->fetch();
}


function newFaqQuestion($question, $answer, $categories){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO question_faq (question, answer, category_faq_id) VALUES (?, ?, ?)');
    $newFaqQuestion = $query->execute(
        [
            $question,
            $answer,
            $categories,
        ]
    );
    if($newFaqQuestion){
        header('location:index.php?page=administration&admin=faq-question');
        exit;
    }
    else{
        $message = "Impossible d'enregistrer la nouvelle categorie ...";
    }
}


function modifyFaqQuestion($question, $answer, $categories, $id){
    $db = dbConnect();
    $query = $db->prepare('UPDATE question_faq SET
		question = :question,
		answer = :answer,
		category_faq_id = :category_faq_id
		WHERE id = :id'
    );
    $result = $query->execute(
        [
            'question' => $question,
            'answer' => $answer,
            'categories' => $categories,
            'id' => $id
        ]
    );
    if ($result) {
        header('location:index.php?page=administration&admin=faq-question');
        exit;
    } else {
        $message = 'Erreur.';
    }
}
function categoriesArticle($article_id){
    $db = dbConnect();
    $query = $db->prepare('SELECT category_id FROM article_category WHERE article_id = ?');
    $query->execute(array($article_id));
    return $query->fetchAll();
}

function informationFaqQuestion($faq_category_id){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM question_faq WHERE id = ?');
    $query->execute(array($faq_category_id));
    return $query->fetch();
}
