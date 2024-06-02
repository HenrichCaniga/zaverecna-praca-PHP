<?php

  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php include "./suciastky/header.php"?>
<main>
     <div class="container1">
        <div class="hry">
          <div class="strana jedna">
            <h1>1. ‘Alan Wake 2’</h1>
            <div>
              <button onClick="slide('next')">Ďalšia</button>
            </div>
          </div>
          <div class="strana dva">
            <h1>2. ‘Baldur’s Gate 3’</h1>
            <div>
              <button onClick="slide('prev')">Predošlá</button>
              <button onClick="slide('next')">Ďalšia</button>
            </div>
          </div>
          <div class="strana tri">
            <h1>3. ‘The Legend of Zelda: Tears of the Kingdom’</h1>
            <div>
              <button onClick="slide('prev')">Predošlá</button>
            </div>
          </div>
        </div>
</main>

<?php include "./suciastky/footer.php"?>


     <script src="js/js.js"></script>

</body>
</html>