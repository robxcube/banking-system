

<?php
session_start();
include "/xampp/htdocs/Banking-System/src/db/connection.php";


?>

<html?>
    <head>
        <meta charset="UTF-8" /><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../src/transaction.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
        <title>Transaction</title>
        <div class="transaction--container">
            <h1 class="transaction--title">Transaction</h1>

        </div>
    </head>

    <body>
        <main>
            <div class="table--container">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Account ID</th>
                        <th scope="col">Transaction Type</th>
                        <th scope="col">Transaction Date</th>
                        <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT *
                        FROM transaction
                        INNER JOIN account ON transaction.account_Id = account.account_Id
                        INNER JOIN customer ON account.customer_Id = customer.customer_Id";
                        $result = $conn->query($sql);

                            while($row = $result->fetch(PDO::FETCH_ASSOC)) :?>
                                <tr>
                                <td><?php echo $row['transaction_Id'] ?></td>
                                <td><?php echo $row['f_name'] . " ". $row["l_name"]?></td>
                                <td><?php echo $row['account_Id'] ?></td>
                                <td><?php echo $row['transaction_type'] ?></td>
                                <td><?php echo $row['transaction_date'] ?></td>
                                <td><?php echo $row['amount'] ?></td>
                            </tr>

                    <?php endwhile;  ?>
                    </tbody>
                    </table>
                </div>
        </main>
            <button onclick="window.location.href='menu.php'">Go Back</button>
            <div class="logout--button--container">
            <button onclick="window.location.href='logout.php'" class="logout--button">Log Out</button>
            </div>
    </body>

</html>