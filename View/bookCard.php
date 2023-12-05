<div class="col-12 col-md-6 col-xl-3 py-4">
    <div class="card book">
        <img class="w-100" src="<?= $thumbnailUrl ?>" class="card-img-top" alt="<?= $title ?>">
        <div class="card-body overflow-hidden">
            <h5 class="card-title">
                <?= $title ?>
            </h5>
            <p class="card-text py-2">
                <?= $longDescription, 0, 250 ?>
            </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <?= $status ?>
            </li>
            <li class="list-group-item">
                <?php foreach ($authors as $key => $author) {
                    echo " $author ";
                } ?>
            </li>
            <li class="list-group-item">
                Price :
                <?= $price . ' $' ?>
            </li>
            <li class="list-group-item">
                Quantity :
                <?= $quantity ?>
            </li>

        </ul>
    </div>
</div>