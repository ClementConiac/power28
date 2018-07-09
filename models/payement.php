<?php
function price($productPrice, $hostingPrice){
    $_SESSION['total'] = $productPrice + $hostingPrice;
    return $_SESSION['total'];
}
