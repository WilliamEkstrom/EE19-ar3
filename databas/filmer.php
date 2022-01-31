<?php
include "konfigdb.php";
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="kontainer">
        <h1>Lista på alla filmer</h1>
        <?php
        // 2. SQL-satsen vi vill köra
        $sql = "SELECT titel, datum FROM movies";

        // 3. Be mysql-servern köra frågan
        $result = $conn->query($sql);

        // Gick det bra att köra SQL-satsen?
        if (!$result) {
            die("Något gick fel med SQL-satsen!");
        } else {
            //echo "<p>SQL-satsen funkade bra!</p>";

            while ($rad = $result->fetch_assoc()) {
                echo "<p>$rad[datum] $rad[titel]</p>";
            }
        }
        ?>
    </div>
</body>
</html>