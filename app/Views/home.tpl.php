<?php dump($viewData['characterList']); ?>
<div class="wrapper">
    <div class="intro">
    INTRO
    </div>
    <div class="">
        <div class="character">
            <ul>
            <?php foreach ($viewData['characterList'] as $character) : ?>
                <li>
                    <div>
                        <img src="<?= $character->getPicture() ?>" alt="Image de <?= $character->getName() ?>" style="height: 200px; ">
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