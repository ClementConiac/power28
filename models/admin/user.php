<?php
function userAll(){
    $db = dbConnect();
    $query = $db->query("SELECT COUNT(*) FROM users")->fetchColumn();
    return $query;
}
function userList(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM users');
    return $query->fetchAll();
}
function newUser($firstname, $lastname, $password, $email, $is_admin){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO users (firstname, lastname, password, email, is_admin) VALUES (?, ?, ?, ?, ?)');
    $newUser = $query->execute(
        [
            $firstname,
            $lastname,
            hash('md5', $password),
            $email,
            $is_admin,

        ]
    );
    if($newUser){
        header('location:index.php?page=administration&admin=user');
        exit;
    }
    else{
        $message = "Impossible d'enregistrer le nouvel utilisateur...";
    }
}

function modifyUser($firstname, $lastname, $email, $user_id , $password = false){
    $db = dbConnect();
    $queryString = 'UPDATE users SET firstname = :firstname, lastname = :lastname, email = :email ';
    $queryParameters = [ 'firstname' => $firstname, 'lastname' => $lastname, 'email' => $email, 'id' => $user_id ];
    if( !empty($password)) {
        $queryString .= ', password = :password ';
        $queryParameters['password'] = hash('md5', $password);
    }
    $queryString .= 'WHERE id = :id';
    $query = $db->prepare($queryString);
    $result = $query->execute($queryParameters);
    if($result){
        header('location:index.php?page=administration&admin=user');
        exit;
    }
    else{
        $message = 'Erreur.';
    }
}

function deleteUser($user_id){
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM users WHERE id = ?');
    $result = $query->execute(
        [
            $user_id
        ]
    );
    if($result){
        $message = "Suppression efféctuée.";
        header('location:index.php?page=administration&admin=user');
        exit;
    }
    else{
        $message = "Impossible de supprimer la seléction.";
    }
}

function informationUser($user_id){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM users WHERE id = ?');
    $query->execute(array($user_id));
    return $query->fetch();
}