<?php
    session_start();
?>
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
        /* Echo session variables which was set in previous session */
        echo "My Favorite color is :".$_SESSION["favcolor"]."<br>";
        echo "My Favorite animal is :".$_SESSION["favanimal"]."<br>";
    ?>
</body>
</html>