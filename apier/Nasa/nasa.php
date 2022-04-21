<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Nasa</h1>
        <form action="#" method="post">
            <label>Ange datum </label><input type="text" name="datum" placeholder="YYYY-MM-DD">
            <button>Sök</button>
        </form>
        <?php

        $datum = filter_input(INPUT_POST, "datum");

        $url = "https://api.nasa.gov/planetary/apod?api_key=hccDQRdsdFnehRgvYMXFPMGGmvLQOWFV4NcDx5Ca&date=$datum";

        // Anropa api:et
        $json = file_get_contents($url);

        // Avkoda json-svaret
        $data = json_decode($json);


        // Bild
        $bild = $data->url;
        echo "<img src=\"$bild\">";
        

        // Beskrivning
        $explanation = $data->explanation;
        echo "$explanation";
        

        // Footer
        $copyright = $data->copyright;
        echo "<footer>$copyright</footer>";

        ?>
    </div>

</body>
</html>