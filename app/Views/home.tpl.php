<?php dump($viewData['characterList']); ?>
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
                        <?= $character->getName() ?>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        
        <div class="items">
            <?php foreach ($viewData[''] as $item) : ?>
                <tr>
                    <li></li>
                </tr>
            <?php endforeach; ?>
        </div>
    </div> 
</div>