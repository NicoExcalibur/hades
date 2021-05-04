<?php // dump($viewData); ?>
<a href="<?= $router->generate('player-add') ?>"><button>Ajouter un joueur</button></a>

<div class="tops">
    <table class="top-scorers">
        <thead>
            <tr>
                <th colspan="2">Top scoreurs :</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-first-row">
                <td>Portrait</td>
                <td>Nom</td>
                <td>Equipe</td>
            </tr>
    
            <?php foreach ($viewData['topScorersList'] as $player) : ?>
            <tr>
                <td><img src="<?= $player->getPhoto(); ?>" alt="Portrait de <?= $player->getName(); ?>"></td>
                <td><a href="<?= $router->generate('single-player', ['id' => $player->getId()]); ?>"><?= $player->getName(); ?></a></td>
                <!-- I get the logo of the team from team_id in the player table -->
                <td class="tooltip">
                    <a href="<?= $router->generate('single-team', ['id' => $player->getTeamId()]); ?>">
                        <img src="<?= $player->logo; ?>" alt="Logo de <?= $player->team_name; ?>">
                    </a>
                    <span class="tooltiptext"><?= $player->team_name; ?></span>
                </td> 
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <table class="top-assists">
        <thead>
            <tr>
                <th colspan="2">Top passeurs :</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-first-row">
                <td>Portrait</td>
                <td>Nom</td>
                <td>Equipe</td>
            </tr>
    
            <?php foreach ($viewData['topAssistsList'] as $player) : ?>
            <tr>
                <td><img src="<?= $player->getPhoto(); ?>" alt="Portrait de <?= $player->getName(); ?>"></td>
                <td><a href="<?= $router->generate('single-player', ['id' => $player->getId()]); ?>"><?= $player->getName(); ?></a></td>
                <!-- I get the logo of the team from team_id in the player table -->
                <td class="tooltip">
                    <a href="<?= $router->generate('single-team', ['id' => $player->getTeamId()]); ?>">
                        <img src="<?= $player->logo; ?>" alt="Logo de <?= $player->team_name; ?>">
                    </a>
                    <span class="tooltiptext"><?= $player->team_name; ?></span>
                </td> 
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <table class="top-rebounds">
        <thead>
            <tr>
                <th colspan="2">Top rebondeurs :</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-first-row">
                <td>Portrait</td>
                <td>Nom</td>
                <td>Equipe</td>
            </tr>
    
            <?php foreach ($viewData['topReboundsList'] as $player) : ?>
            <tr>
                <td><img src="<?= $player->getPhoto(); ?>" alt="Portrait de <?= $player->getName(); ?>"></td>
                <td><a href="<?= $router->generate('single-player', ['id' => $player->getId()]); ?>"><?= $player->getName(); ?></a></td>
                <!-- I get the logo of the team from team_id in the player table -->
                <td class="tooltip">
                    <a href="<?= $router->generate('single-team', ['id' => $player->getTeamId()]); ?>">
                        <img src="<?= $player->logo; ?>" alt="Logo de <?= $player->team_name; ?>">
                    </a>
                    <span class="tooltiptext"><?= $player->team_name; ?></span>
                </td> 
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <table class="top-blocks">
        <thead>
            <tr>
                <th colspan="2">Top contreurs :</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-first-row">
                <td>Portrait</td>
                <td>Nom</td>
                <td>Equipe</td>
            </tr>
    
            <?php foreach ($viewData['topBlocksList'] as $player) : ?>
            <tr>
                <td><img src="<?= $player->getPhoto(); ?>" alt="Portrait de <?= $player->getName(); ?>"></td>
                <td><a href="<?= $router->generate('single-player', ['id' => $player->getId()]); ?>"><?= $player->getName(); ?></a></td>
                <!-- I get the logo of the team from team_id in the player table -->
                <td class="tooltip">
                    <a href="<?= $router->generate('single-team', ['id' => $player->getTeamId()]); ?>">
                        <img src="<?= $player->logo; ?>" alt="Logo de <?= $player->team_name; ?>">
                    </a>
                <span class="tooltiptext"><?= $player->team_name; ?></span>
            </td> 
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<table class="all-players">
    <thead>
        <tr>
            <th colspan="2">Liste des Joueurs :</th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-first-row">
            <td>Portrait</td>
            <td>Nom</td>
            <td>Equipe</td>
        </tr>
        
        <?php foreach ($viewData['playerList'] as $player) : ?>
        <tr>
            <td><img src="<?= $player->getPhoto(); ?>" alt="Portrait de <?= $player->getName(); ?>"></td>
            <td><a href="<?= $router->generate('single-player', ['id' => $player->getId()]); ?>"><?= $player->getName(); ?></a></td>
             <!-- I get the logo of the team from team_id in the player table -->
             <td class="tooltip">
                <a href="<?= $router->generate('single-team', ['id' => $player->getTeamId()]); ?>">
                    <img src="<?= $player->logo; ?>" alt="Logo de <?= $player->team_name; ?>">
                </a>
                <span class="tooltiptext"><?= $player->team_name; ?></span>
            </td>    
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

