<?php
require_once ('models/user-profile.php');

$userMessages = userMessages($_SESSION['id']);

require_once ('views/user-profile-message.php');