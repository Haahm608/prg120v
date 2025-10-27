<?php include "dbtil.php";include ("index.php");  ?>
<h2>Alle klasser</h2>
<table border="1">
<tr><th>Klassekode</th><th>Klassenavn</th><th>Studiumkode</th></tr>
<?php
$sql = "SELECT * FROM KLASSE";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['klassekode']}</td><td>{$row['klassenavn']}</td><td>{$row['studiumkode']}</td></tr>";
}
?>
</table>
<a href="index.php">Tilbake</a>