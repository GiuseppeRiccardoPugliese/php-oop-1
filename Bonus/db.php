<!-- 
### Bonus 1
Modificare la classe `Movie` in modo che accetti piú di un genere
 -->
<?php
require_once __DIR__ . '/Models/genre.php';
require_once __DIR__ . '/Models/movie.php';

//Inserisco tutto in un array per non ripetere echo $istanza->printMovie(); echo $istanza->printMovie();
$movies = [
    new Movie('Inception', [new Genres('Sci-Fi'), new Genres('Action')], '2010', "Un ladro esperto è specializzato nell'arte di rubare segreti entrando nei sogni altrui. Viene incaricato di compiere un'azione apparentemente impossibile: l'inserimento di un'idea nella mente di qualcuno."),
    new Movie('The Shawshank Redemption', [new Genres('Drama')], '1994', "Un banchiere condannato ingiustamente alla prigione di Shawshank cerca la redenzione nel corso degli anni, costruendo relazioni uniche con i suoi compagni detenuti e sperimentando il potere della speranza."),
];
// echo $movie1->getTitle();
// echo "<br>--------------------------<br>";
// echo $movie2->getTitle();
// echo "<br>--------------------------<br>";
// $movie2->setTitle("Ciao");
// echo $movie2->getTitle();
