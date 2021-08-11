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
    /* PHP include file */
    include 'noFilesExsits';
    echo "I have $color $car"; 
   
    /* PHP require file */
    require 'noFilesExsits';
    echo "I have $color $car";
    ?>
</body>
</html>