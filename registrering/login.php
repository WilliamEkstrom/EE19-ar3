<?php
include "konfigdb.php";
session_start();
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloggen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>
        <ul class="nav nav-pills">
        <?php
            if ( $_SESSION['inloggad'] == false) {
        ?>
        <li class="nav-item">
        <a class="nav-link active" href="login.php">Logga in</a>
        </li>
        <?php
        }            
        ?>
        <li class="nav-item">
        <a class="nav-link" href="registrera.php">Registrera</a>
        </li>

  <li class="nav-item">
    <a class="nav-link active" href="logout.php">Logga ut</a>
  </li>
</ul>
        </nav>
        <main>
            <form action="login.php" method="POST">
            <h3>Logga in</h3>
                <div class="row mb-3">
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" id="inputEmail">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputLösen" class="col-sm-2 col-form-label">Lösenord</label>
                    <div class="col-sm-10">
                        <input name="lösen" type="password" class="form-control" id="inputLösen">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Logga in</button>
            </form>
        </main>

        <?php

        // Ta emot data från formuläret
        $email = filter_input(INPUT_POST, "email");
        $lösen = filter_input(INPUT_POST, "lösen");


        // Kolla så att det INTE är NULL
            if ($email && $lösen) {

            // Kontrollera att användarnamnet eller emailen inte redan används
            $sql = "SELECT * FROM `register` WHERE epost='$email'";

            // Kör SQL kommandot
            $resultat = $conn->query($sql);

            // Gick det bra att köra SQL-satsen
            if (!$resultat) {
                die("<p class=\"alert alert-warning\">Någonting blev fel med SQL-satsen!</p>");
            } else {
                
                // Plocka ut svaret och lägg det i arrayen $rad
                $rad = $resultat->fetch_assoc();
                
                
                // Kolla om lösenordet och hashen passar
                if (password_verify($lösen, $rad['hash'])) {
                    echo "<p class=\"alert alert-success\">Du är inloggad</p>";

                    // Kom ihåg att vi lyckats logga in
                    $_SESSION['inloggad'] = true;
                } else {
                    echo "<p class\"alert alert-warning\">Epost eller lösenordet stämmer inte</p>";
                }
            }
        }
        ?>
    </div>
</body>

</html>