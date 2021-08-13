<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $age = array("Saiful"=>27, "Mintu"=>26, "Shahriar"=>27);
        echo json_encode($age);

        $cars = array("BMW", "Volvo", "Toyota");
        echo json_encode($cars);
    ?>
</body>
</html>