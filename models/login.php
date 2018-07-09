<?php
function Connection($email, $password) {
    $db = dbConnect();
    if(empty($email) OR empty($password)){
        $loginMessage = "Merci de remplir tous les champs";
    }
    else{
        $query = $db->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
        $query->execute( array( $email, hash('md5', $password), ) );
        $user = $query->fetch();
        if($user){
            $_SESSION['is_admin'] = $user['is_admin'];
            $_SESSION['user'] = $user['firstname'];
            $_SESSION['id'] = $user['id'];

        }
        else{
            $loginMessage = "Mauvais identifiants";
        }
    }
    if ($user) {
        header('location:index.php?page=home');
    }
}


