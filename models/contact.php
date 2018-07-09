<?php
function contact ($contactLastname, $contactFirstname, $contactEmail, $contactSubject, $contactContent, $contactDemo){
    $db = dbConnect();
    if(empty($contactLastname) OR empty($contactFirstname) OR empty($contactEmail) OR empty($contactSubject) OR empty($contactContent)){
        $contactMessage = "Merci de remplir tous les champs";
    }
    else{
        $query = $db->prepare('INSERT INTO contact (users_lastname, users_firstname, users_email, subject, content, demonstration) VALUES (?, ?, ?, ?, ?, ?)');
        $newContactSend = $query->execute(
            [
                $contactLastname,
                $contactFirstname,
                $contactEmail,
                $contactSubject,
                $contactContent,
                $contactDemo,
            ]
        );
        if($newContactSend){
            mail($contactEmail, "mail de confirmation .", "votre demande va etre traiter dans les plus bref delais!");
            header('location:index.php?page=home');
            exit;
        }
        else{
            $message = "Impossible d'envoyer votre demande veuillez réessayer";
        }
    }

}



