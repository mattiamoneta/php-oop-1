
<?php
    require __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>PHP OOP</title>
</head>
    <body data-bs-theme="dark">
        <main>
            <div class="container">
                <div class="row py-5">
                    <div class="col-10 mx-auto">
                            <div class="card">
                                <div class="card-body">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col">Movie</th>
                                        <th scope="col">Year</th>
                                        <th scope="col">Genres</th>
                                        <th scope="col">Director</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            foreach($movies_db as $movie){
                                                echo "<tr>
                                                        <td>{$movie->movie_name}</td>
                                                        <td>{$movie->movie_year}</td>
                                                        <td>";

                                                        foreach($movie->movie_genres as $genre){
                                                            echo $genre->genre_name . ", ";
                                                        }

                                                echo "</td>
                                                        <td>{$movie->movie_director}</td>";
                                            }
                                        ?>
                                    </tbody>
                                </table>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>