<?php
require_once('models/charge.php');
require_once('vendor/autoload.php');

/*if (isset($_POST['product'])){*/
    \Stripe\Stripe::setApiKey('sk_test_jIyFCAXt6YmRlqHyDAHEOVos');

//Sanitize POST Array
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $firstname = $POST['firstName'];
    $lastname = $POST['lastName'];
    $email = $POST['email'];
    $token = $POST['stripeToken'];

// Create Customer IN Stripe
    $customer = \Stripe\Customer::create(array(
        "email" => $email,
        "source" => $token,

    ));

    // Charge Customer

    $charge = \Stripe\Charge::create(array(
        "amount" => $_SESSION['total']*100,
        "currency" => "eur",
        "description" => "Power 28",
        "customer" => $customer->id
    ));

    $customerData = [
        'id' => $charge->customer,
    ];

//Insert DB

$newCustomersTransaction = newCustomersTransaction($_SESSION['id'], $customer->id, $token, $charge->description, $charge->amount, $charge->currency, $charge->status);





//Redirect to success page
    header('location:index.php?page=success-charge&transactionId=' .$charge->id.'&product=' .$charge->description);
/*}
else{
    header('location:index.php?page=home');
}*/

require_once('views/charge.php');