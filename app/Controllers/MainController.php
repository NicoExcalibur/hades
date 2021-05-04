<?php

class MainController extends CoreController{

    /**
     * Methods that send the datas needed on the home 
     *
     */
    public function home() {

        // retrieve all teams from Eastern conf.
        $eastTeamModel = new Team();
        $eastTeamList = $eastTeamModel->findAllEast(); // array of objects

        // retrieve all teams from Western conf.
        $westTeamModel = new Team();
        $westTeamList = $westTeamModel->findAllWest(); // array of objects

        // Send the datas to the view
        $this->show('home', [
            'eastTeamList'   => $eastTeamList,
            'westTeamList'   => $westTeamList
        ]);
    }
}