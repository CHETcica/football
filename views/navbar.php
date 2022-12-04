<?php
$user = 'admin';
?>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="/football/views/">
      <img style="height: 50px;" src="./img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/football/views/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./team.php">team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./player.php">player</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./match.php">match</a>
        </li>
        <?php
        if ($user == 'admin') {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="./editteam.php">edit team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./editplayer.php">edit player</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./editmatch.php">edit match</a>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>