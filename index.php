<?php

    require __DIR__ . '/genres.php';

    class Movie
    {
        public $movie_name;
        public $movie_year;
        public $movie_genres = [];
        public $movie_director;

        function __construct($movie_name, $movie_year, $movie_genres, $movie_director = ""){
            $this->movie_name = $movie_name;
            $this->movie_year = $movie_year;
            $this->movie_director = $movie_director;
        }

        public function addDirector($director_name){
            $this->movie_director = $director_name;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
    <body>
        <?php

            $returnToFuture_genres = [
                new genre("Adventure"),
                new genre("Comedy"),
                new genre("SciFi")
            ];

            $interstellar_genres = [
                new genre("SciFi"),
                new genre("Adventure"),
                new genre("Drama")
            ];

            $movie_returnToFuture = new Movie("Return to Future", 1985, $returnToFuture_genres);

            $movie_interstellar = new Movie("Interstellar", 2014, $interstellar_genres);
            $movie_interstellar->addDirector('Christopher Nolan');

            var_dump($movie_returnToFuture);
            var_dump($movie_interstellar);
        ?>
    </body>
</html>