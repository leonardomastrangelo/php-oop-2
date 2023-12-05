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
        <?php
        foreach ($books as $key => $book) {
            $book->printBook();
        }
        ?>
    </section>
</main>
<?php
include __DIR__ . "/View/footer.php";

?>