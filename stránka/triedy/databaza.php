<?php

class Dbh {
    public function connect() {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO("mysql:host=localhost;dbname=oopprihlasenie", $username, $password);
            return $dbh;
        }
        catch (PDOException $e) {
            print "Error!:" .$e->getMessage() . "<br/>";
            die();
        }
    }
}

