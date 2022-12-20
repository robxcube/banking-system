 <?php

    class LoginCtrl extends Login {
        private $account_Id;
        private $account_PIN;

        public function __construct($account_Id,$account_PIN){
            $this->account_Id = $account_Id;
            $this->account_PIN = $account_PIN;
        }

        public function loginUser() {
            if($this->emptyInput() == false) {
                header("Location:/Banking-System/?error=Empty input");
                exit();
            }
            $this->getUser($this->account_Id,$this->account_PIN);
        }

        private function emptyInput() {

            if(empty($this->account_Id) || empty($this->account_PIN)) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }
    }