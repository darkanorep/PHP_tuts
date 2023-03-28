<?php

    class Playlist {

        private $songs = [];

        public function addSong(Song $song) {
            $this->songs[] = $song;
        }

        public function getSong() {
            foreach($this->songs as $song) {
                // print $song->name . PHP_EOL;
                print_r($song);
            }
        }

    }


?>