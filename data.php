<?php

    require __DIR__ . '/Models/movie.php';

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

    $jp_genres = [
        new genre("Adventure"),
        new genre("Drama")
    ];

    $forrest_genres = [
        new genre("Comedy"),
        new genre("Drama")
    ];

    $movies_db = [
        new Movie("Return to Future", 1985, $returnToFuture_genres),
        new Movie("Interstellar", 2014, $interstellar_genres),
        new Movie("Jurassic Park", 1993, $jp_genres),
        new Movie("Forrest Gump", 1994, $forrest_genres)
    ];

    $movies_db[1]->movie_director = "Christopher Nolan";
    $movies_db[3]->movie_director = "Robert Zemeckis";

?>