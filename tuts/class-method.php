<?php

    class Product {
        public $price = 200;

        public function priceAsCurrency($divissor = 100, $currencySymbol = '$') {

            $priceAsCurrency = $this->price / $divissor;

            return $currencySymbol . $priceAsCurrency;
        }
    }

    $product = new Product();

    print $product->priceAsCurrency(currencySymbol:'Pesos '). PHP_EOL;

?>