<?php

class MainController extends CoreController{

    /**
     * Methods that send the datas needed on the home 
     *
     */
    public function home() {

        // retrieve all characters
        $characterModel = new Character();
        $characterList = $characterModel->findAllCharacters(); // array of objects

        // retrieve all Items
        $itemModel = new Item();
        $itemList = $itemModel->findAllItems(); // array of objects

        // Send the datas to the view
        $this->show('home', [
            'characterList' => $characterList,
            'itemList'      => $itemList
        ]);
    }
}