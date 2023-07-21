<?php

class Movie
{
    // Variabili d'istanza:
    public $title;
    public $genre;
    public $year;

    // Costruttore:
    public function __construct($title, $genre, $year)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    // Metodo:
    public function getMovieInfo()
    {
        return "Titolo: {$this->title}, Genere: {$this->genre}, Anno: {$this->year}";
    }
}


// Istanziazione dei due oggetti Movie
$movie1 = new Movie("Il Signore degli Anelli: La Compagnia dell'Anello", "Fantasy", 2001);
$movie2 = new Movie("Il Signore degli Anelli: Le due torri", "Fantasy", 2002);
$movie3 = new Movie("Il Signore degli Anelli: Il ritorno del re", "Fantasy", 2003);

// Stampa delle informazioni sugli oggetti Movie
echo $movie1->getMovieInfo() . "<br>";
echo $movie2->getMovieInfo() . "<br>";
echo $movie3->getMovieInfo() . "<br>";
