<?php
    require_once 'prepaid.php';

    $person1 = new Prepaid('Mike', 5561.21);
    print $person1->withdraw(2415);
    print $person1->balance;
?>