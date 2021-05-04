<?php

class Player extends CoreModel{
    
    private $position;
    private $points_avg;
    private $assists_avg;
    private $rebounds_avg;
    private $blocks_avg;
    private $photo;
    private $team_id;

    /**
     * Get the value of position
     */   
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */  
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get the value of points_avg
     */
    public function getPointsAvg()
    {
        return $this->points_avg;
    }

    /**
     * Set the value of points_avg
     *
     * @return  self
     */ 
    public function setPointsAvg($points_avg)
    {
        $this->points_avg = $points_avg;

        return $this;
    }

    /**
     * Get the value of assists_avg
     */ 
    public function getAssistsAvg()
    {
        return $this->assists_avg;
    }

    /**
     * Set the value of assists_avg
     *
     * @return  self
     */  
    public function setAssistsAvg($assists_avg)
    {
        $this->assists_avg = $assists_avg;

        return $this;
    }

    /**
     * Get the value of rebounds_avg
     */
    public function getReboundsAvg()
    {
        return $this->rebounds_avg;
    }

    /**
     * Set the value of assists_avg
     *
     * @return  self
     */ 
    public function setReboundsAvg($rebounds_avg)
    {
        $this->rebounds_avg = $rebounds_avg;

        return $this;
    }
    
    /**
     * Get the value of blocks_avg
     */
    public function getBlocksAvg()
    {
        return $this->blocks_avg;
    }

    /**
     * Set the value of blocks_avg
     *
     * @return  self
     */ 
    public function setBlocksAvg($blocks_avg)
    {
        $this->blocks_avg = $blocks_avg;

        return $this;
    }

    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */  
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of team_id
     */ 
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */  
    public function setTeamId($team_id)
    {
        $this->team_id = $team_id;

        return $this;
    }

    /**
     * Retrieve all players by name in alphabetical order
     *
     * @return  array
     */  
    public function findAllPlayers()
    {
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');

        // SQL query
        $sql = "SELECT player.name AS `name`,
                    player.id AS id,
                    player.photo AS photo,
                    team.logo AS logo,
                    team.name AS team_name,
                    player.team_id AS team_id

            FROM `player` 
            INNER JOIN `team`
            ON `team`.`id` = `player`.`team_id`
            ORDER BY `player`.`name` ASC 
            ";
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get results in an array and send them
        $players = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Player');

        return $players;
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
     * Insert an instance as a new row in the DB
     *
     * @return bool
     */
    public function insert() {

        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');

        // INSERT query with tokens (words) that represents ou values. Indicates what the query should look like whatever the values. (security check)
        $sql = "INSERT INTO `player` 
                                (`position`,
                                `name`,
                                `points_avg`, 
                                `assists_avg`, 
                                `rebounds_avg`, 
                                `blocks_avg`, 
                                `photo`, 
                                `team_id` ) 
                VALUES 
                    (:position, 
                    :name, 
                    :points_avg, 
                    :assists_avg, 
                    :rebounds_avg, 
                    :blocks_avg, 
                    :photo, 
                    :team_id)";

        // prepare the query to get exec and return an object
        $pdoStatement = $pdo->prepare($sql);

        // Replace tokens by the true values. Add a secend security check to force value type with bindValue method
        // https://www.php.net/manual/fr/pdostatement.bindvalue.php

        $pdoStatement->bindValue(':position', $this->position, PDO::PARAM_STR);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        $pdoStatement->bindValue(':points_avg', $this->points_avg, PDO::PARAM_STR);
        $pdoStatement->bindValue(':assists_avg', $this->assists_avg, PDO::PARAM_STR);
        $pdoStatement->bindValue(':rebounds_avg', $this->rebounds_avg, PDO::PARAM_STR);
        $pdoStatement->bindValue(':blocks_avg', $this->blocks_avg, PDO::PARAM_STR);
        $pdoStatement->bindValue(':photo', $this->photo, PDO::PARAM_STR);
        $pdoStatement->bindValue(':team_id', $this->team_id, PDO::PARAM_INT);

        // Execute the query ! return true if works
        $result = $pdoStatement->execute();

        // if the query works
        if($result) {
            // update the id with the id of the last entry of the table
            $this->id = $pdo->lastInsertId();
            // return to give the info that the query worked
            return true;
        }

        // Something went wrong (our query doesn't works)
        return false;
    }

    /**
     * Update a row that exists in the DB
     *
     * @return bool
     */
    public function update()
    {
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');

        // UPDATE query with tokens
        $sql = 'UPDATE `player`
                SET
                    position = :position,
                    name = :name,
                    points_avg = :points_avg,
                    assists_avg = :assists_avg,
                    rebounds_avg = :rebounds_avg,
                    blocks_avg = :blocks_avg,
                    photo = :photo,
                    team_id = :team_id
                WHERE
                    id = :id';

        // prepare the query to get exec and return an object
        $pdoStatement = $pdo->prepare($sql);

        // Replace tokens by the true values. Add a second security check to force value type with bindValue method
        $pdoStatement->bindValue(':position', $this->position, PDO::PARAM_STR);
        $pdoStatement->bindValue(':name', $this->name, PDO::PARAM_STR);
        $pdoStatement->bindValue(':points_avg', $this->points_avg, PDO::PARAM_STR);
        $pdoStatement->bindValue(':assists_avg', $this->assists_avg, PDO::PARAM_STR);
        $pdoStatement->bindValue(':rebounds_avg', $this->rebounds_avg, PDO::PARAM_STR);
        $pdoStatement->bindValue(':blocks_avg', $this->blocks_avg, PDO::PARAM_STR);
        $pdoStatement->bindValue(':photo', $this->photo, PDO::PARAM_STR);
        $pdoStatement->bindValue(':team_id', $this->team_id, PDO::PARAM_INT);
        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_INT);

        // Execute the query ! return true if works
        $executed = $pdoStatement->execute();
        
        // Counts how many row have been modified
        $updatedRows = $pdoStatement->rowCount();
        
        // If the query worked and the row have been modified
        if ($executed && $updatedRows === 1) {

            // return true the update worked
            return true;
        }

        // Something went wrong (our query doesn't works or more/less than one row have been modified)
        return false;
    }

