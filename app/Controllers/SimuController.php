<?php

class SimuController extends CoreController{

    /**
     * Methods that send the datas needed on the home 
     *
     */
    public function simulator() {

        // retrieve all Boons
        $boonModel = new Boon();
        $boonList = $boonModel->findAllBoons(); // array of objects

        // retrieve all Boons
        $boonModel = new Boon();
        $strikeList = $boonModel->findAllStrikes(); // array of objects

        // retrieve all Boons
        $boonModel = new Boon();
        $technicalList = $boonModel->findAllTechnicals(); // array of objects

        // retrieve all Boons
        $boonModel = new Boon();
        $shootList = $boonModel->findAllShoots(); // array of objects

        // retrieve all Boons
        $boonModel = new Boon();
        $dashList = $boonModel->findAllDashes(); // array of objects

        // retrieve all Boons
        $boonModel = new Boon();
        $aidList = $boonModel->findAllAids(); // array of objects

        // retrieve all Boons
        $boonModel = new Boon();
        $passiveList = $boonModel->findAllPassives(); // array of objects

        // Send the datas to the view
        $this->show('simulator', [
            'boonList'      => $boonList,
            'strikeList'    => $strikeList,
            'technicalList' => $technicalList,
            'shootList'     => $shootList,
            'dashList'      => $dashList,
            'aidList'       => $aidList,
            'passiveList'   => $passiveList
        ]);
    }
}