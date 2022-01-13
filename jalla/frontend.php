<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temperatur</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h3>Hur varmt Ã¤r det?</h3>

        <form action="./backend.php" method="POST">
            <div class="mb-3">
                <label for="temp" class="form-label">Ange temperatur</label>
                <input type="text" class="form-control" id="temp" name="temp" aria-describedby="temp">
            </div>
            <div class="kol3">
                <p>Ange riktning</p>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cf" name="riktning" value="Celsius till Farenheit" checked>
                    <label class="form-check-label" for="cf">C&deg; till F&deg;</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="fc" name="riktning" value="Farenheit till Celsius">
                    <label class="form-check-label" for="fc">F&deg; till C&deg;</label>
                </div>
                </div>
                
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>