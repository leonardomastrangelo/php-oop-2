<?php
include __DIR__ . "/View/header.php";
include __DIR__ . "/Model/Book.php";
$books = Book::fetchAll();
?>
<!-- title -->
<h1 class="display-2 text-center fw-bold py-5">
    Boooooks
</h1>
<main class="container">
    <section class="row">
        <?php foreach ($books as $book) { ?>
            <div class="col-12 col-md-6 col-xl-4 py-4">
                <?php $book->printBook(); ?>
            </div>
        <?php } ?>
    </section>
</main>
<?php
include __DIR__ . "/View/footer.php";

?>