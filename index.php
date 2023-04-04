<?php include "script.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JPT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 >John Paul's Planets @_@</h1>
        <table class="table table-striped-rows my-5">
        <thead class="table-primary">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Mass</th>
                <th scope="col">Distance from the sun</th>
                <th scope="col">atmosphere</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                // print_r($planets);
                foreach($planets as $planet){
                    echo 
                    '<tr>
                        <th>'. $planet["name"] .'</th>
                        <td>'. $planet["type"] .'</td>
                        <td>'. $planet["mass"] .'</td>
                        <td>'. $planet["distance_from_sun"] .'</td>
                        <td>'. $planet["atmosphere"] .'</td>
                    </tr>';
                }
            ?>
        </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>