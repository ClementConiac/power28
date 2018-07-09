<?php
if(!isset($_SESSION['is_admin']) OR $_SESSION['is_admin'] == 0){
    header('location:index.php');
    exit;
}
require_once ('views/admin/index.php');