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
        function my_callBack($item) {
            return strlen($item);
        }
        $strings = ["apple", "banana", "orange", "pinapple"];
        $lengths = array_map("my_callBack", $strings);
        print_r ($lengths); 
    ?>
</body>
</html>