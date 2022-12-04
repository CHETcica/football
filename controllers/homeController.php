<?php

require_once ROOT . "/models/player.php";
require_once ROOT . "/models/teams.php";

class HomeController
{
  private $playerModel;
  private $teamsModel;

  function __construct()
  {
    $db = Database::getInstance();
    $this->playerModel = new PlayerModel($db);
    $this->teamsModel = new TeamsModel($db);
  }
  function createTeam($req)
  {
    $data = [
      "id" => null,
      "name" => $req['name']
    ];

    $this->teamsModel->insert($data);
  }
  function createPlayer($req)
  {
    $data = [
      "id" => null,
      "name" => $req['name'],
      "teams_id" => $req['team_id']
    ];

    $this->playerModel->insert($data);
  }
  
  function findAllPlayer()
  {
    $filter = 'true';
    return $this->playerModel->findAllWithJoinTeams($filter);
  }

  function findAllTeams()
  {
    $filter = 'true';
    return $this->teamsModel->findAll($filter);
  }

  function findOnePlayerByID($id)
  {
    $filter = "id = '{$id}'";
    $res =  $this->playerModel->findOne($filter);
    if (!is_array($res) || count($res) <= 0) return new Exception('Not found');
    return $res;
  }

  function findOneTeamsByID($id)
  {
    $filter = "id = '{$id}'";
    $res =  $this->teamsModel->findOne($filter);
    if (!is_array($res) || count($res) <= 0) return new Exception('Not found');
    return $res;
  }

  function findOneAndUpdateTeam($request)
  {
    $values = $request['name'];
    $condition = "id = ".$request['id'];
    return $this->teamsModel->update($request, $condition);
  }
  
  function DeleteTeamOneById($condition)
  {
    return $this->teamsModel->deleteOne($condition);
  }
}
