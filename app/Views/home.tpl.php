<?php dump($viewData); ?>
<div class="wrapper">
    <div class="intro">
        <p class="intro-text">
        Le joueur incarne <strong>Zagreus</strong>, le prince des enfers, qui tente de fuir le royaume des morts pour découvrir ses origines et réunifier sa famille. Lors de sa quête, les autres divinités olympiennes lui accordent des cadeaux pour l'aider à combattre toutes les entités des Enfers pensant que <strong>Zagreus</strong> souhaite les rejoindre. <br><br>Le jeu est présenté en 3D isométrique et dispose d'éléments du genre roguelite : Le joueur doit se frayer un chemin dans des salles dont l'ordre d'apparition et les ennemis s'y trouvant sont déterminés procéduralement. Il dispose d'une arme principale, d'une attaque spéciale et il peut lancer un sortilège de tir à distance qu’il peut utiliser pour éliminer ses ennemis. L'arme principale peut être remplacée par d'autres (il y en a 6) avec des "clés chtoniennes". L'attaque spéciale (appelée technique) change en fonction de l'arme. Lorsque le joueur perd l'ensemble de ses points de vie, il "meurt" et retourne face à son père, retirant tous les éléments obtenus lors de cette partie, mais conserve une monnaie d'échange pour déverrouiller des améliorations permanentes ou de nouvelles armes.
        </p>

        <img src="https://static.wikia.nocookie.net/hades_gamepedia_en/images/2/29/Zagreus.png" alt="">
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
</div>