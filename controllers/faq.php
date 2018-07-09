<?php
require_once ('models/faq.php');

$faqCategories = faqCategories();
$faqQuestionsAnswers = faqQuestionsAnswers();



require_once ('views/faq.php');