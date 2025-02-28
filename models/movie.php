<?php 
    class Movie{
        public $title;
        public $director;
        public $release_year;
        public $genres;
        protected $budget;

        public function __construct($_title, $_director, $_release_year, Genre $_genres, $_budget){
            $this->title = $_title;
            $this->director = $_director;
            $this->release_year = $_release_year;
            $this->genres = $_genres;
            $this->budget = $_budget . "$";
        }
        
        public function getBudget(){
            return $this->budget;
        }
    }
?>