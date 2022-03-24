<?php
// Slå på felrapportering
ini_set("display_errors", 1);
error_reporting(E_ALL);

// Uppgifter för databasen, användare, lösenord. 
$användare = "bloggen_db";
$lösenord = "RahhFa(S[hi4jV)d";
$databas = "bloggen_db";
$host = "localhost";

// Logga in
$conn = new mysqli($host, $användare, $lösenord, $databas);

// Gick det att ansluta?
if ($conn->connect_error) {
    die("Någonting gick snett! " . $conn->connect_error);
} else {
   // echo "<p>Hurra det gick bra att ansluta till databasen!</p>";
}
?>