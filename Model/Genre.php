<?php
//* definisco la classe genre
class Genre
{
    # definisco l'attributo name alla classe
    public string $name;
    # la funzione construct creerà ISTANZE in base al parametro ricevuto
    function __construct($name)
    {
        $this->name = $name;
    }
    public static function fetchAll()
    {
        # catturo in una stringa il contenuto di genre_db.json
        $genreString = file_get_contents(__DIR__ . "/genre_db.json");
        # decodifico il file json in formato php
        $genreList = json_decode($genreString, true);
        # creo un array vuoto dove inserire i miei generi
        $genres = [];
        # ciclo la genreList per generare ISTANZE di generi da pushare in $genres
        foreach ($genreList as $genre) {
            $genres[] = new Genre($genre);
        }
        return $genres;
    }
}
# controllo che le ISTANZE siano state create correttamente
// var_dump($genres);

?>