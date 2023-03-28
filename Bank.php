<?php

    class Bank {
        public $name;
        public $balance;

        public function __construct(string $name, float $balance) {
            $this->name = $name;
            $this->balance = $balance;
        }

        public function getBalance () {
            print '-------------------------------------'.PHP_EOL.PHP_EOL;
            return 'Account Name: '.$this->name . PHP_EOL . 'Available Balance :' . $this->balance.PHP_EOL.PHP_EOL.'-------------------------------------';

        }

        public function generateReciept() {
            print '-------------------------------------'.PHP_EOL.PHP_EOL;
            print 'Remaining Balance: $' . $this->balance;
            return $this->balance;
            

        }

    }

?>