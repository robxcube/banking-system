<?php
include "/xampp/htdocs/Banking-System/src/db/connection.php";

if (isset($_POST['amount']) && isset($_POST['action'])) {
    $amount = $_POST['amount'];
    $action = $_POST['action'];
    $accountId = $_POST['accountId'];
    $transaction_date = $_POST["date"];

    if ($action == "Deposit") {
        $sql = "UPDATE account SET account_balance = account_balance+$amount WHERE account_Id = $accountId";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $sql1 = "INSERT INTO transaction (transaction_Id,account_Id, transaction_type, transaction_date, amount)
            VALUES(NULL, '$accountId', '$action',NULL, '$amount')";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->execute();


    } else if ($action == "Withdraw") {

        $sql = "UPDATE account SET account_balance = account_balance-$amount WHERE account_Id = $accountId";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $sql1 = "INSERT INTO transaction (transaction_Id,account_Id, transaction_type, transaction_date, amount)
            VALUES(NULL, '$accountId', '$action',NULL, '$amount')";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->execute();


    }

}