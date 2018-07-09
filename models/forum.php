<?php
function forumCategory(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM forum_category ');
    return $query->fetchAll();
}

function forumCurrentCategory($category_id){
    $db = dbConnect();
    $query = $db->prepare('
        SELECT forum_subject.* , users.firstname,lastname
		FROM forum_subject 
		JOIN forum_category ON forum_category.id = forum_subject.category_id 
		JOIN users ON forum_subject.users_id = users.id 
		WHERE forum_category.id = ?
		ORDER BY forum_subject.created_at DESC 
    ');
    $query->execute(array($category_id));
    return $query->fetchAll();
}

function forumCurrentSubject($subject_id){
    $db = dbConnect();
    $query = $db->prepare('
		SELECT forum_message.* , users.firstname,lastname,is_admin 
		FROM forum_message
        JOIN forum_subject ON forum_subject.id = forum_message.subject_id
        JOIN users ON forum_message.users_id = users.id
        WHERE forum_subject.id = ?
	');
    $query->execute(array($subject_id));
    return $query->fetchAll();
}

function newSubject ($name , $content, $category_id, $users_id){
    $db = dbConnect();
    if(empty($name) OR empty($content) OR empty($category_id)){
        $newSubjectMessage = "Merci de remplir tous les champs";
    }
    else{
        $query = $db->prepare('INSERT INTO forum_subject (name, category_id, users_id, created_at) VALUES (?, ?, ?, NOW())');
        $newSubject = $query->execute(
            [
                $name,
                $category_id,
                $users_id,
            ]
        );
        if($newSubject){
            $query = $db->prepare('INSERT INTO forum_message (content, subject_id, users_id, created_at) VALUES (?, ?, ?, NOW())');
            $newFirstMessage = $query->execute(
                [
                    $content,
                    $subject_id = $db-> lastInsertId(),
                    $users_id,
                ]
            );
            header('location:index.php?page=forum');
            exit;
        }
        else{
            $message = "Impossible de créer le nouveau sujet ...";
        }
    }
}

function newMessage ($content, $subject_id, $users_id){
    $db = dbConnect();
    if(empty($content) OR empty($subject_id)){
        $newSubjectMessage = "Merci de remplir tous les champs";
    }
    else{
        $query = $db->prepare('INSERT INTO forum_message (content, subject_id, users_id, created_at) VALUES (?, ?, ?, NOW())');
        $newMessage = $query->execute(
            [
                $content,
                $subject_id,
                $users_id,
            ]
        );

        if($newMessage){
            header('location:index.php?page=forum');
            exit;
        }
        else{
            $message = "Impossible de créer le nouveau sujet ...";
        }
    }
}

function deleteForumCategory($forum_category_id){
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM forum_category WHERE id = ?');
    $result = $query->execute(
        [
            $forum_category_id
        ]
    );
    if($result){
        $query = $db->prepare('DELETE FROM forum_subject WHERE category_id = ?');
        $resultSubject = $query->execute(
            [
                $forum_category_id
            ]
        );

        if ($resultSubject){
            header('location:index.php?page=forum');
            exit;
        }

    }
    else{
        $message = "Impossible de supprimer la seléction.";
    }
}

function deleteForumSubject($forum_subject_id){
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM forum_subject WHERE id = ?');
    $result = $query->execute(
        [
            $forum_subject_id
        ]
    );
    if($result){
        $query = $db->prepare('DELETE FROM forum_message WHERE subject_id = ?');
        $resultSubject = $query->execute(
            [
                $forum_subject_id
            ]
        );

        if ($resultSubject){
            header('location:index.php?page=forum');
            exit;
        }

    }
}

function deleteForumMessage($forum_message_id){
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM forum_message WHERE id = ?');
    $result = $query->execute(
        [
            $forum_message_id
        ]
    );
    if ($result){
        header('location:index.php?page=forum-subject');
        exit;
    }
}