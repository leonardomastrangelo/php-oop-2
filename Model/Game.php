<?php
include __DIR__ . "/Product.php";
class Game extends Product
{
    private int $appid;
    private string $name;
    private int $playtime_forever;

    public function __construct($appid, $name, $playtime_forever, $price, $quantity)
    {
        parent::__construct($price, $quantity);
        $this->appid = $appid;
        $this->name = $name;
        $this->playtime_forever = $playtime_forever;
        $this->setPrice($playtime_forever);
    }
    public function printGame()
    {
        $appid = $this->appid;
        $name = $this->name;
        $playtime_forever = $this->playtime_forever;
        $price = $this->getPrice();
        $quantity = $this->quantity;
        //! template di games
        include __DIR__ . "/../View/gameCard.php";

    }

    public static function fetchAll()
    {
        $gamesString = file_get_contents(__DIR__ . "/steam_db.json");
        $gamesList = json_decode($gamesString, true);
        $games = [];
        foreach ($gamesList as $game) {
            $price = rand(10, 89);
            $quantity = rand(50, 4354);
            $games[] = new Game($game["appid"], $game["name"], $game["playtime_forever"], $price, $quantity);
        }
        return $games;
    }
}
?>