<?php

session_start();
    if(isset($_SESSION['account_Id'])) {
        header("Location:/public/components/menu.php");
    }
?>

<html>
    <head>

            <meta charset="UTF-8" /><meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="src/index.css?version=1">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
            <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>Bank</title>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <main>
            <div class="header--container">
                <h1 class="header--container--title">Welcome to Our Banking</h1>
            </div>
        <div class="form--container">
            <form action="./public/components/login.inc.php" method="POST">
                <h1>Login To Your Account</h1>
                <br />

                <div class="mb-3">
                    <label htmlFor="accountId" class="form-label">Enter Account ID</label>
                            </br>
                            <input type="text" class="form-control is-invalid input--style" id="validationServer01"  aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" name="accountId" >
                            <div class="invalid-feedback" id="validationServer01">
                                <?php if(isset($_GET['error'])){ ?>

                                        <p><?php echo $_GET['error']; ?></p>

                                <?php
                                        }
                                ?>
                                </div>

                                </br>
                    <label htmlFor="PIN" class="form-label">Enter PIN Number</label>
                            </br>
                            <input type="password" id="pin" class="form-control is-invalid input--style" id="validationServer02"  aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" name="PIN"/>
                                <div id="validationServer02" class="invalid-feedback">
                                    <?php if(isset($_GET['errorPass'])){ ?>

                                           <p><?php echo $_GET['errorPass']; ?></p>

                                        <?php
                                                }
                                        ?>

                                </div>
                        </br>
                </div>
                    </br>
                    <div class="btn-group-lg gap-4 button--container">
                        <button type="button" class="btn btn-light" onclick="window.location.href='signup.php'">Signup</button>
                        <button class="btn btn-dark submit--btn" type="submit" name="submit" >Login</button>
                        </div>
                </form>
            </div>
        </main>
    </body>
</html>

