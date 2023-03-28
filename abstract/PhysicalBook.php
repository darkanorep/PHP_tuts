<?php

    require_once 'Book.php';

    class PhysicalBook extends Book {

        public $weight;

        public function __construct(string $title, int $weight) {
            
            parent::__construct($title);
            $this->weight = $weight;

        }

        public function getWeight():int {
            return $this->weight;
        }

        public function write():string {
            return $this->title . PHP_EOL . "Weight: " . $this->weight;
        }

    }

?>