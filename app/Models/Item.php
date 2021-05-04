<?php

class Item extends CoreModel{
    
    private $picture;
    private $category_id;

    

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
     * Get the value of category_id
     */ 
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    /**
     * Retrieve all players by name in alphabetical order
     *
     * @return  array
     */  
    public function findAllItems()
    {
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=hades', 'Nico', 'Ereul9Aeng');

        // SQL query
        $sql = "SELECT *
            FROM `items` 
            ORDER BY `items`.`name` ASC
            LIMIT 6 
            ";
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get results in an array and send them
        $items = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Item');

        return $items;
    }
}