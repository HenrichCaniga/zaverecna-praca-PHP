<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="konatktbody">
  
<?php include "./suciastky/header.php"?>

    <main>
      <div class="kontakt-sekcia">
        <div class="kontakt-info">
          <div><i class="fas fa-envelope"></i>E-mail: GameAwards@email.com</div>
          <div><i class="fas fa-envelope"></i>Instagram: GameAwards</div>
          <div><i class="fas fa-envelope"></i>Facebook: GameAwards</div>
        </div>
        <div class="kontakt-form">
          <h2>Podeľte sa o váš názor</h2>
          <form class="kontakt" action="" method="post">
            <input type="text" name="name" class="textovepole" placeholder="Vaše Meno" required>
            <input type="email" name="email" class="textovepole" placeholder="Váš E-mail" required>
            <textarea name="message" rows="5" placeholder="Váš názor" required></textarea>
            <a href="Dakujem.html" class="odoslat" target="_blank">Odoslať</a>
          </form>
        </div>
      </div>
    </main>

    
        <footer class="footer-kontakt">
            <hr class="footer">
            <p class="footer">autor: Henrich Čaniga </p>
            &copy; copyright  <br>
        </footer>

    <script src="js/js.js"></script>
</body>
</html>