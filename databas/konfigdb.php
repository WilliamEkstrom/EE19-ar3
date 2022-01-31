<?php
// Aktivera felmeddelanden under utveckling
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

// Uppgifter för att logga in i mysql-databasen
$host = "localhost";
$user = "movies_db";
$pass = "-Db-2VowUuvN*lLC";
$databas = "movies_db";
// 1. Logga in "Denna ordning!"
$conn = new mysqli($host, $user, $pass, $databas);

// Gick det att ansluta?
if ($conn->connect_error) {
    die ("Fel! Något gick åt skogen: " . $conn->connect_error);
} else {
    echo "Yes! Vi är inloggade i mysql.";
}
?>