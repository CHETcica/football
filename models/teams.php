<?php

require_once ROOT . "/models/baseModel.php";

class TeamsModel extends BaseModel
{
  protected $table = "teams";
  protected $columns = [
    "id", "name"
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
  
}
