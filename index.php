<?php

    class Movie{
        public $title;
        public $director;
        public $release_year;
        public $genres;
        protected $budget;

        public function __construct($_title, $_director, $_release_year, array $_genres, $_budget){
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

    $movie1 = new Movie("The Dark Knight", "Christopher Nolan", 2008, ["action", "hero", "crime"], 185000000);
    $movie2 = new Movie("The Shawshank Redemption", "Frank Darabont", 1994, ["drama", "crime"], 25000000);
    var_dump($movie1);
    var_dump($movie2);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "You are Awesome!"?>
</body>
</html>