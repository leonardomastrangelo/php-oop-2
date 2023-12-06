<?php
//! includo il file Genre.php
include __DIR__ . "/Genre.php";
include __DIR__ . "/../Traits/Drawcard.php";
//* definisco la classe movie
class Movie
{
    use Drawcard;
    # definisco gli attributi della classe Movie
    private int $id;
    private string $poster_path;
    private string $title;
    private string $overview;
    private string $original_language;
    private string $release_date;
    private float $vote_average;
    //? metto come attributo classe Genre
    public Genre $genre;
    # passo come argomenti alla funzione construct i parametri che riceverà quando creeremo ISTANZE
    public function __construct(
        $id,
        $poster_path,
        $title,
        $overview,
        $original_language,
        $release_date,
        $vote_average,
        $genre
    ) {
        $this->id = $id;
        $this->poster_path = $poster_path;
        $this->title = $title;
        $this->overview = $overview;
        $this->original_language = $original_language;
        $this->release_date = $release_date;
        $this->vote_average = $vote_average;
        $this->genre = $genre;
    }

    # creo un metodo che permette di stampare una card per movie
    public function formatCard()
    {
        $cardData = [
            "image" => $this->poster_path,
            "title" => $this->title,
            "overview" => $this->overview,
            "flag" => $this->langToFlag(),
            "custom_1" => $this->release_date,
            "custom_2" => $this->getVote(),
            "custom_3" => $this->genre->name

        ];
        return $cardData;
    }
    # creo un metodo per convertire la lingua in bandiera
    public function langToFlag()
    {
        switch ($this->original_language) {
            case 'en':
                return $original_language = 'View/flags/united-kingdom.png';
            case 'fr':
                return $original_language = 'View/flags/france.png';
            case 'de':
                return $original_language = 'View/flags/germany.png';
            case 'it':
                return $original_language = 'View/flags/italy.png';
            default:
                return $original_language = 'View/flags/world.png';
        }

    }
    # creo un metodo per convertire il voto in stelle
    public function getVote()
    {
        $vote_average = ceil($this->vote_average / 2);
        $template = "<p>";
        for ($i = 1; $i <= 5; $i++) {
            $template .= $i <= $vote_average ? "<i class='fa-solid fa-star'></i>" : "<i class='fa-regular fa-star'></i>";
        }
        $template .= "</p>";
        return $template;
    }
    public static function fetchAll()
    {
        # catturo in una stringa il contenuto di movie_db.json
        $movieString = file_get_contents(__DIR__ . "/movie_db.json");
        # decodifico il file json in formato php
        $movieList = json_decode($movieString, true);
        # creo un array vuoto dove inserire i miei movies
        $movies = [];
        $genres = Genre::fetchAll();
        # ciclo la MovieList per generare ISTANZE di film da pushare in $movies
        foreach ($movieList as $key => $movie) {
            $randGenre = $genres[rand(0, count($genres) - 1)];
            $movies[] = new Movie($movie["id"], $movie["poster_path"], $movie["title"], $movie["overview"], $movie["original_language"], $movie["release_date"], $movie["vote_average"], $randGenre);
        }
        return $movies;
    }
}
# controllo che le ISTANZE siano state create correttamente
// var_dump($movies[0]);
// var_dump($movies[1])

?>