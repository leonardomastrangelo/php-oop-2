<?php
class Book
{
    private int $id;
    private string $title;
    private string $thumbnailUrl;
    private string $longDescription;
    private string $status;
    private array $authors;

    function __construct($id, $title, $thumbnailUrl, $longDescription, $status, array $authors)
    {
        $this->id = $id;
        $this->title = $title;
        $this->thumbnailUrl = $thumbnailUrl;
        $this->longDescription = $longDescription;
        $this->status = $status;
        $this->authors = $authors;
    }
    public function printBook()
    {
        $id = $this->id;
        $title = $this->title;
        $thumbnailUrl = $this->thumbnailUrl;
        $longDescription = $this->longDescription;
        $status = $this->status;
        $authors = $this->authors;

        //! template di books
        include __DIR__ . "/../View/bookCard.php";
    }

    public static function fetchAll()
    {
        $booksString = file_get_contents(__DIR__ . "/books_db.json");
        $booksList = json_decode($booksString, true);
        $books = [];
        foreach ($booksList as $book) {
            $books[] = new Book($book["_id"], $book["title"], $book["thumbnailUrl"], $book["longDescription"], $book["status"], $book["authors"]);
        }
        return $books;
    }
}
?>