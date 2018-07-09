<?php
require_once ('models/forum.php');


$forumCategory = forumCategory();

if(isset($_GET['forum-category_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){
    deleteForumCategory($_GET['forum-category_id']);
}

require_once ('views/forum_index.php');


