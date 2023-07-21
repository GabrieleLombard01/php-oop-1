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
