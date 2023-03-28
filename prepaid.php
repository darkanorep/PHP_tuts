<?php

    require_once 'Bank.php';
   

    class Prepaid extends Bank {

        protected $fee = 20;

        public function withdraw($amount) {

            if ($amount < 100) {
                print 'The minimun withdraw is 100';
            } elseif ($amount >= 10000) {
                print 'exceed';
            } else {
                print 'Successfully withdraw the amount of $' . $amount . PHP_EOL;
                return $this->balance = $this->balance - $amount - $this->fee;
                $this->generateReciept();
            }
        }

    }

?>