<?php

require_once ROOT . "/models/baseModel.php";

class ScheduleModel extends BaseModel
{
  protected $table = "schedule";
  protected $columns = [
    "id", "team_id", "match_id", "score", "status"
  ];

  function __construct($db)
  {
    parent::__construct($db);
  }
  function findAll($condition)
  {
    $sql = "SELECT * FROM {$this->table} WHERE {$condition}";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }
  function findAllSchedule($condition)
  {
    $sql = "SELECT match_id, 
    (
      SELECT teams.name
    FROM `schedule` 
    JOIN teams ON teams.id = schedule.team_id
    WHERE `match_id`= 2 AND NOT team_id = 2
    )team1,
      (
      SELECT score
    FROM `schedule` 
    JOIN teams ON teams.id = schedule.team_id
    WHERE `match_id`= 2 AND NOT team_id = 2
    )score1,
      (
      SELECT teams.name
    FROM `schedule` 
    JOIN teams ON teams.id = schedule.team_id
    WHERE `match_id`= 2 AND team_id = 2
    )team2,
      (SELECT score FROM `schedule` 
    JOIN teams ON teams.id = schedule.team_id
    WHERE `match_id`= 2 AND team_id = 2
    )score2
      
  FROM `schedule` 
  GROUP BY `match_id`";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }
}
