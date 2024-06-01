<header>
  <div class="container"> 
    <nav class="navbar">
      <a href="index.php" class="nav-branding"><img src="img/logo.png" alt="" width="250" height="70"></a>
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="kontakt.php" class="nav-link">VÁŠ NÁZOR</a>
        </li>
        <li class="nav-item">
          <a href="O hrach.php" class="nav-link">O HRÁCH</a>
        </li>
        <li class="nav-item">
          <a href="kategorie.php" class="nav-link">KATEGÓRIE</a>
        </li>
      <?php
        if(isset($_SESSION["userid"])){
          ?>
          <li class="nav-item">
          <a href="#" class="nav-link"><?php echo $_SESSION["useruid"]; ?></a>
          <li class="nav-item">
          <a href="includes/logout.inc.php" class="nav-link">ODHLASIT</a>
          <?php
        }
          else{
            ?>
                    <li class="nav-item">
          <a href="registracia.php" class="nav-link">REGISTRACIA</a>
          <li class="nav-item">
          <a href="Prihlasenie.php" class="nav-link">PRIHLASENIE</a>
          <?php
          }
          ?>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
 </div>
</header>