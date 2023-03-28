<?php

    require_once 'DigitalBook.php';
    require_once 'PhysicalBook.php';

    $DigitalBook = new DigitalBook('Harry Potter', 'J.K Rowling', 300, 2);
    $PyhsicalBook = new PhysicalBook('Harry Potter', 'J.K Rowling', 300, 2);

    print $PyhsicalBook->getWeight();

?>