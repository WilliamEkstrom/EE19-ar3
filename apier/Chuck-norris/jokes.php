<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck Norris Skämt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Dagens Chuck Norris skämt</h1>
        <?php
        // Address till tjänsten
        $url = "https://api.chucknorris.io/jokes/random";

        // Anrop till api:et
        $json = file_get_contents($url);

        // Avkoda json-svaret
        $data = json_decode($json);

        // Plocka ut skämtet
        $skämt = $data->value;

        // Plocka ut bilden
        $bildUrl = $data->icon_url;

        // Skriv ut skämtet, dvs "value"
        echo "<p>$skämt</p>";
        echo "<img src=\"$bildUrl\">";
        ?>
    </div>
</body>
</html>