<?php

class Movie
{
    public $name;
    public $language;
    public $director;
    public $type;
    public $date;

    function __construct($_name, $_director, $_type, $_date, $_language)
    {
        $this->name = $_name;
        $this->director = $_director;
        $this->type = $_type;
        $this->date = $_date;
        $this->language = $_language;
    }

    public function getLanguage()
    {
        $lingua = $this->language;
        $element = '';
        if ($lingua != 'English') {
            $element = 'Lingua : italiana';
        } else {
            $element = 'Lingua : inglese';
        }
        return $element;
    }
}

$movie_1 = new Movie("Il signore degli anelli", "Peter Jackson", "Dantasy", "2002-01-18", "English");
$movie_2 = new Movie("Quo Vado", "Gennaro Nunziante", "Commedia", "2016-01-01", "Italian");
// echo "<pre>";
// var_dump($movie_1);
// var_dump($movie_2);
// echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <div class="d-flex justify-content-around">
                    <div>
                        <?php
                        echo "<h2>" . "Titolo:" . " " . $movie_1->name . "</h2>";
                        echo "<h5>" . "Regista:" . " " . $movie_1->director . "</h5>";
                        echo "<h5>" . "Genere:" . " " . $movie_1->type . "</h5>";
                        echo "<h5>" . "Data uscita:" . " " . $movie_1->date . "</h5>";
                        echo "<h5>" . $movie_1->getLanguage() . "</h5>";

                        ?>
                    </div>
                    <div>
                        <?php
                        echo "<h4>" . "Titolo:" . " "  . $movie_2->name . "</h4>";
                        echo "<h5>" .  "Regista:" . " " . $movie_2->director . "</h5>";
                        echo "<h5>" . "Genere:" . " "  . $movie_2->type . "</h5>";
                        echo "<h5>" . "Data uscita:" . " " . $movie_2->date . "</h5>";
                        echo "<h5>" . $movie_2->getLanguage() . "</h5>";
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>