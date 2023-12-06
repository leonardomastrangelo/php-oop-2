<div class="card h-100 position-relative">
    <img class="w-100 d-block" src="<?= $image ?>" class="card-img-top" alt="<?= $title ?>">
    <div class="card-body overflow-hidden">
        <h5 class="card-title">
            <?= $title ?>
        </h5>
        <?php if (isset($overview)) { ?>
            <p class="card-text py-1">
                <?= $overview ?>
            </p>
        <?php } ?>
    </div>
    <ul class="list-group list-group-flush">
        <?php if (isset($flag)) { ?>
            <li class="list-group-item">
                <img class="flag" src="<?= $flag ?>" alt="<?= $title ?>">
            </li>
        <?php } ?>
        <?php if (isset($custom_1)) { ?>
            <li class="list-group-item">
                <?= $custom_1 ?>
            </li>
        <?php } ?>
        <?php if (isset($custom_2)) { ?>
            <li class="list-group-item">
                <?= $custom_2 ?>
            </li>
        <?php } ?>
        <?php if (isset($custom_3)) { ?>
            <li class="list-group-item">
                <?= $custom_3 ?>
            </li>
        <?php } ?>
        <?php if (isset($custom_4)) { ?>
            <li class="list-group-item">
                <?= $custom_4 ?>
            </li>
        <?php } ?>
    </ul>
</div>