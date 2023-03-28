<?php

    class Product {

        public function __construct(public $price = 20, public $name = 'Soap') {
            $this-> name = $name;
            $this->price = $price;
            
        }

        public function priceAsCurrency($divissor = 100, $currencySymbol = '$') {

            $priceAsCurrency = $this->price / $divissor;

            return $currencySymbol . $priceAsCurrency;
        }
    }

    $product = new Product(price:200);
    print $product->name . PHP_EOL;
    print $product->price;

?>