<!doctype html>
<html lang="fr">
<head>
    <?php require_once ('views/partials/head_assets.php');?>
    <title>Power 28</title>
</head>
<body class="body">
<?php
if (isset($_GET['logout'])){
    header('location:index.php?page=home');
}

require_once('common.php');
$db = dbConnect();
session_start();

require_once ('views/partials/header.php');

if(isset($_GET['page'])){

  if($_GET['page'] == 'home'){
      require_once('controllers/home.php');
  }
  elseif($_GET['page'] == 'product'){
      require_once('controllers/product.php');
  }
  elseif($_GET['page'] == 'condition'){
      require_once('views/condition.php');
  }
  elseif($_GET['page'] == 'price'){
      require_once('controllers/price.php');
  }
  elseif($_GET['page'] == 'payement'){
      require_once('controllers/payement.php');
  }
  elseif($_GET['page'] == 'charge'){
      require_once('controllers/charge.php');
  }
  elseif($_GET['page'] == 'success-charge'){
      require_once('controllers/success-charge.php');
  }
  elseif($_GET['page'] == 'login'){
      require_once('controllers/login.php');
  }
  elseif($_GET['page'] == 'signin'){
      require_once('controllers/signin.php');
  }
  elseif($_GET['page'] == 'profile'){
      require_once('controllers/user-profile.php');
  }
  elseif($_GET['page'] == 'profile-message'){
      require_once('controllers/user-profile-message.php');
  }
  elseif($_GET['page'] == 'profile-order'){
      require_once('controllers/user-profile-order.php');
  }
  elseif($_GET['page'] == 'contact'){
      require_once('controllers/contact.php');
  }
  elseif($_GET['page'] == 'faq'){
      require_once('controllers/faq.php');
  }
  elseif($_GET['page'] == 'forum'){
      require_once('controllers/forum_index.php');
  }
  elseif($_GET['page'] == 'forum-message'){
      require_once('controllers/forum_message.php');
  }
  elseif($_GET['page'] == 'forum-subject'){
      require_once('controllers/forum_subject.php');
  }
  elseif($_GET['page'] == 'admin'){
      require_once('controllers/admin/index.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'admin'){
      require_once('controllers/admin/index.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'user'){
      require_once('controllers/admin/user-list.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'new-user') {
      require_once('controllers/admin/user-form.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'modify-user' && isset($_GET['user_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
      require_once('controllers/admin/user-form.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'faq-question'){
      require_once('controllers/admin/faq_question-list.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'new-faq-question') {
      require_once('controllers/admin/faq_question-form.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'modify-faq-question' && isset($_GET['faq-question_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
      require_once('controllers/admin/faq_question-form.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'faq-category'){
      require_once('controllers/admin/faq_category-list.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'new-faq-category') {
      require_once('controllers/admin/faq_category-form.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'modify-faq-category' && isset($_GET['faq-category_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
      require_once('controllers/admin/faq_category-form.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'product'){
      require_once('controllers/admin/product-list.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'new-product') {
      require_once('controllers/admin/product-form.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'modify-product' && isset($_GET['product_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
      require_once('controllers/admin/product-form.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'image-category'){
      require_once('controllers/admin/image_category-list.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'new-category-image') {
      require_once('controllers/admin/image_category-form.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'modify-category-image' && isset($_GET['image-category_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {

      require_once('controllers/admin/image_category-form.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'image'){
      require_once('controllers/admin/image-list.php');
  }
  elseif($_GET['page'] == 'administration' && $_GET['admin'] == 'new-image'){
      require_once('controllers/admin/image-form.php');
  }
  else{
      require_once('controllers/home.php');
  }
}
else{
    require_once('controllers/home.php');
}
if(isset($_GET['logout']) && isset($_SESSION['user'])){
    logout();
}

?>

<?php require 'views/partials/footer.php'; ?>
</body>
</html>




<!--<script>
    function priceCalc(){
        var product = document.getElementById("minus-product").onclick = value="1500";
        var hosting = document.getElementById("plus-product").checked ? 20 : 0
        document.getElementById("price").innerHTML = <?php /*echo $total */?> +product + hosting
   }
</script>-->