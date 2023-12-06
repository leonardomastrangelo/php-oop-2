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
        <?php foreach ($games as $game) { ?>
            <div class="col-6 py-4">
                <?php $game->drawCard($game->formatCard()); ?>
            </div>
        <?php } ?>
    </section>
</main>
<?php
include __DIR__ . "/View/footer.php";

?>