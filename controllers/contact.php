<?php
require_once('models/contact.php');

if(isset($_POST['contactSend'])) {
    $contact = contact($_POST['contactLastname'], $_POST['contactFirstname'], $_POST['contactEmail'], $_POST['contactSubject'], $_POST['contactContent'], $_POST['contactDemo']);
}
require_once('views/contact.php');
