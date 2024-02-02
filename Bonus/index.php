<!-- 
### Bonus 1
Modificare la classe `Movie` in modo che accetti piú di un genere
 -->
<?php

class Genres
{
    public $genres;

    public function __construct($genres)
    {
        $this->genres = $genres;
    }
}
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
//Inserisco tutto in un array per non ripetere echo $istanza->printMovie(); echo $istanza->printMovie();
$movies = [
    new Movie('Inception', [new Genres('Sci-Fi'), new Genres('Action')], '2010', "Un ladro esperto è specializzato nell'arte di rubare segreti entrando nei sogni altrui. Viene incaricato di compiere un'azione apparentemente impossibile: l'inserimento di un'idea nella mente di qualcuno."),
    new Movie('The Shawshank Redemption', [new Genres('Drama')], '1994', "Un banchiere condannato ingiustamente alla prigione di Shawshank cerca la redenzione nel corso degli anni, costruendo relazioni uniche con i suoi compagni detenuti e sperimentando il potere della speranza."),
];

//Ciclo
foreach ($movies as $movie) {
    $movie->printMovie();
};

// echo $movie1->getTitle();
// echo "<br>--------------------------<br>";
// echo $movie2->getTitle();
// echo "<br>--------------------------<br>";
// $movie2->setTitle("Ciao");
// echo $movie2->getTitle();
