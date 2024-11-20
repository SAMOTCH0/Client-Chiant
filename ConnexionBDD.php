<?php
class PDOsql{
    public static function connexion(){
        $servername = "10.20.5.70:3306";
        $username = "root";
        $password = "admin1234";
        $dbname = "Formulaire";

        // Create connection
        $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
        return $conn;
    }
}
?>