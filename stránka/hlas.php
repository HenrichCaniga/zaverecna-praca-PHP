<?php
// Spustenie relácie
session_start();

// Import databázového súboru
require_once 'triedy/databaza.php';
$dbh = new Dbh();

// Overenie, či bol formulár odoslaný pomocou POST metódy
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $action = $_POST['action'];
   $moznost_id = isset($_POST['moznost']) ? (int)$_POST['moznost'] : 0;

   // Akcia pre aktualizáciu hlasu
   if ($action == 'update' && $moznost_id > 0) {
       // Získa predchádzajúci hlas užívateľa
       $sql_get_previous_vote = "SELECT id FROM hlasovanie WHERE hlasy > 0 AND id <> $moznost_id";
       $stmt_get_previous_vote = $dbh->connect()->query($sql_get_previous_vote);
       $previous_vote = $stmt_get_previous_vote->fetch(PDO::FETCH_ASSOC);

       // Ak užívateľ predtým hlasoval, odstráni jeho predchádzajúci hlas
       if ($previous_vote) {
           $previous_vote_id = $previous_vote['id'];
           $sql_remove_previous_vote = "UPDATE hlasovanie SET hlasy = hlasy - 1 WHERE id = $previous_vote_id";
           $stmt_remove_previous_vote = $dbh->connect()->prepare($sql_remove_previous_vote);
           $stmt_remove_previous_vote->execute();
       }

       // Pridá nový hlas
       $sql_add_new_vote = "UPDATE hlasovanie SET hlasy = hlasy + 1 WHERE id = $moznost_id";
       $stmt_add_new_vote = $dbh->connect()->prepare($sql_add_new_vote);
       if ($stmt_add_new_vote->execute()) {
           $_SESSION['hlasovanie_sprava'] = "Váš hlas bol zmenený.";
       } else {
           $_SESSION['hlasovanie_sprava'] = "Chyba pri aktualizácii hlasu: " . $stmt_add_new_vote->errorInfo()[2];
       }
   } elseif ($action == 'delete' && $moznost_id > 0) {
       // Odstráni hlas užívateľa
       $sql_check_vote = "SELECT id FROM hlasovanie WHERE hlasy > 0 AND id = $moznost_id";
       $stmt_check_vote = $dbh->connect()->query($sql_check_vote);
       $user_vote = $stmt_check_vote->fetch(PDO::FETCH_ASSOC);

       if ($user_vote) {
           $sql_remove_vote = "UPDATE hlasovanie SET hlasy = hlasy - 1 WHERE id = $moznost_id";
           $stmt_remove_vote = $dbh->connect()->prepare($sql_remove_vote);
           if ($stmt_remove_vote->execute()) {
               $_SESSION['hlasovanie_sprava'] = "Váš hlas bol odstránený.";
           } else {
               $_SESSION['hlasovanie_sprava'] = "Chyba pri odstránení hlasu: " . $stmt_remove_vote->errorInfo()[2];
           }
       } else {
           $_SESSION['hlasovanie_sprava'] = "Nemáte žiadny hlas, ktorý by sa dal odstrániť.";
       }
   }
   // Presmerovanie na hlavnú stránku po vykonaní akcie
   header("Location: index.php");
   exit();
}

// Získanie možností hlasovania z databázy
$sql = "SELECT id, moznost FROM hlasovanie";
$stmt = $dbh->connect()->query($sql);
$options = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="sk">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Zmeniť alebo odstrániť hlas</title>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-dark text-white">
   <?php include "./suciastky/header.php" ?>
   <div class="container mt-5">
       <h1 class="text-center text-white">Zmeniť alebo odstrániť hlas</h1>
       <form action="hlas.php" method="POST" class="mt-4">
           <div class="form-group">
               <label for="moznost">Zmeniť hlas na:</label>
               <select class="form-control" id="moznost" name="moznost">
                   <?php foreach ($options as $option): ?>
                       <option value="<?php echo $option['id']; ?>"><?php echo $option['moznost']; ?></option>
                   <?php endforeach; ?>
               </select>
           </div>
           <div class="d-flex justify-content-center">
               <button type="submit" name="action" value="update" class="btn btn-primary mr-3">Zmeniť hlas</button>
               <button type="submit" name="action" value="delete" class="btn btn-danger">Odstrániť hlas</button>
           </div>
       </form>
   </div>
   <?php include "./suciastky/footer.php" ?>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 