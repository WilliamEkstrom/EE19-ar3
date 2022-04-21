<?php
include "konfigdb.php";
session_start();

if (!isset($_SESSION['inloggad'])) {
    $_SESSION['inloggad'] = false;
}

// Ajabaja! Skickas till login.php
if ($_SESSION['inloggad'] == false) {
    header("Location: login.php");
}
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
    <?php
    if (isset($_SESSION['inloggad']) && $_SESSION['inloggad'] == true) {
        echo "<p class=\"alert alert-success\">Du är inloggad</p>";
    } else {
        echo "<p class=\"alert alert-warning\">Du är utloggad</p>";
    }
    ?>
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>
            <ul class="nav nav-pills">
                <?php
                if ($_SESSION['inloggad'] == false) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Logga in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registrera.php">Registrera</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logga ut</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="admin.php">Admin</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <main>
            <h3>Admin</h3>
            <?php
            // Lista alla användare.

            // Steg 1: SQL-Satsen
            $sql = "SELECT * FROM register";

            // Steg 2: kör SQL-Satsen
            $resultat = $conn->query($sql);

            if (!$resultat) {
                die("<p class=\"alert alert-warning\">Någonting blev fel med SQL-satsen!</p>");
            } else {
                // Steg 3: Bearbeta resultatet
                echo "<table class=\"table\">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>namn</th>
                            <th>epost</th>
                        </tr>
                        </thead>
                        <tbody>";
                while ($rad = $resultat->fetch_assoc()) {
                    echo "<tr>
                            <td>$rad[id]</td>
                            <td>$rad[namn]</td>
                            <td>$rad[epost]</td>
                        </tr>";
                }
                echo "</tbody>
                        </table>";
            }
                

            ?>
        </main>
    </div>
</body>

</html>