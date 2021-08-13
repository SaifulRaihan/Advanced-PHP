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
        $int = 121;
        $min = 1;
        $max = 200;

        if (filter_var($int, FILTER_VALIDATE_INT, 
        array("options" => array("min-range" => $min, "max-range" => $max)))===false) {
            echo "Variable value is not in the range";
        } else {
            echo "Variable value is within the legal range";
        }
    ?>
</body>
</html>