<?php

    include('playlist.php');
    include('song.php');

    $playlist = new Playlist();

    $song1 = new Song('A song', 233);
    // $song2 = 'Yes';
    $song2 = new Song('B song', 100);

    $playlist->addSong($song1);
    $playlist->addSong($song2);

    print count($playlist->songs). PHP_EOL;

    foreach($playlist->songs as $song) {
        print $song->name . PHP_EOL;
    }

?>