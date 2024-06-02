<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hlasovanie";

// Vytvorenie spojenia s databázou
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrola spojenia
if ($conn->connect_error) {
    die("Spojenie zlyhalo: " . $conn->connect_error);
}

$sql = "SELECT moznost, hlasy FROM hlasovanie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Výsledky hlasovania:</h1>";
    while ($row = $result->fetch_assoc()) {
        echo "Možnosť: " . $row['moznost'] . " - Hlasy: " . $row['hlasy'] . "<br>";
    }
} else {
    echo "Žiadne hlasy.";
}

$conn->close();
?>
