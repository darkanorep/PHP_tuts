<?php

    require_once 'Book.php';
    require_once 'PhysicalBook.php';

    $book = new PhysicalBook('test', 32);
    print $book->write();

?>