<?php

class Actor
{
    // Variabili d'istanza:
    public $name;
    public $age;

    // Costruttore:
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Movie
{
    // Variabili d'istanza:
    public $title;
    public $genre;
    public $year;
    public $actors;

    // Costruttore:
    public function __construct($title, $genre, $year, $actors)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->actors = $actors;
    }

    // Metodo per ottenere informazioni sul film:
    public function getMovieInfo()
    {
        return "Titolo: {$this->title}, Genere: {$this->genre}, Anno: {$this->year}, " . $this->getActorsInfo();
    }
}

// Istanziazione degli oggetti Actor
$actor1 = new Actor("Ian McKellen", 82);
$actor2 = new Actor("Elijah Wood", 41);

// Istanziazione degli oggetti Movie con gli attori associati
$movie1 = new Movie("Il Signore degli Anelli: La Compagnia dell'Anello", "Fantasy", 2001, [$actor1, $actor2]);
$movie2 = new Movie("Il Signore degli Anelli: Le due torri", "Fantasy", 2002, [$actor1, $actor2]);
$movie3 = new Movie("Il Signore degli Anelli: Il ritorno del re", "Fantasy", 2003, [$actor1, $actor2]);

// Stampa delle informazioni sugli oggetti Movie
echo $movie1->getMovieInfo() . "<br>";
echo $movie2->getMovieInfo() . "<br>";
echo $movie3->getMovieInfo() . "<br>";
