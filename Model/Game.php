<?php
class Game
{
    private int $appid;
    private string $name;
    private int $playtime_forever;

    public function __construct($appid, $name, $playtime_forever)
    {
        $this->appid = $appid;
        $this->name = $name;
        $this->playtime_forever = $playtime_forever;
    }
    public function printGame()
    {
        $appid = $this->appid;
        $name = $this->name;
        $playtime_forever = $this->playtime_forever;

        //! template di games
        include __DIR__ . "/../View/gameCard.php";

    }

    public static function fetchAll()
    {
        $gamesString = file_get_contents(__DIR__ . "/steam_db.json");
        $gamesList = json_decode($gamesString, true);
        $games = [];
        foreach ($gamesList as $game) {
            $games[] = new Game($game["appid"], $game["name"], $game["playtime_forever"]);
        }
        return $games;
    }
}
?>