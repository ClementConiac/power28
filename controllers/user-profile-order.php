<?php
require_once('models/user-profile.php');

$userOrder = userOrder($_SESSION['id']);

require_once('views/user-profile-order.php');