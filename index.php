<?php
//CREAZIONE CLASSE 
class Movie
{
    public $name;
    public $language;
    public $director;
    public $type;
    public $date;

    //CREZIONE CONSTRUCT

    function __construct($_name, $_director, $_type, $_date, $_language)
    {
        $this->name = $_name;
        $this->director = $_director;
        $this->type = $_type;
        $this->date = $_date;
        $this->language = $_language;
    }


    // METODO PER DETERMINARE SE LA LINGUA è INGLESE O ITALIANA
    public function getLanguage()
    {
        $lingua = $this->language;
        $element = '';
        if ($lingua != 'English') {
            $element = 'Lingua : Italiana';
        } else {
            $element = 'Lingua : Inglese';
        }
        return $element;
    }
}
// CREAZIONE ISTANZE DEI FILM
$movie_1 = new Movie("Il signore degli anelli", "Peter Jackson", array("Fantasy", "Dramatic", "Action"), "2002-01-18", "English");
$movie_2 = new Movie("Quo Vado", "Gennaro Nunziante", array("Comedy", "Family"), "2016-01-01", "Italian");
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
                        <div class="card">
                            <div class="card-body">
                                <?php
                                echo "<h5 class='card-title'>" . $movie_1->name . "</h5>";
                                echo "<p class='card-text'>" . "Regista:" . " " . $movie_1->director . "</p>";
                                echo "<p class='card-text'>" . "Genere:" . " " . implode(",", $movie_1->type) . "</p>";
                                echo "<p class='card-text'>" . "Data uscita:" . " " . $movie_1->date . "</p>";
                                echo "<p class='card-text'>" . $movie_1->getLanguage() . "</p>";

                                ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                echo "<h5 class='card-title'>" . $movie_2->name . "</h5>";
                                echo "<p class='card-text'>" .  "Regista:" . " " . $movie_2->director . "</p>";
                                echo "<p class='card-text'>" . "Genere:" . " "  . implode(",", $movie_2->type) . "</p>";
                                echo "<p class='card-text'>" . "Data uscita:" . " " . $movie_2->date . "</p>";
                                echo "<p class='card-text'>" . $movie_2->getLanguage() . "</p>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>