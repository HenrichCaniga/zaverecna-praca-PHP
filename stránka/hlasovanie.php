<?php
session_start();

require_once 'classes/dbh.classes.php';

$dbh = new Dbh();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['moznost'])) {
    $moznost_id = (int)$_POST['moznost'];

    $sql = "UPDATE hlasovanie SET hlasy = hlasy + 1 WHERE id = $moznost_id";

    $stmt = $dbh->connect()->prepare($sql);
    if ($stmt->execute()) {
        $_SESSION['hlasovanie_sprava'] = "Váš hlas bol zaznamenaný. Ďakujeme za hlasovanie!";
    } else {
        $_SESSION['hlasovanie_sprava'] = "Chyba: " . $stmt->errorInfo()[2];
    }
} else {
    $_SESSION['hlasovanie_sprava'] = "Prosím, vyberte možnosť na hlasovanie.";
}

header("Location: index.php");
exit();
?>

