<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="menu">
        <?php include 'menu.php';?>
    </div>
    <h1>Welcome to my home page</h1>
    <div>
        <?php 
            include 'vars.php';
            echo "I have a $color $car";
        ?>
    </div>
    
    <div class="footer">
        <?php include 'footer.php';?>
    </div>
</body>
</html>