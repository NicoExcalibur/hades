<?php

class MainController extends CoreController{

    /**
     * Methods that send the datas needed on the home 
     *
     */
    public function home() {

         // retrieve all teams from Eastern conf.
         $characterModel = new Character();
         $characterList = $characterModel->findAllCharacters(); // array of objects

        // Send the datas to the view
        $this->show('home', [
            'characterList' => $characterList
        ]);
    }
}