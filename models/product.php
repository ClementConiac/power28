<?php
function productCategory(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM category_screen ORDER BY id ');
    return $query->fetchAll();
}

function productCurrentCategory($category_id){
    $db = dbConnect();
    $query = $db->prepare('
        SELECT screen.* 
        FROM screen 
        JOIN category_screen ON category_screen.id = screen.category_id 
        WHERE category_screen.id = ?
    ');
    $query->execute(array($category_id));
    return $query->fetchAll();
}