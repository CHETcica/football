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
            <h1>Edit Match</h1>
            <button type="button" class="btn btn-success">add match</button>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Team1</th>
                        <th scope="col">Team1</th>
                        <th scope="col">score</th>
                        <th scope="col">time-start</th>
                        <th scope="col">time-end</th>
                        <th scope="col">date</th>
                        <th scope="col">edit</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>1-0</td>
                        <td>09:00PM</td>
                        <td>10:50PM</td>
                        <td>11/11/2022</td>
                        <td class="btn-group">
                            <button type="button" class="btn btn-warning">edit</button>
                            <button type="button" class="btn btn-danger">delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>

</html>