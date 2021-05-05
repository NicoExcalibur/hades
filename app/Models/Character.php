<?php

class Character extends CoreModel{
    
    private $picture;
    private $title;
    private $affiliation_id;

    
    /**
     * Retrieve all players by name in alphabetical order
     *
     * @return  array
     */  
    public function findAllCharacters()
    {
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=hades', 'Nico', 'Ereul9Aeng');

        // SQL query
        $sql = "SELECT *
            FROM `characters` 
            ORDER BY `characters`.`name` ASC
            LIMIT 9
            ";
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get results in an array and send them
        $characters = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Character');

        return $characters;
    }

    /**
     * Retrieve a player by the current id
     *
     * @return  object
     */  
    public function find($id)
    {
        // SQL query
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');
        
        $sql = "SELECT * FROM player 
            WHERE id = {$id};";
        
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get result as a new instance and send it
        $onePlayer = $pdoStatement->fetchObject('Player');

        return $onePlayer;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of affiliation_id
     */ 
    public function getAffiliationId()
    {
        return $this->affiliation_id;
    }

    /**
     * Set the value of affiliation_id
     *
     * @return  self
     */ 
    public function setAffiliationId($affiliation_id)
    {
        $this->affiliation_id = $affiliation_id;

        return $this;
    }
}