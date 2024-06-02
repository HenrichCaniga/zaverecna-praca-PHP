<?php

  session_start();
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hlasovanie</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-dark text-white">

    <?php include "./suciastky/header.php"?>

    <div class="container mt-5">
        <h1 class="text-center text-white">Hlasujte za hru roka 2023!</h1>
        <form action="hlasovanie.php" method="POST" class="mt-4">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="img/alanwake.jpeg" class="img-fluid" alt="Alan Wake 2">
                    <div class="form-check mt-2">
                        <input type="radio" class="form-check-input" id="moznost1" name="moznost" value="1">
                        <label class="form-check-label text-white" for="moznost1">‘Alan Wake 2’</label>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/baldursgaet.jpeg" class="img-fluid" alt="Baldur’s Gate 3">
                    <div class="form-check mt-2">
                        <input type="radio" class="form-check-input" id="moznost2" name="moznost" value="2">
                        <label class="form-check-label text-white" for="moznost2">‘Baldur’s Gate 3’</label>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/zelda2.jpg" class="img-fluid" alt="The Legend of Zelda: Tears of the Kingdom">
                    <div class="form-check mt-2">
                        <input type="radio" class="form-check-input" id="moznost3" name="moznost" value="3">
                        <label class="form-check-label text-white" for="moznost3">‘The Legend of Zelda: Tears of the Kingdom’</label>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-primary">Hlasovať</button>
            </div>
        </form>
    </div>

    <?php include "./suciastky/footer.php"?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



