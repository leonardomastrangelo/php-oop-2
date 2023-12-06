<?php
include __DIR__ . "/Product.php";

class Book extends Product
{
    private int $id;
    private string $title;
    private string $thumbnailUrl;
    private string $longDescription;
    private string $status;
    private array $authors;

    function __construct($id, $title, $thumbnailUrl, $longDescription, $status, array $authors, $price, $quantity)
    {
        parent::__construct($price, $quantity);
        $this->id = $id;
        $this->title = $title;
        $this->thumbnailUrl = $thumbnailUrl;
        $this->longDescription = $longDescription;
        $this->status = $status;
        $this->authors = $authors;
        $this->setPrice(count($authors));
    }
    public function formatCard()
    {
        $cardData = [
            "id" => $this->id,
            "title" => $this->title,
            "image" => $this->thumbnailUrl,
            "overview" => $this->longDescription,
            "custom_1" => $this->status,
            "custom_2" => $this->getAuthors(),
            "custom_3" => $this->getPrice(),
            "custom_4" => $this->getQuantity(),
            "discount" => $this->obtainDiscount(count($this->authors)),
        ];
        return $cardData;
    }

    public function getAuthors()
    {
        $authorsString = "";
        foreach ($this->authors as $author) {
            $authorsString .= $author . ' ';
        }
        return $authorsString;
    }

    public static function fetchAll()
    {
        $booksString = file_get_contents(__DIR__ . "/books_db.json");
        $booksList = json_decode($booksString, true);
        $books = [];
        foreach ($booksList as $book) {
            $price = rand(10, 89);
            $quantity = rand(50, 4354);
            $books[] = new Book($book["_id"], $book["title"], $book["thumbnailUrl"], $book["longDescription"], $book["status"], $book["authors"], $price, $quantity);
        }
        return $books;
    }
}
?>