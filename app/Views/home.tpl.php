<div class="wrapper">
    <div class="east">
        <table>
            <thead>
                <tr>
                    <th class="home-table-title" colspan="2">Conférence Est :</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-first-row">
                    <td>Nom</td>
                    <td>Logo</td>
                    <td>Titres NBA</td>
                </tr>
                <?php foreach ($viewData['eastTeamList'] as $team) : ?>
                <tr>
                    <td><a href="<?= $router->generate('single-team', ['id' => $team->getId()]); ?>"><?= $team->getName(); ?></a></td>
                    <td><img src="<?= $team->getLogo(); ?>" alt="Logo de <?= $team->getName(); ?>"></td>
                    <td><?= $team->getChampNbr(); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <div class="west">
        <table>
            <thead>
                <tr>
                    <th class="home-table-title" colspan="2">Conférence Ouest :</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-first-row">
                    <td>Nom</td>
                    <td>Logo</td>
                    <td>Titres NBA</td>
                </tr>
                <?php foreach ($viewData['westTeamList'] as $team) : ?>
                <tr>
                    <td><a href="<?= $router->generate('single-team', ['id' => $team->getId()]); ?>"><?= $team->getName(); ?></a></td>
                    <td><img src="<?= $team->getLogo(); ?>" alt="Logo de <?= $team->getName(); ?>"></td>
                    <td><?= $team->getChampNbr(); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>