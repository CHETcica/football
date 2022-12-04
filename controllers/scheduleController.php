<?php

require_once ROOT . "/models/schedule.php";

class ScheduleController
{
  private $scheduleModel;

  function __construct()
  {
    $db = Database::getInstance();
    $this->scheduleModel = new ScheduleModel($db);
  }

  function create($req) {
    $team1 = [
      "team_id" => "1",
      "match_id" => "2",
      "status" => "matched"
    ];
    $this->scheduleModel->insert($team1);

    $team2 = [
      "team_id" => "2",
      "match_id" => "2",
      "status" => "matched"
    ];
    $this->scheduleModel->insert($team2);
  }

  function update($id ,$req) {
    $filter = "id = '{$id}'";
    $res =  $this->scheduleModel->findOne($filter);
    if (!is_array($res) || count($res) <= 0) return new Exception('Not found');
    $res["team_id"] = $req["team_id"];
    $res["status"] = $req["status"];
    $res["match_id"] = $req["match_id"];
    $res["score"] = $res["score"];
    $this->scheduleModel->update($res, $filter);
  }

  function delete($id)
  {
    $filter = "id = '{$id}'";
    $res =  $this->scheduleModel->findOne($filter);
    if (!is_array($res) || count($res) <= 0) return new Exception('Not found');
    $this->scheduleModel->deleteOne($filter);
  }

  function findAll()
  {
    $filter = 'true';
    return $this->scheduleModel->findAll($filter);
  }
  function findAllSchedule(){
    $filter = 'true';
    return $this->scheduleModel->findAllSchedule($filter);
  }
  
  function findOne($id)
  {
    $filter = "id = '{$id}'";
    $res =  $this->scheduleModel->findOne($filter);
    if (!is_array($res) || count($res) <= 0) return new Exception('Not found');
    return $res;
  }

}
