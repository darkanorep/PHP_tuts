<?php

    require_once 'Playlist.php';
    require_once 'Song.php';

    $playlist = new Playlist();

    $songTitles = ['Over You', 'Home', 'What About Now'];
    // $songTitles[0] = $songTitles;
    $song1 = new Song($songTitles[0], 'Daughtry', 123441);
    $playlist->addSong($song1);

    var_dump($song1->name);

    

    


?>