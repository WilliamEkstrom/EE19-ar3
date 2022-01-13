<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Inloggning</h1>
        <?php
        // Ta emot data som skickas
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $alder = filter_input(INPUT_POST, 'alder', FILTER_SANITIZE_STRING);
        $kon = filter_input(INPUT_POST, 'kon', FILTER_SANITIZE_STRING);
        $mat = filter_input(INPUT_POST, 'mat', FILTER_SANITIZE_STRING);
        $sport = filter_input(INPUT_POST, 'sport', FILTER_SANITIZE_STRING);


        echo "Hej, mitt namn är $namn, och jag är en $alder år gammal $kon. Min favorit mat är $mat och jag älskar $sport!"

        ?>
    </div>
</body>
</html>