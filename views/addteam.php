<?php
require_once  "../configs/configs.php";
require_once ROOT . "/controllers/homeController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $db = Database::getInstance();
  $homeController = new HomeController($db);

  try {
    $homeController->createTeam($_POST);
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
      <h1>Add Team</h1>
      <form action="" method="post">
        <label for="">team</label>
        <input type="text" name="name">
        <button type="submit">addteam</button>
      </form>
      
    </section>
  </div>
</body>

</html>