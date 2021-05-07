<?php

class Boon extends CoreModel {
    
    private $picture;
    private $notes;
    private $prereq;
    private $character_id;
    private $second_id;

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
     * Get the value of rarity
     */ 
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set the value of rarity
     *
     * @return  self
     */ 
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get the value of rarity
     */ 
    public function getPrereq()
    {
        return $this->prereq;
    }

    /**
     * Set the value of rarity
     *
     * @return  self
     */ 
    public function setPrereq($prereq)
    {
        $this->prereq = $prereq;

        return $this;
    }

    /**
     * Get the value of rarity
     */ 
    public function getCharacterId()
    {
        return $this->character_id;
    }

    /**
     * Set the value of rarity
     *
     * @return  self
     */ 
    public function setCharacterId($character_id)
    {
        $this->character_id = $character_id;

        return $this;
    }

    /**
     * Get the value of rarity
     */ 
    public function getSecondId()
    {
        return $this->second_id;
    }

    /**
     * Set the value of rarity
     *
     * @return  self
     */ 
    public function setSecondId($second_id)
    {
        $this->second_id = $second_id;

        return $this;
    }
    
    /**
     * Retrieve all players by name in alphabetical order
     *
     * @return  array
     */  
    public function findAllBoons()
    {
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=hades', 'Nico', 'Ereul9Aeng');

        // SQL query
        $sql = "SELECT *
            FROM `boons` 
            ORDER BY `boons`.`name` ASC
            ";
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get results in an array and send them
        $boons = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Boon');

        return $boons;
    }
}