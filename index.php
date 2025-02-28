<?php

    class Movie{
        public $title;
        public $director;
        public $release_year;
        protected $budget;

        public function __construct($_title, $_director, $_release_year, $_budget){
            $this->title = $_title;
            $this->director = $_director;
            $this->release_year = $_release_year;
            $this->budget = $_budget;
        }
        
        public function getBudget(){
            return $this->budget;
        }
    }

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