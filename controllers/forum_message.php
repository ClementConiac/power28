<?php
require_once ('models/forum.php');
$forumCategory = forumCategory();


if (isset($_GET['subject_id'])){
    $forumCurrentSubject = forumCurrentSubject($_GET['subject_id']);
}

if(isset($_POST['save'])){
    newMessage($_POST['contentMessage'], $_POST['subjectId'], $_SESSION['id']);
}

if(isset($_GET['forum-message_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){
    deleteForumMessage($_GET['forum-message_id']);
}
require_once ('views/forum_message.php');

