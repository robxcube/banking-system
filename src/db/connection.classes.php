<?php

class Dbh {

    protected function connect() {

        try {
            $username = "root";
            $password = "";
            $conn = new PDO("mysql:host=localhost;dbname=bankingsystemdb", $username, $password);
                return $conn;
        } catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
}

?>