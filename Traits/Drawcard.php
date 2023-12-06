<?php
trait Drawcard
{
    public function drawCard($data)
    {
        extract($data);
        include __DIR__ . "/../View/card.php";
    }
}
?>