<?php
function newCustomersTransaction($users_id, $customerId, $transactionId, $transactionProduct, $transactionAmount, $transactionCurrency, $transactionStatus){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO customers (id, users_id) VALUES (?, ?)');
    $newCustomers = $query->execute(
        [
            $customerId,
            $users_id,
        ]
    );
    if ($newCustomers){
        $query = $db->prepare('INSERT INTO transactions (id, customer_id, product, amount, currency, status) VALUES (?, ?, ?, ?, ?, ?)');
        $newTransaction = $query->execute(
            [
                $transactionId,
                $customerId,
                $transactionProduct,
                $transactionAmount,
                $transactionCurrency,
                $transactionStatus,
            ]
        );
    }
}