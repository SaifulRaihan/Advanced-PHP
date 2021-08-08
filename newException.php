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
        /*// Create function with an exception
        function checkNum($number){
            if ($number>1) {
                throw new Exception("Value must be 1 or below.");
            }
            return true;
        }

        checkNum(2);
        */
        // Create function with an exception
        function checkNum($number){
            if ($number>1) {
                throw new Exception("Value must be 1 or below.");
            }
            return true;
        }
        // trigger exception in a try block
        try {
            checkNum(2);
            // If the exception is thrown, this text will not be shown
            echo "If you see this, the number is 1 or below.";
        }
        // Catch exception
        catch (Exception $e) {
            echo "Message: " .$e->getMessage();
        }
    ?>
</body>
</html>