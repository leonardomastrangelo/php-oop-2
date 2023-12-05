<div class="col-6">
    <div class="game card mb-3">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/<?= $appid ?>/header.jpg" class="card-img-top"
            alt="...">
        <div class="card-body">
            <h5 class="card-title">
                <?= $name ?>
            </h5>
            <p class="card-text">
                Price :
                <?= $price . ' $' ?>
            </p>
            <p class="card-text">
                Quantity :
                <?= $quantity ?>
            </p>
            <p class="card-text"><small class="text-body-secondary">
                    <?= 'Playtime : ' . $playtime_forever ?>
                </small></p>
        </div>
    </div>
</div>