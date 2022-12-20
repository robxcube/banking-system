<?php


class Login extends Dbh {
    private $bal;
    protected function getUser($account_Id,$account_PIN) {
        $sql = "SELECT account_PIN FROM account WHERE account_Id = $account_Id LIMIT 1";
        $stmt = $this->connect()->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $id1 = $stmt->fetch();
        $result = $id1["account_PIN"];

        if($account_PIN != $result) {
            header("Location:/Banking-System/?errorPass=Wrong password");
            exit();

        } else if($account_PIN == $result){
            $sql = "SELECT * FROM account WHERE account_Id = $account_Id";
            $stmt = $this->connect()->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $account = $stmt->fetchAll();

            $this->bal= $account[0]["account_balance"];
            session_start();
            $_SESSION["account_Data"] = $account;
            $_SESSION["account_Id"] = $account[0]["account_Id"];
            $_SESSION["customer_Id"] = $account[0]["customer_Id"];
            $_SESSION["account_PIN"] = $account[0]["account_PIN"];
            $_SESSION["account_type"] = $account[0]["account_type"];
            $_SESSION["account_balance"] = $account[0]["account_balance"];
        }


    }
}
?>