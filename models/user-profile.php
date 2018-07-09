<?php
function connectedUser ($user_id){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM users WHERE id = ?');
    $query->execute(array($user_id));
    return  $query->fetch();
}

function updateConnectedUser ($email, $firstname, $lastname, $password, $password_confirm, $societyName, $societyAdress, $siret, $phone, $user_id ){
    $db = dbConnect();

    $query = $db->prepare('SELECT email FROM users WHERE email = ?');
    $query->execute(array($email));


    $emailAlreadyExists = $query->fetch();


    if($emailAlreadyExists && $emailAlreadyExists['email'] != $email){
        $updateMessage = "Adresse email déjà utilisée";
    }
    elseif(empty($firstname) OR empty($email)){

        $updateMessage = "Merci de remplir tous les champs obligatoires (*)";
    }

    elseif( !empty($password) AND ($password != $password_confirm)) {

        $updateMessage = "Les mots de passe ne sont pas identiques";
    }
    else {


        $queryString = 'UPDATE users SET firstname = :firstname, lastname = :lastname, email = :email, society_name = :society_name,
                                         society_adress = :society_adress, siret = :siret, phone = :phone ';

        $queryParameters = [ 'firstname' => $firstname, 'lastname' => $lastname, 'email' => $email,
                              'id' => $user_id, 'society_name' => $societyName, 'society_adress' => $societyAdress,
                              'siret' => $siret, 'phone' => $phone];

        if( !empty($password)) {

            $queryString .= ', password = :password ';

            $queryParameters['password'] = hash('md5', $password);
        }

        $queryString .= 'WHERE id = :id';


        $query = $db->prepare($queryString);
        $result = $query->execute($queryParameters);

        if($result){

            $_SESSION['user'] = $firstname;
            $updateMessage = "Informations mises à jour avec succès !";


            $query = $db->prepare('SELECT * FROM users WHERE id = ?');
            $query->execute(array($user_id));
            $user = $query->fetch();

            header('location:index.php?page=home');

        }
        else{
            $updateMessage = "Erreur";
        }
    }
    return $query->fetch();

}

function userMessages($user_id){
    $db = dbConnect();
    $query = $db->prepare('
        SELECT forum_message.* , users.firstname,lastname,is_admin 
        FROM forum_message 
        JOIN users ON users.id = forum_message.users_id 
        WHERE users.id = ?
');
    $query->execute(array($user_id));
    return  $query->fetchAll();
}

function userOrder($user_id){
    $db = dbConnect();
    $query = $db->prepare('
        SELECT * 
        FROM customers 
        LEFT JOIN users ON customers.users_id = users.id 
        LEFT JOIN transactions ON customers.id = transactions.customer_id
        WHERE USERS.id = ?
');
    $query->execute(array($user_id));
    return  $query->fetchAll();
}