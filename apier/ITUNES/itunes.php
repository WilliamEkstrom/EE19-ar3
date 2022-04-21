<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itunes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Itunes Search</h1>
        <form action="#" method="post">
            <div class="mb-3">
                <label for="artist" class="form-label">Ange artistens förnamn</label>
                <input type="text" class="form-control" id="artist" name="fnamn">
            </div>
            <div class="mb-3">
                <label for="artist" class="form-label">Ange artistens efternamn</label>
                <input type="text" class="form-control" id="artist" name="enamn">
            </div>
            <button type="submit" class="btn btn-primary">Sök</button>
        </form>
        <?php
        $fnamn = filter_input(INPUT_POST, "fnamn");
        $enamn = filter_input(INPUT_POST, "enamn");
 
        if ($fnamn && $enamn) {
            $url = "https://itunes.apple.com/search?term=$fnamn+$enamn&limit=10";

            $json = file_get_contents($url);
            
            $data = json_decode($json);

            // Plocka ut data
            $resultCount = $data->resultCount;
            $results = $data->results; // Array med svar(10st)

            // Loopa igenom arrayen
            echo "<table class=\"table\">";
            echo "<theader>";
                echo "<tr>";
                    echo "<th>Artist</th>";
                    echo "<th>Album</th>";
                    echo "<th>Spår</th>";
                    echo "<th>Bild</th>";
                    echo "<th>Längd</th>";
                    echo "<th>Gengre</th>";
                echo "</tr>";
            echo "</theader>";
            foreach ($results as $track) {
                // artistName
                $artistName = $track->artistName;
                $collectionName = $track->collectionName;
                $trackName = $track->trackName;
                $artworkUrl100 = $track->artworkUrl100;
                $trackTime = $track->trackTimeMillis / 1000;
                $primaryGenreName = $track->primaryGenreName;

                // Skriv ut på webbsidan
            echo "<tr>";
                echo "<td>$artistName</td>";
                echo "<td>$collectionName</td>";
                echo "<td>$trackName</td>";
                echo "<td><img src=\"$artworkUrl100\"></td>";
                echo "<td>$trackTime</td>";
                echo "<td>$primaryGenreName</td>";
            echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </div>

</body>
</html>