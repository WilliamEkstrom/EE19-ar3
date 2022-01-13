<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $namn = "William Ekström";
    $date = date("d")+19; 
    $dateTvå = date("m")-2;
    $dateTre = date("Y")+7;

    echo "Jag heter William och jag fyller år $date/$dateTvå/$dateTre";
    ?>
</body>
</html>