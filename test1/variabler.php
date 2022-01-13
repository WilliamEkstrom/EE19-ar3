<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Variabler i PHP</h1>
    <?php
    $förnamn = "William";
    $efternamn = "Ekström";

    //echo $förnamn . " " . $efternamn;
    echo "Mitt namn är $förnamn $efternamn <br>";
    echo "Todays date is " . date("l d F Y") . "<br>";

    setlocale(LC_ALL, "sv_SE.utf8");
    echo "Dagens datum är " . strftime("%A %e %B %Y");
    
    ?>
</body>
</html>