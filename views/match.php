<?php
require_once  "../configs/configs.php";
require_once ROOT . "/controllers/scheduleController.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $db = Database::getInstance();
    $scheduleController = new ScheduleController($db);

    try {
        $schedulelist = $scheduleController->findAllSchedule();
        
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
        .card {
            margin-top: 1rem;
            padding-bottom: 30px;
            border-radius: 50px !important;
            background: #ffffff;
            box-shadow: 20px 20px 60px #d9d9d9,
                -20px -20px 60px #ffffff;
        }

        

        .match_logoteam {
            margin: 0;
            padding: 0;
            height: 50px;
            width: 50px;
            border-radius: 25px;
        }

        .match_row-vs {
            margin: 0, auto;
            text-align: center;
            border-radius: 20px;
            color: #fff;
            background: rgb(255, 0, 0);
            background: linear-gradient(90deg,
                    rgba(255, 0, 0, 1) 0%,
                    rgba(0, 5, 255, 1) 100%);

        }

        .text-xxl {
            font-size: 40px;
        }

        .text_center {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <div class="container card m-auto">
        <section class="mt-3">
            <h1>Match schedule</h1>
            <table class="table ">
                <thead>
                    <tr class="text_center">
                        <th scope="col"></th>
                        <th scope="col">Team1</th>
                        <th scope="col">score</th>
                        <th scope="col">Team1</th>


                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($schedulelist as $schedule) {
                    ?>
                        <tr class="match_row-vs">
                        <td><img class="match_logoteam" src="https://cache-igetweb-v2.mt108.info/uploads/8249/filemanager/dcea4028cfd5e556b568417fdb5b7a5b_full.jpg" alt=""></td>
                        <td class="text-xxl"><?= $schedule['team1']?></td>
                        <td class="text-xxl">
                            <?php if($schedule['score1']==null){
                                echo 0;
                            }else{
                                 $schedule['score1'];
                            }
                                
                            ?>
                            -
                            <?php if($schedule['score2']==null){
                                echo 0;
                            }else{
                                 $schedule['score2'];
                            }
                                
                            ?></td>
                        <td class="text-xxl"><?= $schedule['team2']?></td>
                        <td><img class="match_logoteam" src="https://cache-igetweb-v2.mt108.info/uploads/8249/filemanager/dcea4028cfd5e556b568417fdb5b7a5b_full.jpg" alt=""></td>
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