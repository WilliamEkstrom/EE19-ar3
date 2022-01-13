<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Madlibs</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Madlibs</h1>
        <?php
        // Ta emot data som skickas
        $adjective = filter_input(INPUT_POST, 'adjective', FILTER_SANITIZE_STRING);

        $verbIng = filter_input(INPUT_POST, 'verbIng', FILTER_SANITIZE_STRING);

        $food = filter_input(INPUT_POST, 'food', FILTER_SANITIZE_STRING);

        $noun = filter_input(INPUT_POST, 'noun', FILTER_SANITIZE_STRING);

        $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);

        $bodyPart = filter_input(INPUT_POST, 'bodyPart', FILTER_SANITIZE_STRING);

        // Innehåller variablerna text då skriver vi ut madlibs
        if ($adjective && $verbIng && $food && $noun && $number && $bodyPart) {
            // Ett lager av olika verb
            $verben = ["eat", "love", "walk", "run", "swim", "talk", "scream", "shoot", "kill", "laugh", "chop", "enjoy", "jump", "fuck", "play", "paint", "sing", "read", "throw"];
            
           
            
            // Skriv ut madlibs texten
            echo "<p><strong>Mario:</strong> What a/an $adjective day, eh Luigi? The perfect day for $verbIng some Koopas. The $food Kingdom is crawling with  them!</p>
            <p><strong>Luigi:</strong> You're right about that, dear $noun . I hope you're ready to " . $verben[rand(0, 19)] . ".</p>
            <p><strong>Mario:</strong> Ready? I've waited $number years to " . $verben[rand(0, 19)] . ". that soundrel Bowser!</p>
            <p><strong>Luigi:</strong> Pipe down. He has $bodyPart everywhere.</p>
            <p><strong>Mario:</strong> First, I'll " . $verben[rand(0, 19)] . " and grab a/an $food. That'll give me $noun.</p>
            <p><strong>Luigi:</strong> And i'll grab a/an $adjective star. Then I'll be the most $adjective plumber of all time.</p>";
        }
        ?>
    </div>
</body>
</html> 