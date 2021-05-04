<?php 

class TeamController extends CoreController {

    /**
     * Get a list of all teams and send them to the view
     */
    public function team($id) {
        
        //retrieve a team with his id in the url
        $emptyTeam = new Team();
        $myTeam = $emptyTeam->find($id['id']);

        //retrieve a team with his id in the url
        $emptyTeam = new Team();
        $myRank = $emptyTeam->findTeamRank($id['id']);

        //retrieve all players that have the team id in the url
        $playerModel = new Player();
        $playerList = $playerModel->findPlayersByTeamId($id['id']);
        
        // If the team doesn't exists...
        if ($myTeam === false) {

            // display error
            exit ('erreur 404');
        }

        // send datas to the view
        $this->show('single-team', [
            'myTeam' => $myTeam,
            'playerList' => $playerList,
            'myRank' => $myRank
        ]);
    }

    /**
     * Get a list of all teams ordered by ranking in their conf. and send the datas * to the view
     */
    public function rankings() {

        //retrieve all teams and order
        $emptyTeam = new Team();
        $myEastRank = $emptyTeam->eastRank();
        $myWestRank = $emptyTeam->westRank();

        $this->show('ranking', [
            'myEastRank' => $myEastRank,
            'myWestRank' => $myWestRank
        ]);
    }
}