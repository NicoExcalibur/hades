<?php// dump($viewData); ?>
<div class="team-header">
    <div>
        <img src="<?= $viewData['myTeam']->getLogo(); ?>" alt="">
    </div>
    <h1 style="color: #<?= $viewData['myTeam']->getColor(); ?>"><?= $viewData['myTeam']->getName(); ?></h1>
    <div class="team-stats">
        <p>#<?= $viewData['myRank']->conf_rank; ?> de la conférence
            <?php if ($viewData['myTeam']->getConference() == 0 ) {
                echo "<strong>Est</strong>";
            } else {
                echo "<strong>Ouest</strong>";
            }; ?>
        </p>
        <div>
            <?= $viewData['myTeam']->getVictories(); ?> V - <?= $viewData['myTeam']->getDefeats(); ?> D
        </div>
    </div>
    <div>
            
    </div>
</div>

<p></p>
<div class="players">
    <?php foreach ($viewData['playerList'] as $player) : ?>
    <div class="player-card">
        <p><a href="<?= $router->generate('single-player', ['id' => $player->getId()]); ?>"><?= $player->getName(); ?></a></p>
        <div><img src="<?= $player->getPhoto(); ?>" alt="Portrait de <?= $player->getName(); ?>"></div>
    </div>
    <?php endforeach; ?>    
</div>