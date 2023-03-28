<?php

    require_once 'Playlist.php';
    require_once 'Song.php';


    $playlist = new Playlist();

    $song1 = new Song('Test Song', 'Test Singer', 24512);

    $song1->setRating(1.1);

    print $song1->getRating();


?>