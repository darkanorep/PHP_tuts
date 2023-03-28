<?php

    class Song {

        public string $name;
        public string $singer;
        public int $numberOfPlays;

        private int|float $rating;

        public function __construct(string $name, string $singer, int $numberOfPlays) {
            $this->name = $name;
            $this->singer = $singer;
            $this->numberOfPlays = $numberOfPlays;
        }


        public function setRating(int|float $rating) {

            if ($rating <= 0) {
                $this->rating = 0;
            } elseif ($rating >= 5)
                $this->rating = 5;
            else {
                $this->rating = $rating;
            }

        }

        public function getRating():int|float {
            return $this->rating;
        }
    }


?>