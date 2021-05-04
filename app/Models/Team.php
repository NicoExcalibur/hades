<?php

class Team extends CoreModel{
    
    private $logo;
    private $champ_nbr;
    private $victories;
    private $defeats;
    private $conference;

    /**
     * Get the value of logo
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @return  self
     */ 
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of champ_nbr
     */ 
    public function getChampNbr()
    {
        return $this->champ_nbr;
    }

    /**
     * Set the value of champ_nbr
     *
     * @return  self
     */ 
    public function setChampNbr($champ_nbr)
    {
        $this->champ_nbr = $champ_nbr;

        return $this;
    }

    /**
     * Get the value of victories
     */ 
    public function getVictories()
    {
        return $this->victories;
    }

    /**
     * Set the value of victories
     *
     * @return  self
     */ 
    public function setVictories($victories)
    {
        $this->victories = $victories;

        return $this;
    }

    /**
     * Get the value of defeats
     */ 
    public function getDefeats()
    {
        return $this->defeats;
    }

    /**
     * Set the value of defeats
     *
     * @return  self
     */ 
    public function setDefeats($defeats)
    {
        $this->defeats = $defeats;

        return $this;
    }

    /**
     * Get the value of conference
     */ 
    public function getConference()
    {
        return $this->conference;
    }

    /**
     * Set the value of conference
     *
     * @return  self
     */ 
    public function setConference($conference)
    {
        $this->conference = $conference;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Retrieve all teams 
     *
     * @return  array
     */
    public function findAll()
    {
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');

        // SQL query
        $sql = "SELECT * FROM `team` 
            ORDER BY `name`";
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get results in an array and send them
        $allTeams = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Team');

        return $allTeams;
    }

    /**
     * Retrieve all teams from the Estern conference
     *
     * @return  array
     */
    public function findAllEast()
    {
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');

        // SQL query
        $sql = "SELECT * FROM `team` 
            WHERE `conference` = 0 
            ORDER BY `name` ASC";
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get results in an array and send them
        $Easternteams = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Team');

        return $Easternteams;
    }

    /**
     * Retrieve all teams from the Western conference
     *
     * @return  array
     */
    public function findAllWest()
    {
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');

        // SQL query
        $sql = "SELECT * FROM `team` 
            WHERE `conference` = 1 
            ORDER BY `name` ASC";
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get results in an array and send them
        $Westernteams = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Team');

        return $Westernteams;
    }

    /**
     * Retrieve a team that get the current id
     *
     * @return  object
     */
    public function find($id)
    {
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');
        
        // SQL query
        $sql = "SELECT * FROM `team` 
            WHERE `id` = {$id};";
        
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get result as a new instance and send it
        $oneTeam = $pdoStatement->fetchObject('Team');

        return $oneTeam;
    }

    /**
     * Retrieve all teams from the Eastern conference & order them by their rank
     *
     * @return  array
     */
    public function eastRank() {

        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');

        // SQL query
        $sql = "SELECT * FROM `team` INNER JOIN `ranking` 
            ON team.id = ranking.team_id 
            WHERE conference = 0 
            ORDER BY `conf_rank` ASC";
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get results in an array and send them
        $easternRank = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Team');

        return $easternRank;

    }

    /**
     * Retrieve all teams from the Western conference & order them by their rank
     *
     * @return  array
     */
    public function westRank() {
    
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');

        // SQL query
        $sql = "SELECT * FROM `team` INNER JOIN `ranking` 
            ON `team`.`id` = `ranking`.`team_id` 
            WHERE `conference` = 1 
            ORDER BY `conf_rank` ASC";
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get results in an array and send them
        $easternRank = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Team');

        return $easternRank; 
    }

    /**
     * Retrieve a team that get the current id
     *
     * @return  object
     */
    public function findTeamRank($id)
    {
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');
        
        // SQL query
        $sql = "SELECT `conf_rank` FROM `team`
            INNER JOIN `ranking` 
            ON `team`.`id` = `ranking`.`team_id` 
            WHERE `team`.`id` = {$id};";
        
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get result as a new instance and send it
        $oneTeam = $pdoStatement->fetchObject('Team');

        return $oneTeam;
    }

}