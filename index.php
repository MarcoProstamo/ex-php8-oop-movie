<?php
    require_once "./models/genre.php";
    require_once "./models/movie.php";
    require_once "./db/movies.php";

    $movie1 = new Movie("The Dark Knight", "Christopher Nolan", 2008, new Genre(["action", "hero", "crime"]), 185000000);
    $movie2 = new Movie("The Shawshank Redemption", "Frank Darabont", 1994, new Genre(["drama", "crime"]), 25000000);

    var_dump($movie1);
    echo "<br>";
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
</body>
</html>