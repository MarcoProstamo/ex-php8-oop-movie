<?php
    class Genre{
        public $genres;

        public function __construct(array $genres){
            $this->genres = $genres;
        }

        public function getGenres(){     
            return $this->genres;
        }
}
?>