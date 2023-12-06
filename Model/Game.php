<?php
include __DIR__ . "/Product.php";
class Game extends Product
{
    private string $img_icon_url;
    private string $name;
    private int $playtime_forever;

    public function __construct($img_icon_url, $name, $playtime_forever, $price, $quantity)
    {
        parent::__construct($price, $quantity);
        $this->img_icon_url = $img_icon_url;
        $this->name = $name;
        $this->playtime_forever = $playtime_forever;
        $this->setPrice($playtime_forever);
    }
    public function formatCard()
    {
        $cardData = [
            "image" => $this->img_icon_url,
            "title" => $this->name,
            "custom_1" => $this->getPlayTime(),
            "custom_2" => $this->getPrice(),
            "custom_3" => $this->getQuantity(),
            "discount" => $this->obtainDiscount($this->playtime_forever),
        ];
        return $cardData;

    }
    public function getPlayTime()
    {
        $playTimeString = "Playtime : ";
        $playTimeString .= $this->playtime_forever;
        return $playTimeString;
    }

    public static function fetchAll()
    {
        $gamesString = file_get_contents(__DIR__ . "/steam_db.json");
        $gamesList = json_decode($gamesString, true);
        $games = [];
        foreach ($gamesList as $game) {
            $price = rand(10, 89);
            $quantity = rand(50, 4354);
            $games[] = new Game($game["img_icon_url"], $game["name"], $game["playtime_forever"], $price, $quantity);
        }
        return $games;
    }
}
?>