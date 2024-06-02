<?php

class Login extends Dbh {

    protected function getUser($uid, $pwd) {
        $stmt = $this->connect()->prepare("SELECT uzivatelia_pwd FROM uzivatelia WHERE uzivatelia_uid = ? OR uzivatelia_email = ?;");

    
        if (!$stmt->execute(array($uid, $pwd))) {
            $stmt = null; 
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }


    $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);

        if($checkPwd == false)
    {
        $stmt = null;
        header("location: ../index.php?error=wrongpwd");
        exit();
    }
        elseif($checkPwd == true){
            $stmt = $this->connect()->prepare("SELECT * FROM uzivatelia WHERE uzivatelia_uid = ? OR uzivatelia_email = ? AND uzivatelia_pwd = ?;");

            if (!$stmt->execute(array($uid, $uid, $pwd))) {
                $stmt = null; 
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null; 
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["uzivatelia_id"];
            $_SESSION["useruid"] = $user[0]["uzivatelia_uid"];
            $stmt = null; 

        }

        $stmt = null; 
    }
}

?>
