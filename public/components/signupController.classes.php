<html>
    <h1>hello</h1>
</html>
<?php


        class SignupCtrl extends signUpQuery {
            private $fname;
            private $lname;
            private $gender;
            private $birthdate;
            private $address;
            private $account_PIN;
            private $confirm_PIN;
            private $accountType;


            public function __construct($fname,$lname,$gender,$birthdate,$address,$accountType,$account_PIN,$confirm_PIN) {
                $this->fname = $fname;
                $this->lname = $lname;
                $this->gender = $gender;
                $this->birthdate = $birthdate;
                $this->address = $address;
                $this->accountType = $accountType;
                $this->account_PIN = $account_PIN;
                $this->confirm_PIN = $confirm_PIN;
            }

            public function signupUser() {
                if($this->emptyInput() == false) {
                    header("Location:../signup.php?error=emptyinput");
                    exit();
                }
                if($this->pwdMatch() == false) {
                    header("Location:../signup.php?error=Entered password does not match");
                    exit();
                }
                $this->setUser(
                    $this->fname,
                    $this->lname,
                    $this->gender,
                    $this->birthdate,
                    $this->address,
                    $this->accountType,
                    $this->account_PIN
                );
            }


            private function emptyInput() {

                if(empty($this->fname) || empty($this->lname) || empty($this->gender) || empty($this->birthdate) || empty($this->address) || empty($this->accountType)) {
                    $result = false;
                } else {
                    $result = true;
                }
                return $result;
            }

            private function pwdMatch(){
                if($this->account_PIN !== $this->confirm_PIN) {
                    $result = false;
                } else {
                    $result = true;
                }
                return $result;
            }


    }
    ?>