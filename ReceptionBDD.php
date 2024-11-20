<?php
require_once 'ConnexionBDD.php';
$test = PDOsql::connexion();

$requete = $test->prepare("select * from Utilisateur");
$requete->execute();
$result = $requete->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    echo print_r($row, true) . "\n";
}
?>