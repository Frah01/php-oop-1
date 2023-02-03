<?php

class Movie
{
    public $name;
    public $lingua;
    public $type;
    public $date;

    function __construct($_name, $_lingua, $_type, $_date)
    {
        $this->name = $_name;
        $this->lingua = $_lingua;
        $this->type = $_type;
        $this->date = $_date;
    }
}

$movie_1 = new Movie();
$movie_1->name = "Il signore degli anelli";
$movie_1->lingua = "Inglese";
$movie_1->date = "2002-01-18"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo $movie_1->name . " ";
    echo $movie_1->lingua . " ";
    echo $movie_1->type . " ";
    echo $movie_1->date;

    ?>
</body>

</html>