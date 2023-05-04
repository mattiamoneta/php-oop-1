<?php

    require __DIR__ . '/Models/movie.php';

    /**
     * Generi per ogni film
    */
    
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

    /**
     * Database locale film
     */

    $movies_db = [
        "Return to Future" => new Movie("Return to Future", 1985, $returnToFuture_genres),
        "Interstellar" => new Movie("Interstellar", 2014, $interstellar_genres),
        "Jurassic Park" => new Movie("Jurassic Park", 1993, $jp_genres),
        "Forrest Gump" => new Movie("Forrest Gump", 1994, $forrest_genres)
    ];

    $movies_db["Return to Future"]->movie_director = "Christopher Nolan";
    $movies_db["Forrest Gump"]->movie_director = "Robert Zemeckis";

?>