    /**
     * Deletes a row that exists in the DB
     *
     * @return bool
     */
    public function delete()
    {
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');

        // DELETE query
        $sql = 'DELETE FROM `player` WHERE `id` = :id';

        // prepare the query to get exec and return an object
        $pdoStatement = $pdo->prepare($sql);

        // Indicates to PDOstatement the connection between the token and the value
        $pdoStatement->bindValue(':id', $this->id, PDO::PARAM_INT);

        $executed = $pdoStatement->execute();
        
        if ($executed) {

            // return true the deletion worked
            return true;
        }

        // Something went wrong (our query doesn't works)
        return false;
    }

    /**
     * Retrieve all players that get the current team id
     *
     * @return array
     */
    public function findPlayersByTeamId($id)
    {
        // connects to DB
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');
        
        // SQL query to get all players from the current team id
        $sql = "SELECT * FROM player WHERE player.team_id = {$id};";
        
        // execute the query and set the result as a PDOStatement object        
        $pdoStatement = $pdo->query($sql);

        // get results in an array and send them
        $playersByTeamId = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Player');

        return $playersByTeamId;
    }

    /**
     * Retrieve the list of 5 best player by score
     *
     * @return  object
     */  
    public function findTopScorers()
    {
        // SQL query
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');
        
        $sql = "SELECT player.name AS `name`,
                player.id AS id,
                player.photo AS photo,
                team.logo AS logo,
                team.name AS team_name,
                player.team_id AS team_id

            FROM `player` 
            INNER JOIN `team`
            ON `team`.`id` = `player`.`team_id` 
            ORDER BY `points_avg` DESC
            LIMIT 5";
        
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get result as a new instance and send it
        $topScorers = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Player');

        return $topScorers;
    }

     /**
     * Retrieve the list of 5 best player by assists
     *
     * @return  object
     */  
    public function findTopAssists()
    {
        // SQL query
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');
        
        $sql = "SELECT player.name AS `name`,
                player.id AS id,
                player.photo AS photo,
                team.logo AS logo,
                team.name AS team_name,
                player.team_id AS team_id

            FROM `player` 
            INNER JOIN `team`
            ON `team`.`id` = `player`.`team_id` 
            ORDER BY `assists_avg` DESC
            LIMIT 5";
        
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get result as a new instance and send it
        $topAssists = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Player');

        return $topAssists;
    }

    /**
     * Retrieve the list of 5 best player by rebounds
     *
     * @return  object
     */  
    public function findTopRebounds()
    {
        // SQL query
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');
        
        $sql = "SELECT player.name AS `name`,
                player.id AS id,
                player.photo AS photo,
                team.logo AS logo,
                team.name AS team_name,
                player.team_id AS team_id

            FROM `player` 
            INNER JOIN `team`
            ON `team`.`id` = `player`.`team_id` 
            ORDER BY `rebounds_avg` DESC
            LIMIT 5";
        
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get result as a new instance and send it
        $topRebounds = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Player');

        return $topRebounds;
    }

    /**
     * Retrieve the list of 5 best player by blocks
     *
     * @return  object
     */  
    public function findTopBlocks()
    {
        // SQL query
        $pdo = new PDO('mysql:host=localhost;dbname=nba', 'Nico', 'Ereul9Aeng');
        
        $sql = "SELECT player.name AS `name`,
                player.id AS id,
                player.photo AS photo,
                team.logo AS logo,
                team.name AS team_name,
                player.team_id AS team_id

            FROM `player` 
            INNER JOIN `team`
            ON `team`.`id` = `player`.`team_id` 
            ORDER BY `blocks_avg` DESC
            LIMIT 5";
        
        // execute the query and set the result as a PDOStatement object
        $pdoStatement = $pdo->query($sql);

        // get result as a new instance and send it
        $topBlocks = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Player');

        return $topBlocks;
    }
}