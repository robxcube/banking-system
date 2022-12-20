<?php
    session_start();
    $account_Id =  $_SESSION["account_Id"];
    $customer_Id = $_SESSION["customer_Id"];
    $account_PIN =  $_SESSION["account_PIN"];
    $account_type = $_SESSION["account_type"];
    $account_bal = $_SESSION["account_balance"];

    include '/xampp/htdocs/Banking-System/src/db/connection.php';

    $sql = "SELECT * FROM customer WHERE customer_Id = $customer_Id LIMIT 1";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $customer = $stmt->fetchAll();

    $customer_fname = $customer[0]["f_name"];
    $customer_lname = $customer[0]["l_name"];
?>

<html>
    <header>
    <meta charset="UTF-8" /><meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../../src/menu.css">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
        <title>Menu</title>
    </header>
        <body>
            <div  class="nav--title">
                <h1>Overview</h1>
                <div class="button--container">
                    <button onclick="window.location.href='transaction.php'">Transaction</button>
                </div>
            </div>
            <main>
                    <div class="content--container">
                        <section class="inquiry--container">
                            <div class="balance--container">
                                <p>Total balance</p>
                                <h2 id="money"></h2>
                            </div>
                                <div class="card--container">
                                <h3>Card</h3>
                                    <div class="card--actual">
                                            <div class="card--sim"></div> <br />
                                            <h4><?php echo $account_Id ?></h4>
                                            <h5><?php echo $customer_fname. " " . $customer_lname; ?></h5>
                                    </div>
                                </div>
                        </section>
                        <section class="action--container">
                            <div class="action--title">
                                <h1>Actions</h1>
                            </div><br />
                            <div class="action--button--container" id="action--button--container">
                                <button class="deposit--container" id="deposit--container" onclick="buttonHide('deposit')">
                                    <h3>Deposit</h3>
                                </button>
                                <button class="withdraw--container" id="withdraw--container" onclick="buttonHide('withdraw')">
                                    <h3>Withdraw</h3>
                                </button>
                                <div class="confirm--cancel--container" id="confirm--cancel">
                                </div>
                            </div>
                        </section>
                    </div>

                </main>
            </body>
            <div class="logout--button--container">
            <button onclick="window.location.href='logout.php'" >Log Out</button>
            </div>
            </html>

<script>


    function buttonHide (arg) {
        document.getElementById('deposit--container').style.display = "none";
        document.getElementById('withdraw--container').style.display = "none";

        var buttonContainer = document.getElementById('action--button--container');
        var confirmCancelButton = document.getElementById('confirm--cancel');

        if(arg == "withdraw") {
            confirmCancelButton.insertAdjacentHTML('afterbegin', '<button class="confirm--cancel" id="withdraw--container" onclick="buttonShow()">Cancel</button>');
            confirmCancelButton.insertAdjacentHTML('afterbegin', '<button class="withdraw--container" id="withdraw--container" onclick="amountHandler(5000,`Withdraw`)">5000</button>');
            confirmCancelButton.insertAdjacentHTML('afterbegin', '<button class="withdraw--container" id="withdraw--container" onclick="amountHandler(1000,`Withdraw`)">1000</button>');
            confirmCancelButton.insertAdjacentHTML('afterbegin', '<button class="withdraw--container" id="withdraw--container" onclick="amountHandler(500,`Withdraw`)">500</button>');
            confirmCancelButton.insertAdjacentHTML('afterbegin', '<h2>Choose Amount</h2>');

        }else if (arg == "deposit") {
            confirmCancelButton.insertAdjacentHTML('afterbegin', '<button class="confirm--cancel" id="deposit--container" onclick="buttonShow()">Cancel</button>');
            confirmCancelButton.insertAdjacentHTML('afterbegin', '<button class="deposit--container" id="deposit--container" onclick="amountHandler(5000,`Deposit`)">5000</button>');
            confirmCancelButton.insertAdjacentHTML('afterbegin', '<button class="deposit--container" id="deposit--container" onclick="amountHandler(1000,`Deposit`)">1000</button>');
            confirmCancelButton.insertAdjacentHTML('afterbegin', '<button class="deposit--container" id="deposit--container" onclick="amountHandler(500,`Deposit`)">500</button>');
            confirmCancelButton.insertAdjacentHTML('afterbegin', '<h2>Input Amount To Deposit</h2>');
        }
    }

    function buttonShow() {
        var cancelButton = document.getElementById('confirm--cancel');

        while (cancelButton.hasChildNodes()) {
            cancelButton.removeChild(cancelButton.firstChild);
        }

        document.getElementById('deposit--container').style.display = "block";
        document.getElementById('withdraw--container').style.display = "block";
    }

    function amountHandler(amt,action) {
        const date = new Date().toISOString().slice(0, 10);
            console.log(date)
        if(action == "Deposit") {
            $(document).ready(function() {
            $.post("action.php", {
                amount: amt,
                action: action,
                date: date,
                accountId: <?php echo $account_Id ?>,
            })
            buttonShow();
            alert("Withdraw Success")
            })

        } else if(action == "Withdraw") {
            $(document).ready(function() {
            $.post("action.php", {
                amount: amt,
                action: action,
                date: date,
                accountId: <?php echo $account_Id ?>
            })
            buttonShow();
            alert("Withdraw Success")
        })
        } else{
            alert("Error")
        }

    }

    function load(){

        $("#money").load('updateBal.php',function () {

        });
        }

        load(); // This will run on page load
        setInterval(function(){
            load() // this will run after every 3 seconds
        }, 2000);


</script>