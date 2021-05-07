<?php

class BoonController extends CoreController{

    /**
     * Methods that send the datas needed on the home 
     *
     */
    public function allBoons() {

        // retrieve all Boons
        $boonModel = new Boon();
        $boonList = $boonModel->findAllBoons(); // array of objects

        // Send the datas to the view
        $this->show('boons', [
            'boonList'      => $boonList
        ]);
    }

}