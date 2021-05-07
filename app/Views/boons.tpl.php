<div class="wrapper">
    <div class="items">
        <ul class="item-list">
            <?php foreach ($viewData['boonList'] as $boon) : ?>
                <li>
                    <div class="item-card">
                        <img src="<?= $boon->getPicture() ?>" alt="Image de <?= $boon->getName() ?>">
                    </div>
                    <div class="item-name">
                        <a href="#"><?= utf8_encode($boon->getName()) ?></a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="button">
            <a href="#">Voir tout les Bienfaits</a>
        </div>
    </div>
</div>