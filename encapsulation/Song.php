<?php

    class Song {

        public $name;
        public $singer;
        public $numberOfPlays;

        public function __construct(string $name, string $singer, int $numberOfPlays) {
            $this->name = $name;
            $this->singer = $singer;
            $this->numberOfPlays = $numberOfPlays;
        }
    }


?>