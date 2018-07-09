<?php
function productAll(){
    $db = dbConnect();
    $query = $db->query("SELECT COUNT(*) FROM product")->fetchColumn();
    return $query;
}
function productList(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM product');
    return $query->fetchAll();
}
function newProduct($name, $description, $price){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO product (name, description, price) VALUES (?, ?, ?)');
    $newProduct = $query->execute(
        [
            $name,
            $description,
            $price
        ]
    );
    if($newProduct){
        header('location:index.php?page=administration&admin=product');
        exit;
    }
    else{
        $message = "Impossible d'enregistrer le nouveau produit ...";
    }
}

function deleteProduct($product_id){
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM product WHERE id = ?');
    $result = $query->execute(
        [
            $product_id
        ]
    );
    if($result){
        $message = "Suppression efféctuée.";
        header('location:index.php?page=administration&admin=product');
        exit;
    }
    else{
        $message = "Impossible de supprimer le produit.";
    }
}

function modifyProduct($name, $description, $price, $id)
{
    $db = dbConnect();
    $query = $db->prepare('UPDATE product SET
		name = :name,
		description = :description,
		price = :price
		WHERE id = :id'
    );
    $result = $query->execute(
        [
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'id' => $id
        ]
    );
    if ($result) {
        header('location:index.php?page=administration&admin=product');
        exit;
    } else {
        $message = 'Erreur.';
    }
}

function informationProduct($product_id){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM product WHERE id = ?');
    $query->execute(array($product_id));
    return $query->fetch();
}
