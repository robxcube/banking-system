<?php

if(isset($_POST["submit"])){
    $account_Id = $_POST['accountId'];
    $account_PIN = $_POST['PIN'];
    // $fname = $_POST['fname'];
    // $lname = $_POST['lname'];
    // $gender = $_POST['gender'];
    // $birthdate = $_POST['birthdate'];
    // $address = $_POST['address'];
    // $account_PIN = $_POST['PIN'];
    // $confirm_PIN = $_POST['confirmPIN'];
    // $accountType = $_POST['accountType'];
    // echo $fname;

    include "/xampp/htdocs/Banking-System/src/db/connection.classes.php";
    include "/xampp/htdocs/Banking-System/public/components/login.classes.php";
    include "/xampp/htdocs/Banking-System/public/components/loginController.classes.php";

    $login = new LoginCtrl($account_Id, $account_PIN);
    $login->loginUser();

    header('Location:/Banking-System/public/components/menu.php');
    exit();

}