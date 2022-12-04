<?php

require_once  "../configs/configs.php";
require_once ROOT . "/controllers/matchController.php";
require_once ROOT . "/controllers/homeController.php";
require_once ROOT . "/controllers/scheduleController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  try {
    $matchController = new MatchController();
    $homeController = new HomeController();
    $scheduleModel = new ScheduleController();

    $scheduleModel->create($_POST);
    // var_dump($homeController->findAllPlayer());

    // create
    // $matchController->create($_POST);

    // find all
    // $res = $matchController->findAll();

    // find one
    // $res = $matchController->findOne('2');

   //update
  //  $res = $matchController->findOne('2');
  //  $res["start_date"] = "2021-09-11 14:02:22";
  //  $matchController->update('2', $res);

  } catch (Exception $e) {
    echo $e->getMessage();
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>football</title>
  
</head>
<body>
  <?php
  include "navbar.php";
  ?>
  <div class="container m-auto">
    <section class="mt-3">
      <div class="row">
        <div class="col-6 col-md-3"><img src="./img//Capture.PNG" alt=""> </div>
        <div class="col-6 col-md-3"><img src="./img//Capture1.PNG" alt=""></div>
        <div class="col-6 col-md-3"><img src="./img//Capture2.PNG" alt=""></div>
        <div class="col-6 col-md-3"><img src="./img//Capture3.PNG" alt=""></div>
      </div>
    </section>
  </div>
</body>
</html>