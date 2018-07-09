<?php
require_once ('models/forum.php');


$forumCategory = forumCategory();


if (isset($_GET['category_id'])){
    $forumCurrentCategory = forumCurrentCategory($_GET['category_id']);
}

if(isset($_POST['save'])) {
    newSubject($_POST['nameSubject'], $_POST['contentSubject'], $_POST['categoriesSubject'], $_SESSION['id']);
}

if(isset($_GET['forum-subject_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){
    deleteForumSubject($_GET['forum-subject_id']);
}
require_once ('views/forum_subject.php');

