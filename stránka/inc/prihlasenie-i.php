<?php
if (isset($_POST["submit"])) { 
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    include "../triedy/databaza.php";
    include "../triedy/prihlasenie-triedy.php";
    include "../triedy/prihlasenie-triedy-c.php"; 
    
    $login = new LoginContr($uid, $pwd);

    $login->loginUser();

    header("location: ../index.php?error=none");
    exit();
}
?>
