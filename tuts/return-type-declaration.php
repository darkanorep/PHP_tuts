<?php

    include('playlist.php');
    include('song.php');

    $playlist = new Playlist();

    $song1 = new Song('A song', 233);
    // $song2 = 'Yes';
    $song2 = new Song('B song', 100);

    $playlist->addSong($song1);
    $playlist->addSong($song2);

    if ($playlist->getLength() < 10) {
        print $playlist->getLength() . PHP_EOL;
        print 'Shortplaylist...';
    }

?>