<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>OMDB</title>
</head>
<body>
    <div class="kontainer">
        <h1>Lista filmer på OMDB</h1>
        <!-- Formulär för att mata in sökord = del-av-film-->
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="sökterm" class="form-label">Sökterm</label>
                <input type="text" class="form-control" id="sökterm" 
                aria-describedby="emailHelp" name="sökterm" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
        $sökterm = filter_input(INPUT_POST, "sökterm");


        if ($sökterm) {
            $url = "https://www.omdbapi.com/?apikey=ea805224";

            // Hämta data, avkoda, lista alla filmer med bild och texter.
            // Steg 1. Hämta data
            $json = file_get_contents($url . "&s=" . $sökterm);
            
            // Steg 2. Avkoda JSON
            $dataJson = json_decode($json);
            

            // Steg 3. Plocka ut det som intresserar oss
            $Search = $dataJson->Search;
            $totalResults = $dataJson->totalResults;

            echo "<p>Hittade $totalResults filmer med söktermen \"$sökterm\"</p>";

            // Loopa igenom arrayen
            foreach ($Search as $film) {
                $Titel = $film->Titel;
                $Year = $film->Year;
                $Type = $film->Type;
                $Poster = $film->Poster;

                // Skriver ut med Bootstrap Card
                echo "<div class=\"card\" style=\"width: 18rem;\">";
                echo "  <img src=\"$Poster\" alt=\"$sökterm\">";
                echo "  <div class=\"card-body\">";
                echo "      <h5 class=\"card-title\">$Title</h5>";
                echo "      <p class\"card-text\">$Type - $Year</p>";
                echo "  </div>";
                echo "</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>