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
        function exclaim($str) {
            return $str . "!";
        }
        function ask($str) {
            return $str ."?";
        }
        function printFormatted($str, $format) {
            echo $format($str);
        }

        printFormatted("Hello World", "exclaim");
        printFormatted("Hello World", "ask");
    ?>
</body>
</html>