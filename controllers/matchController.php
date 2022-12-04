<?php

require_once ROOT . "/models/match.php";

class MatchController
{
  private $matchModel;

  function __construct()
  {
    $db = Database::getInstance();
    $this->matchModel = new MatchModel($db);
  }

  function create($req)
  {
    $startDate = date_format(date_create("2022-11-28 12:30:55"), "Y-m-d H:i:s");
    $data = [
      "id" => null,
      "start_date" => $startDate,
      "end_date" => null
    ];

    $this->matchModel->insert($data);
  }

  function update($id, $req)
  {
    $filter = "id = '{$id}'";
    $res =  $this->matchModel->findOne($filter);
    if (!is_array($res) || count($res) <= 0) return new Exception('Not found');
    $res["start_date"] = $req["start_date"];
    $res["end_date"] = $req["end_date"];
    $this->matchModel->update($res, $filter);
  }

  function delete($id)
  {
    $filter = "id = '{$id}'";
    $res =  $this->matchModel->findOne($filter);
    if (!is_array($res) || count($res) <= 0) return new Exception('Not found');

    $this->matchModel->deleteOne($filter);
  }


  function findAll()
  {
    $filter = 'true';
    return $this->matchModel->findAll($filter);
  }

  function findOne($id)
  {
    $filter = "id = '{$id}'";
    $res =  $this->matchModel->findOne($filter);
    if (!is_array($res) || count($res) <= 0) return new Exception('Not found');
    return $res;
  }
}
