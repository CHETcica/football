<?php

require_once ROOT . "/models/baseModel.php";

class MatchModel extends BaseModel
{
  protected $table = "tbl_match";
  protected $columns = [
    "id", "start_date", "end_date"
  ];

  function __construct($db)
  {
    parent::__construct($db);
  }

}
