<?php

    class Song {

        public string $name;
        public string $singer;
        public int $numberOfPlays;

        public function __construct(string $name, string $singer, int $numberOfPlays) {
            $this->name = $name;
            $this->singer = $singer;
            $this->numberOfPlays = $numberOfPlays;
        }
    }


?>