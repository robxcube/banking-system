<html>
    <h1>hello<?php $fname ?></h1>
</html>

<?php

    if(isset($_POST["submit"])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];
        $address = $_POST['address'];
        $account_PIN = $_POST['PIN'];
        $confirm_PIN = $_POST['confirmPIN'];
        $accountType = $_POST['accountType'];
        echo $fname;

        include "/xampp/htdocs/Banking-System/src/db/connection.classes.php";
        include "/xampp/htdocs/Banking-System/public/components/signupQuery.classes.php";
        include "/xampp/htdocs/Banking-System/public/components/signupController.classes.php";
        $signup = new SignupCtrl($fname,$lname,$gender,$birthdate,$address,$accountType,$account_PIN,$confirm_PIN);
        $signup->signupUser();

        header("Location:/Banking-System/public/components/menu.php");
        exit();


}

?>