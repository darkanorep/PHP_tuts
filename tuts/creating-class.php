<?php

    class Product {

        public $price;

        public function currencyAsPrice () {

            $currencyAsPrice = $this->price/100;

            return $currencyAsPrice;
        }

    }

    $product = new Product();
    $product->price = 780;

    echo $product->currencyAsPrice();


?>