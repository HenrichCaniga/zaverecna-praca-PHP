<?php

class Signup extends Dbh {

    protected function setUser($uid, $pwd, $email) {
        $stmt = $this->connect()->prepare("INSERT INTO uzivatelia (uzivatelia_uid, uzivatelia_pwd, uzivatelia_email) VALUES (?, ?, ?);");

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
        if (!$stmt->execute(array($uid, $hashedPwd, $email))) {
            $stmt = null; 
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null; 
    }

    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare("SELECT uzivatelia_uid FROM uzivatelia WHERE uzivatelia_uid = ? OR uzivatelia_email = ?;"); // Opraven název sloupce
    
        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null; 
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck = false;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}

?>
