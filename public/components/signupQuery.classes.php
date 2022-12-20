<html>
    <h1>hello</h1>
</html>
<?php


class signUpQuery extends Dbh {

    protected function setUser(
        $fname,
        $lname,
        $gender,
        $birthdate,
        $address,
        $accountType,
        $account_PIN,
        ) {

        $sql = "INSERT INTO customer (customer_Id,f_name, l_name, gender, birthdate, customer_address)
        VALUES(NULL,'$fname','$lname','$gender','$birthdate','$address')";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $sql = "SELECT customer_Id FROM customer ORDER BY customer_Id DESC LIMIT 1";
        $stmt = $this->connect()->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $id1 = $stmt->fetch();

        $sql ="INSERT INTO account (account_Id,customer_Id,account_PIN,account_type,account_balance)
        VALUES(NULL,'$id1[customer_Id]','$account_PIN','$accountType','0')";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
    }
}
?>