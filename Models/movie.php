<?php

    require __DIR__ . '/genres.php';

    class Movie
    {
        public $movie_name; //Titolo del film
        public $movie_year; //Anno produzione
        public $movie_genres = []; //Generi
        public $movie_director; //Regista

        function __construct($movie_name, $movie_year, $movie_genres, $movie_director = ""){
            $this->movie_name = $movie_name;
            $this->movie_year = $movie_year;
            $this->movie_genres = $movie_genres;
            $this->movie_director = $movie_director;
        }

        /**
         * Aggiungi regista
         */
        public function addDirector($director_name){
            $this->movie_director = $director_name;
        }
    }

?>