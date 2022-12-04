<?php

require_once ROOT . "/models/baseModel.php";

class PlayerModel extends BaseModel
{
  protected $table = "players";
  protected $columns = [
    "id", "name", "teams_id", "name"
  ];

  function __construct($db)
  {
    parent::__construct($db);
  }
  function insert($data)
  {
    $columnStr = join(", ", $this->columns);

    $values = [];
    foreach ($this->columns as $item) {
      array_push($values, ":" . $item);
    }
    $valuesStr = join(", ", $values);

    $sql = "INSERT INTO $this->table ({$columnStr}) VALUES ({$valuesStr})";
    $stmt = $this->db->prepare($sql);

    foreach ($this->columns as $item) {
      $stmt->bindParam(":{$item}", $data[$item]);
    }

    $stmt->execute();
  }

  function findAllWithJoinTeams($condition)
  {
    $sql = "SELECT players.id, players.name as playername, teams_id, teams.name as teamname FROM {$this->table} 
    LEFT JOIN teams on teams.id = {$this->table}.teams_id 
    WHERE {$condition}";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }
}
