<?php

class Movie{
    public $original_title;
    public $title;
    public $genre;
    public $language;
    public $release;

    function __construct( string $original_title, string $title, string $genre, string $language, string $release){
        $this->original_title=$original_title;
        $this->title=$title;
        $this->genre=$genre;
        $this->language=$language;
        $this->release=$release;
    }

    public function getTitles(){
        return "Titolo orginale:{$this->original_title}, Titolo:{$this->title}";
    }
}

$frankenweenie= new Movie("Frankenweenie", "Frankenweenie", "animazione", "inglese", "2012");
$batman= new Movie("Batman", "Batman", "azione", "inglese", "1989");

$movies[]=$frankenweenie;
$movies[]=$batman;

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <table border="2" >

    <thead>
    <tr>
        <th>Titolo</th>
        <th>Genere</th>
        <th>Lingua</th>
        <th>Anno di realizzazione</th>
    </tr>
    </thead>

    <tbody>
    
    <?php 

        foreach($movies as $singleMovie) {
        ?>
        <tr>
            <td><?= $singleMovie->getTitles() ?></td>
            <td><?= $singleMovie->genre ?></td>
            <td><?= $singleMovie->language ?></td>
            <td><?= $singleMovie->release ?></td>
        </tr>
        <?php
        }
        
    
    ?>
    </tbody>
    </table>
    
</body>
</html>