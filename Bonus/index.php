<?php
class Movie
{
    //Variabili d'istanza
    public $title;
    public $genre;
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
        echo 'Genere: ' . $this->genre . '<br>';
        echo 'Anno di rilascio: ' . $this->releaseYear . '<br>';
        echo 'Titolo: ' . $this->description . '<br>';
    }
}
$movie1 = new Movie('Inception', 'Sci-Fi, Action', '2010', "Un ladro esperto è specializzato nell'arte di rubare segreti entrando nei sogni altrui. Viene incaricato di compiere un'azione apparentemente impossibile: l'inserimento di un'idea nella mente di qualcuno.");
$movie2 = new Movie('The Shawshank Redemption', 'Drama', '1994', "Un banchiere condannato ingiustamente alla prigione di Shawshank cerca la redenzione nel corso degli anni, costruendo relazioni uniche con i suoi compagni detenuti e sperimentando il potere della speranza.");

echo $movie1->printMovie();
echo "--------------------------<br>";
echo $movie2->printMovie();
// echo $movie1->getTitle();
// echo "<br>--------------------------<br>";
// echo $movie2->getTitle();
// echo "<br>--------------------------<br>";
// $movie2->setTitle("Ciao");
// echo $movie2->getTitle();
