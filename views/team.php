<?php
require_once  "../configs/configs.php";
require_once ROOT . "/controllers/homeController.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $db = Database::getInstance();
  $homeController = new HomeController($db);

  try {
    $teamList = $homeController->findAllTeams();
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
  <style>
    .hidden_input{
      display: none;
    }
  </style>
</head>

<body>
  <?php
  include "navbar.php";
  ?>
  <div class="container m-auto">
    <section class="mt-3">
      <h1>Edit Team</h1>
      <table class="table table-responsive">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Teamname</th>
            <th scope="col">details</th>

          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($teamList as $team) {
          ?>
            <tr>
              <th scope="row"></th>
              <td onclick="" >
                <?= $team['name'] ?>
              </td>
              <td class="btn-group">
                <button type="button" class="btn btn-info">see player</button>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>

    </section>
  </div>

</body>

</html>