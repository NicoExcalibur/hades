<a href="<?= $router->generate('player-update', ['id' => $viewData['myPlayer']->getId()]); ?>"><button> Modifier ce joueur </button></a>

<a href="<?= $router->generate('player-delete', ['id' => $viewData['myPlayer']->getId()]); ?>"><button> Supprimer ce joueur </button></a>

<div class="single-player">
    <div><img src="<?= $viewData['myPlayer']->getPhoto(); ?>" alt="Portrait de <?= $viewData['myPlayer']->getName(); ?>"></div>
    
    <table>
        <thead>
            <tr>
                <th colspan="2"><?= $viewData['myPlayer']->getName(); ?> :</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-first-row">
                <td>Poste</td>
                <td>Points (moy)</td>
                <td>Passes décisives (moy)</td>
                <td>Rebonds (moy)</td>
                <td>Contres (moy)</td>
            </tr>
    
            <tr>
                <td><?= $viewData['myPlayer']->getPosition(); ?></td>
                <td><?= $viewData['myPlayer']->getPointsAvg(); ?></td>
                <td><?= $viewData['myPlayer']->getAssistsAvg(); ?></td>
                <td><?= $viewData['myPlayer']->getReboundsAvg(); ?></td>
                <td><?= $viewData['myPlayer']->getBlocksAvg(); ?></td>
            </tr>
        </tbody>
    </table>
</div>
