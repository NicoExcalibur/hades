<div class="wrapper">
    <div class="east">
        <table>
            <thead>
                <tr>
                    <th class="home-table-title" colspan="2">Classement de la Conférence Est :</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-first-row">
                    <td>Rang</td>
                    <td>Nom</td>
                    <td>Logo</td>
                    <td>Victoires</td>
                    <td>Défaites</td>
                </tr>
                <?php $a = 1; ?>
                <?php foreach ($viewData['myEastRank'] as $team) : ?>
                <tr>
                    <td><?= $a++ ?></td>
                    <td><a href="<?= $router->generate('single-team', ['id' => $team->getId()]); ?>"><?= $team->getName(); ?></a></td>
                    <td><img src="<?= $team->getLogo(); ?>" alt="Logo de <?= $team->getName(); ?>"></td>
                    <td><?= $team->getVictories(); ?></td>
                    <td><?= $team->getDefeats(); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <div class="west">
        <table>
            <thead>
                <tr>
                    <th class="home-table-title" colspan="2">Classement de la Conférence Ouest :</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-first-row">
                    <td>Rang</td>
                    <td>Nom</td>
                    <td>Logo</td>
                    <td>Victoires</td>
                    <td>Défaites</td>
                </tr>
                <?php $a = 1; ?>
                <?php foreach ($viewData['myWestRank'] as $team) : ?>
                <tr>
                    <td><?= $a++ ?></td>
                    <td><a href="<?= $router->generate('single-team', ['id' => $team->getId()]); ?>"><?= $team->getName(); ?></a></td>
                    <td><img src="<?= $team->getLogo(); ?>" alt="Logo de <?= $team->getName(); ?>"></td>
                    <td><?= $team->getVictories(); ?></td>
                    <td><?= $team->getDefeats(); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>