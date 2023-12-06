<?php
include __DIR__ . "/View/header.php";
include __DIR__ . "/Model/Movie.php";
$movies = Movie::fetchAll();
?>
<!-- title -->
<h1 class="display-2 text-center fw-bold py-5">
    Moooooovieeeeess
</h1>
<main class="container">
    <section class="row">
        <?php foreach ($movies as $movie) { ?>
            <div class="col-12 col-md-6 col-xl-4 py-4">
                <!-- tramite un foreach, utilizzo il metodo printCard della classe Movie per stampare tutti i film di $movies -->
                <?php $movie->printCard(); ?>
            </div>
        <?php } ?>
    </section>
</main>
<?php
include __DIR__ . "/View/footer.php";
?>