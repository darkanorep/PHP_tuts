<?php

    declare(strict_types=1);
    require('song.php');

    $song = new Song('A Song', 15123);

    print $song->numberOfPlays;

?>