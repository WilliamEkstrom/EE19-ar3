<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>
<body>
    <h1>Uppgift 1</h1>
    <?php
    // Två variabler för namn och adress 

    $namn = "William";
    $adress = "Rymdvägen";
    
    // Skriv ut "Mitt namn är ..., jag bor på ..."
    echo "Mitt namn är $namn, jag bor på $adress.<br>";

    // Variabler för kön och ålder
    $kön = "Man";
    $ålder = 18;

    // Skriv ut "Jag är en ... och jag är ... år."
    echo "Jag är en $kön, och är $ålder år gammal";
    ?>
</body>
</html>