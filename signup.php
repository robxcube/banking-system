<html>
    <head>

            <meta charset="UTF-8" /><meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="src/signup.css">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
            <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>Bank</title>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="myscripts.js"></script>
        <main>

        <div class="header--container">

                <h1 class="header--container--title">Welcome to Our Banking</h1>
        </div>



                <form class="" action="./public/components/signupSubmitted.inc.php" method="POST">
                <h1 class="signup--tittle">Signup Form</h1>
                <br />
                    <div class="mb-3 row">
                        <div class="col">
                        <label htmlFor="fname" class="form-label">Enter First Name</label>
                                </br>
                                <input type="text" class="form-control"  aria-describedby="inputGroup-sizing-default" name="fname" >
                                <div class="invalid-feedback" id="validationServer01">
                                    <?php if(isset($_GET['error'])){ ?>

                                            <p><?php echo $_GET['error']; ?></p>

                                    <?php
                                            }
                                    ?>
                                    </div>
                        </div>

                        <div class="col">
                                    <label htmlFor="lname" class="form-label">Enter Last Name</label>
                                        <input type="text" class="form-control"  aria-describedby="inputGroup-sizing-default" name="lname" >
                                <div class="invalid-feedback" id="validationServer01">
                                    <?php if(isset($_GET['error'])){ ?>

                                            <p><?php echo $_GET['error']; ?></p>

                                    <?php
                                            }
                                    ?>
                                    </div>
                        </div>

                        <div class="col-md-2">
                                    <label htmlFor="gender" class="form-label">Gender</label>
                                    <select class="form-select" name="gender" id="gender">
                                        <option selected>--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                <div class="invalid-feedback" id="validationServer01">
                                    <?php if(isset($_GET['error'])){ ?>

                                            <p><?php echo $_GET['error']; ?></p>

                                    <?php
                                            }
                                    ?>
                                 </div>
                        </div>

                    </div>
                    <br />

                    <div class="row mb-3 row">
                        <div class="col auto">
                                        <label htmlFor="birthdate" class="form-label">BirthDate</label>
                                            <input type="date" class="form-control"  aria-describedby="inputGroup-sizing-default" name="birthdate" />
                                    <div class="invalid-feedback" id="validationServer01">
                                        <?php if(isset($_GET['error'])){ ?>

                                                <p><?php echo $_GET['error']; ?></p>

                                        <?php
                                                }
                                        ?>
                                    </div>
                            </div>

                            <div class="col">
                                        <label htmlFor="address" class="form-label">Address</label>
                                            <input type="text" class="form-control"  aria-describedby="inputGroup-sizing-default" name="address" />
                                    <div class="invalid-feedback" id="validationServer01">
                                        <?php if(isset($_GET['error'])){ ?>

                                                <p><?php echo $_GET['error']; ?></p>
                                            <?php
                                                    }
                                            ?>
                                        </div>
                            </div>

                                <div class="col">
                                        <label htmlFor="accountType" class="form-label">Account Type</label>
                                            <select class="form-select" name="accountType" id="accountType">
                                                <option selected>--</option>
                                                <option value="Debit">Debit</option>
                                                <option value="Credit">Credit</option>
                                            </select>
                                    <div class="invalid-feedback" id="validationServer01">
                                        <?php if(isset($_GET['error'])){ ?>

                                                <p><?php echo $_GET['error']; ?></p>
                                        <?php
                                                }
                                        ?>
                                    </div>
                                </div>
                    </div>
                    <div class="row">
                        <div class="col">
                                        <label htmlFor="PIN" class="form-label">Enter PIN</label>
                                            <input type="password" class="form-control"  aria-describedby="inputGroup-sizing-default" name="PIN" />
                                    <div class="invalid-feedback" id="validationServer01">
                                        <?php if(isset($_GET['error'])){ ?>

                                                <p><?php echo $_GET['error']; ?></p>
                                        <?php
                                                }
                                        ?>
                                    </div>
                                </div>
                                <div class="col">
                                        <label htmlFor="confirmPIN" class="form-label">Confirm PIN</label>
                                            <input type="password" class="form-control"  aria-describedby="inputGroup-sizing-default" name="confirmPIN" />
                                    <div class="invalid-feedback" id="validationServer01">
                                        <?php if(isset($_GET['error'])){ ?>

                                                <p><?php echo $_GET['error']; ?></p>
                                        <?php
                                                }
                                        ?>
                                    </div>
                                </div>
                    </div>
                    <br />
                        <button type="button" class="btn btn-outline btn-light btn-lg" onclick="window.location.href='index.php'">GO Back</button>
                        <button class="btn btn-outline-dark btn-lg float-end signup--submit--btn" type="submit" name="submit">Submit</button>
                </form>

        </main>
    </body>
</html>

