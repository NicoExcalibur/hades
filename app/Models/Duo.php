<?php

class Duo extends CoreModel {
    
    private $picture;
    private $rarity;
    private $notes;
    private $prereq;
    private $first_id;
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
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * Set the value of rarity
     *
     * @return  self
     */ 
    public function setRarity($rarity)
    {
        $this->rarity = $rarity;

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
    public function getFirstId()
    {
        return $this->first_id;
    }

    /**
     * Set the value of rarity
     *
     * @return  self
     */ 
    public function setFirstId($first_id)
    {
        $this->first_id = $first_id;

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
}