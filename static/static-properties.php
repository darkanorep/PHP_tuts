<?php

    require_once 'Counter.php';

    $count1 = new Counter();

    print Counter::getCount() . PHP_EOL;

    $count1 = new Counter();
    print Counter::getCount();


?>