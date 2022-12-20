<?php
    session_start();
    $account_Id =  $_SESSION["account_Id"];
    include "/xampp/htdocs/Banking-System/src/db/connection.php";

    $sql = "SELECT * FROM account WHERE account_Id = $account_Id LIMIT 1";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $account = $stmt->fetchAll();

    $accountbal = $account[0]["account_balance"];
    setlocale(LC_MONETARY,"fil-PH");
    echo "&#8369; " .number_format($accountbal);
?>