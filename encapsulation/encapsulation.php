<?php

    require_once 'Playlist.php';
    require_once 'Song.php';

    $playlist = new Playlist();

    $song1 = new Song('Test Song', 'Test Singer', 12223);
    $song2 = 'This is a string';
    $song3 = new Song('Test Song', 'Test Singer', 12223);

    // $playlist->addSong($song2);
    $playlist->addSong($song1);
    $playlist->addSong($song3);
    $playlist->getSong();

?>