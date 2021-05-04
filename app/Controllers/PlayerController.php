<?php 

class PlayerController extends CoreController {

    /**
     * Get all lists of top players and send them to the view
     * 
     * @return void
     */
    public function playerListPage() {

        // retrieve all players
        $playerModel = new Player();
        $playerList = $playerModel->findAllPlayers();
        // retrieve top scorers
        $topScorersModel = new Player();
        $topScorersList = $topScorersModel->findTopScorers();
        // retrieve top assists
        $topAssistsModel = new Player();
        $topAssistsList = $topAssistsModel->findTopAssists();
        // retrieve top rebounds
        $topReboundsModel = new Player();
        $topReboundsList = $topReboundsModel->findTopRebounds();
         // retrieve top blocks
         $topBlocksModel = new Player();
         $topBlocksList = $topBlocksModel->findTopBlocks();

        // send the players datas to the view
        $this->show('players', [
            'playerList' => $playerList,
            'topScorersList' => $topScorersList,
            'topAssistsList' => $topAssistsList,
            'topReboundsList' => $topReboundsList,
            'topBlocksList' => $topBlocksList
        ]);
    }
    
    /**
     * Get a the current player with his id in the url
     * 
     * @return void
     */
    public function player($id) {

        // retrieve the player with his id in the url
        $emptyPlayer = new Player();
        $myPlayer = $emptyPlayer->find($id['id']);
        
        // If the player doesn't exists...
        if ($myPlayer === false) {

            // display error
            exit ('erreur 404');
        
        }

        // send the player datas to the view
        $this->show('single-player', [
            'myPlayer' => $myPlayer
        ]);
    }

    /**
     * Display the add form
     * 
     * @return void
     */
    public function add()
    {
        // retrieve all players
        $emptyPlayer = new Player();
        $players = $emptyPlayer->findAllPlayers();
        
        // send the players datas to the view
        $this->show('add', [
            'players' => $players
        ]);

    }

    /**
     * Method that creates a new row in the DB and redirects to the player list page
     * 
     * @return void
     */
    public function create()
    {       
        // Filters the inputs from $_POST
        //https://www.php.net/manual/fr/filter.filters.php
        $position = filter_input(INPUT_POST, 'position', FILTER_SANITIZE_STRING);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $points_avg = filter_input(INPUT_POST, 'points_avg', FILTER_SANITIZE_STRING);
        $assists_avg = filter_input(INPUT_POST, 'assists_avg', FILTER_SANITIZE_STRING);
        $rebounds_avg = filter_input(INPUT_POST, 'rebounds_avg', FILTER_SANITIZE_STRING);
        $blocks_avg = filter_input(INPUT_POST, 'blocks_avg', FILTER_SANITIZE_STRING);
        $photo = filter_input(INPUT_POST, 'photo', FILTER_SANITIZE_URL);
        $team_id = filter_input(INPUT_POST, 'team_id', FILTER_SANITIZE_NUMBER_INT);
        
        // We create a new instance
        $player = new Player();

        // And we set the properties with our datas
        $player->setPosition($position);
        $player->setName($name);
        $player->setPointsAvg($points_avg);
        $player->setAssistsAvg($assists_avg);
        $player->setReboundsAvg($rebounds_avg);
        $player->setBlocksAvg($blocks_avg);
        $player->setPhoto($photo);
        $player->setTeamId($team_id);
        

        // Call the save method DB
        if ($player->save()) {
    
            // redirect to the path (path's name)
            $this->redirect('player-list');
        }
    }

    /**
     * Method that display the update form and send datas on it
     *
     * @return void
     */
    public function showUpdate($id)
    {
        // retrieve the player with his id in the url
        $emptyPlayer = new Player();
        $myPlayer = $emptyPlayer->find($id['id']);
        
        // If he doesn't exists...
        if ($myPlayer === false) {

        // display error
        exit ('erreur 404');
        
        }

        // send the players datas to the view
        $this->show('update', [
            'myPlayer' => $myPlayer
        ]);
    }

    /**
     * Method that update the current player with his id in the url
     *
     * @return void
     */
    public function edit($id)
    {
        // retrieve the player with his id in the url
        $emptyPlayer = new Player();
        $player = $emptyPlayer->find($id['id']);
        
        // If he doesn't exists...
        if ($player === false) {

        // display error
        exit ('erreur 404');
        
        } 
        // Filters the inputs from $_POST
        //https://www.php.net/manual/fr/filter.filters.php
        $position = filter_input(INPUT_POST, 'position', FILTER_SANITIZE_STRING);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $points_avg = filter_input(INPUT_POST, 'points_avg', FILTER_SANITIZE_STRING);
        $assists_avg = filter_input(INPUT_POST, 'assists_avg', FILTER_SANITIZE_STRING);
        $rebounds_avg = filter_input(INPUT_POST, 'rebounds_avg', FILTER_SANITIZE_STRING);
        $blocks_avg = filter_input(INPUT_POST, 'blocks_avg', FILTER_SANITIZE_STRING);
        $photo = filter_input(INPUT_POST, 'photo', FILTER_SANITIZE_URL);
        $team_id = filter_input(INPUT_POST, 'team_id', FILTER_SANITIZE_NUMBER_INT);

        // And we set the properties with our datas
        $player->setPosition($position);
        $player->setName($name);
        $player->setPointsAvg($points_avg);
        $player->setAssistsAvg($assists_avg);
        $player->setReboundsAvg($rebounds_avg);
        $player->setBlocksAvg($blocks_avg);
        $player->setPhoto($photo);
        $player->setTeamId($team_id);
        
        if ($player->save()) {
            
            $this->redirect('player-list');
        }else{
            echo ('Error');
        }
    }

    /**
     * Method that deletes the current player with his id in the url
     *
     * @return void
     */
    public function delete($id)
    {
        $emptyPlayer = new Player();
        $player = $emptyPlayer->find($id['id']);

        if (empty($player)) {

            exit ('erreur 404');
        }

        if ($player->delete()) {
            
            $this->redirect('player-list');
        }else{
            echo ('Error');
        }
    }
}
