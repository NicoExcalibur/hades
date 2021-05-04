<?php
// "Mother class" for all Models
// We put here toutes all attributes (or properties) and methods used by ALL Models
/**
 * This class, CoreModel, doesn't "represents" a table in DB
 * It only purpose is to be extended (extends...)
 */
abstract class CoreModel {
    
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * Get the value of id
     *
     * @return  int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

     /**
     * Get the value of name
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}