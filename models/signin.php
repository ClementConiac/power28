<?php
function newUser($firstname, $lastname, $email, $password, $password_confirm, $societyName, $societyAdress, $siret, $phone){
    $db = dbConnect();
    $query = $db->prepare('SELECT email FROM users WHERE email = ?');
    $query->execute(array($email));
    $userAlreadyExists = $query->fetch();
    if($userAlreadyExists){
        $registerMessage = "Adresse email déjà enregistrée";
    }
    elseif(empty($firstname) OR empty($password) OR empty($email)){
        $registerMessage = "Merci de remplir tous les champs";
    }
    elseif($password != $password_confirm) {
        $registerMessage = "Les mots de passe ne sont pas identiques";
    }
    else {
        $query = $db->prepare('INSERT INTO users (firstname, lastname, email, password, society_name, society_adress, siret, phone) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $newUser = $query->execute(
            [
                $firstname,
                $lastname,
                $email,
                hash('md5', $password),
                $societyName,
                $societyAdress,
                $siret,
                $phone,
            ]
        );
        $_SESSION['is_admin'] = 0;
        $_SESSION['user'] = $firstname;
        $_SESSION['id'] = $db-> lastInsertId();

    }
    if ($newUser) {
        header('location:index.php?page=home');
    }
}