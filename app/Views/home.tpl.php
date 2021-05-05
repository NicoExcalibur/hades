<?php dump($viewData['itemList']); ?>
<div class="wrapper">
    <div class="intro">
    INTRO
    </div>
    <div class="main">
        <div class="character">
            <ul  class="character-list">
            <?php foreach ($viewData['characterList'] as $character) : ?>
                <li>
                    <div class="character-card">
                        <img src="<?= $character->getPicture() ?>" alt="Image de <?= $character->getName() ?>">
                    </div>
                    <div class="character-name">
                        <a href="#"><?= utf8_encode($character->getName()) ?></a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="button">
                <a href="#">Voir tout les Personnages</a>
            </div>
        </div>
        
        <div class="items">
            <ul class="item-list">
                <?php foreach ($viewData['itemList'] as $item) : ?>
                    <li>
                        <div class="item-card">
                            <img src="<?= $item->getPicture() ?>" alt="Image de <?= $item->getName() ?>">
                        </div>
                        <div class="item-name">
                            <a href="#"><?= utf8_encode($item->getName()) ?></a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="button">
                <a href="#">Voir tout les Objets</a>
            </div>
        </div>
    </div> 
</div>