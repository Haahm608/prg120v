<?php
// Databasekobling – endre verdier til det som gjelder for din dokploy-database
$host = "localhost";
$user = "root";        // ditt brukernavn
$pass = "";            // passord hvis du har ett
$db = "ditt_databasenavn";  // bytt til databasenavnet du opprettet

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Tilkoblingsfeil: " . $conn->connect_error);
}
?>