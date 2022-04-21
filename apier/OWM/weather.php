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
        <h1>Vädret idag i Stockholm</h1>
        <?php
        // Api-nyckel
        $appid = "22ee1d58f7adae08ee71fa7c0bd24481";

        // Ange staden
        $stad = "stockholm";

        // Address till tjänsten
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$stad&appid=$appid&units=metric&lang=sv";
        //echo "<p>$url</p>";         

        // Anropa api:et
        $json = file_get_contents($url);

        // Avkoda json-svaret
        $data = json_decode($json);

        // Plocka ut data vi är intresserade av
        // Weather, Main, Wind, Coord
        $coord = $dara->coord;
        $weather = $data->weather;
        $main = $data->main;
        $wind = $data->wind;

        // Plocka isär "coord"
        $lon = $coord->lon;
        $lat = $coord->lat;

        // Plocka isär "main"
        $temp = $main->temp;

        // Plocka isär "wind"
        $speed = $wind->speed;

        // Plocka isär "weather"
        $description = $weather[0]->description;

        // Skriv ut allt
        echo "<p>Temperaturen just nu är $temp &deg;C</p>";
        echo "<p>Vindhastigheten är $speed</p>";
        echo "<p><img src=\"http://openweathermap.org/img/wn/04d.png\"></p>";
        echo "<p>I stockholm är det $description</p>";

        ?>
        <footer>
            <img src="https://openweathermap.org/themes/openweathermap/assets/img/openweather-negative-logo-RGB.png" alt="OWM"> Open Weather Map api
        </footer>

    </div>

</body>
</html>