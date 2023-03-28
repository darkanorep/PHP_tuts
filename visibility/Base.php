<?php

    class BaseClass {

        public $publicProperty = 'This is public property.';
        protected $protectedProperty = 'This is protected property.';
        private $privateProperty = 'This is private property';


        protected function getParentProtectedProperty():string {
            return $this->protectedProperty;
        }

        public function getParentPrivateProperty():string {
            return $this->privateProperty;
        }

    }

?>