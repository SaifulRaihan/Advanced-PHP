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
        $myFile = fopen("newFile.txt", "w") or die ("Unable to open file");
        $txt = "Saiful\n";
        fwrite($myFile, $txt);
        $txt = "Shahriar\n";
        fwrite($myFile, $txt);
        fclose($myFile);
    ?>
</body>
</html>