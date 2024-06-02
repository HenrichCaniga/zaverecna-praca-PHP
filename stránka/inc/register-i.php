<?php
if (isset($_POST["submit"])) { 
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];


    include "../triedy/databaza.php";
    include "../triedy/register-triedy.php";
    include "../triedy/register-triedy-c.php";
    
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    $signup->signupUser();

    header("location: ../index.php?error=none");
    exit();
}
?>

