<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="kontainer">
        <h1>Pokéapi</h1>
        <form action="" method="post">
            <select class="form-select" name = "pokemon">
                <option selected>Välj en Pokémon</option>
                <?php
                $url ="https://pokeapi.co/api/v2/pokemon";

                $json = file_get_contents($url);

                $dataJson = json_decode($json);

                $results = $dataJson->results;

                foreach ($results as $item) {
                    $name = $item->name;
                    echo "<option>$name</option>";
                }
                ?>
            </select>
            <button type="submit" class="btn btn-primary">Hitta</button>
        </form>
        <main>
            <h4>Resultat</h4>
            <?php
            // Ta emot data som skickas
            $pokemon = filter_input(INPUT_POST, "pokemon");
            
            // Kontrollera att vi har data
            if ($pokemon) {
                // Hämta en bild
                $url = "https://pokeapi.co/api/v2/pokemon/$pokemon";

                $json = file_get_contents($url);

                $dataJson = json_decode($json);
                
                // Plocka ut bilden
                $front_shiny = $dataJson->sprites->front_shiny;

                echo "<div class=\"alert alert-success\" role=\"alert\">
                            $pokemon <img src=\"$front_shiny\" alt=\"$pokemon\">
                      </div>";
            }
            ?>
        </main>
    </div>
</body>
</html>