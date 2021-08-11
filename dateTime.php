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
        echo "Today is : ".date("Y/m/d")."<br>";
        echo "Today is : ".date("d-m-Y")."<br>";
        echo "Today is : ".date("l")."<br>";
        
        /* Get a time */
        echo "The time is : " .date("h:i:sa")."<br>";

        /* Get your time zone */
        date_default_timezone_set("Asia/Dhaka");
        echo "The time is : " .date("h:i:sa").'<br>';

        /* Create a date with mktime 
        $d=mktime(9, 30, 15, 10, 22, 1993);
        echo "Created date is : ".date("Y-m-d h:i:sa",$d);
        */

        /* Create a date from a string with strtotime */
        $d=strtotime("10:30pm April 15 2021");
        echo "Created date is : ".date('Y-m-d h:i:sa',$d)."<br>";

        $d = strtotime("tomorrow");
        echo date('Y-m-d h:i:sa',$d)."<br>";

        $d = strtotime("next Sunday");
        echo date('Y-m-d h:i:sa',$d)."<br>";

        $d = strtotime("+3 months");
        echo date('Y-m-d h:i:sa',$d)."<br>";

        
    ?>
</body>
</html>