<?php
include __DIR__ . "/View/header.php";
include __DIR__ . "/Model/Game.php";
$games = Game::fetchAll();
?>
<!-- title -->
<h1 class="display-2 text-center fw-bold py-5">
    Gaaaaamesss
</h1>
<main class="container">
    <section class="row">
        <?php
        foreach ($games as $key => $game) {
            $game->printGame();
        }
        ?>
    </section>
</main>
<?php
include __DIR__ . "/View/footer.php";

?>