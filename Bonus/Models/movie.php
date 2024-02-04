<?php

require_once __DIR__ . '/genre.php';
class Movie
{
    //Variabili d'istanza
    public $title;
    public $genre = []; //Diventa un array di Genres
    public $releaseYear;
    public $description;

    //Construct
    public function __construct($title, $genre, $releaseYear, $description)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
        $this->description = $description;
    }

    //Get title method
    public function getTitle()
    {
        return $this->title;
    }

    //Set title method
    public function setTitle($title)
    {
        $this->title = $title;
    }

    //Method per stampare a schermo tutto
    public function printMovie()
    {
        echo 'Titolo: ' . $this->title . '<br>';
        // echo 'Genere: ' . $this->genre . '<br>';
        echo 'Generi: ';
        foreach ($this->genre as $genre) {
            echo $genre->genres . ' ';
        }
        echo '<br>' . 'Anno di rilascio: ' . $this->releaseYear . '<br>';
        echo 'Descrizione: ' . $this->description . '<br>';
        echo "--------------------------<br>";
    }
}
