<div class="wrapper">
    <a href="<?= $router->generate('player-list') ?>" class="">Retour</a>
    
    <div>
        <h2>Modifier le joueur</h2>
        
        <form method="POST">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="" value="<?= $viewData['myPlayer']->getName(); ?>">
            </div>
            <div class="form-group">
                <label for="lastname">Poste</label>
                <input type="text" class="form-control" name="position" id="position" placeholder="" value="<?= $viewData['myPlayer']->getPosition(); ?>">
            </div>
            <div class="form-group">
                <label for="lastname">Points (moyenne) </label>
                <input type="text" class="form-control" name="points_avg" id="points_avg" placeholder="format XX.X" value="<?= $viewData['myPlayer']->getPointsAvg(); ?>">
            </div>
            <div class="form-group">
                <label for="lastname">Passes décisives (moyenne)</label>
                <input type="text" class="form-control" name="assists_avg" id="assists_avg" placeholder="format XX.X" value="<?= $viewData['myPlayer']->getAssistsAvg(); ?>">
            </div>
            <div class="form-group">
                <label for="lastname">Rebonds (moyenne)</label>
                <input type="text" class="form-control" name="rebounds_avg" id="rebounds_avg" placeholder="format XX.X" value="<?= $viewData['myPlayer']->getReboundsAvg(); ?>">
            </div>
            <div class="form-group">
                <label for="lastname">Contres (moyenne)</label>
                <input type="text" class="form-control" name="blocks_avg" id="blocks_avg" placeholder="format XX.X" value="<?= $viewData['myPlayer']->getBlocksAvg(); ?>">
            </div>
            <div class="form-group">
                <label for="photo">Portrait (url de l'image)</label>
                <input type="text" class="form-control" name="photo" id="photo" placeholder="" value="<?= $viewData['myPlayer']->getPhoto(); ?>">
            </div>
            <div class="form-group">
                <label for="lastname">Equipe ("Id" de l'équipe) </label>
                <input type="number" class="form-control" name="team_id" id="team_id" min="1" max="30" value="<?= $viewData['myPlayer']->getTeamId(); ?>">
            </div>
        
            <button type="submit" class="btn btn-primary btn-block mt-5">Valider</button>
        </form>
    </div>
</div>