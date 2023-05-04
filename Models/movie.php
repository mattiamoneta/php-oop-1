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
            $this->movie_genres = $movie_genres;
            $this->movie_director = $movie_director;
        }

        public function addDirector($director_name){
            $this->movie_director = $director_name;
        }
    }

?>