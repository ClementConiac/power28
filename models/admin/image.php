<?php
function imageAll(){
    $db = dbConnect();
    $query = $db->query("SELECT COUNT(*) FROM screen")->fetchColumn();
    return $query;
}
function imageList(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM screen');
    return $query->fetchAll();
}
function categoryImageAll(){
    $db = dbConnect();
    $query = $db->query("SELECT COUNT(*) FROM category_screen")->fetchColumn();
    return $query;
}

function categoryImageList(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM category_screen');
    return $query->fetchAll();
}

function newImage($description, $categoriesScreen, $files_image, $files_image_name, $files_image_tmpName){
    $db = dbConnect();

    if(isset($files_image)){

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif' , 'png' );

        $my_file_extension = pathinfo( $files_image_name , PATHINFO_EXTENSION);

        if ( in_array($my_file_extension , $allowed_extensions) ){

            $new_file_name = md5(rand());

            $destination = 'assets/img/screen/' . $new_file_name . '.' . $my_file_extension;

            $result = move_uploaded_file( $files_image_tmpName, $destination);

            $query = $db->prepare('INSERT INTO screen (name , description) VALUES (?, ?)');
            $resultInsertImage = $query->execute(
                [
                    $new_file_name . '.' . $my_file_extension,
                    $description,

                ]
            );
        }
        $lastInsertedImageId = $db->lastInsertId();
        $query = $db->prepare('UPDATE screen SET
					category_id = :category_id
					WHERE id = :id'
        );

        $resultUpdateCategories = $query->execute(
            [
                'category_id' => $categoriesScreen,
                'id' => $lastInsertedImageId
            ]
        );
    }
    header('location:index.php?page=administration&admin=image');
    exit;
}

function deleteImage($image_id){
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM screen WHERE id = ?');
    $result = $query->execute(
        [
            $image_id
        ]
    );
    if($result){
        $message = "Suppression efféctuée.";
        header('location:index.php?page=administration&admin=image');
        exit;
    }
    else{
        $message = "Impossible de supprimer la seléction.";
    }
}


function deleteImageCategory($category_image_id){
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM category_screen WHERE id = ?');
    $result = $query->execute(
        [
            $category_image_id
        ]
    );
    if($result){
        $message = "Suppression efféctuée.";
        header('location:index.php?page=administration&admin=image-category');
        exit;
    }
    else{
        $message = "Impossible de supprimer la seléction.";
    }
}

function newImageCategory($categoryName, $categoryDescription){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO category_screen (name, description) VALUES (?, ?)');
    $newImageCategory = $query->execute(
        [
            $categoryName,
            $categoryDescription,
        ]
    );
    if($newImageCategory){
        header('location:index.php?page=administration&admin=image-category');
        exit;
    }
    else{
        $message = "Impossible d'enregistrer la nouvelle categorie ...";
    }
}

function modifyImageCategory($name, $description, $id){
    $db = dbConnect();
    $query = $db->prepare('UPDATE category_screen SET
		name = :name,
		description = :description
		WHERE id = :id'
    );
    $result = $query->execute(
        [
            'name' => $name,
            'description' => $description,
            'id' => $id
        ]
    );
    if ($result) {
        header('location:index.php?page=administration&admin=image-category');
        exit;
    }
    else {
        $message = 'Erreur.';
    }
}

function informationImageCategory($image_category_id){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM category_screen WHERE id = ?');
    $query->execute(array($image_category_id));
    return $query->fetch();
}