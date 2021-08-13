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
        $jsonobj = '{"Peter":53, "Ben":40, "Joe":50}';
        $obj = json_decode($jsonobj);

        $arr = json_decode($jsonobj, true);
        echo "<br>";

        /* Accessing value from decode value */
        echo $obj->Peter;
        echo "<br>";
        echo $obj->Ben;
        echo "<br>";
        echo $obj->Joe; 
        echo "<br>";
        
        /* Accessing value from decode value */
        echo $arr["Peter"];
        echo "<br>";
        echo $arr["Ben"];
        echo "<br>";
        echo $arr["Joe"];
    ?>
</body>
</html>