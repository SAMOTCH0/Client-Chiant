<?php
require_once 'ConnexionBDD.php';
$test = PDOsql::connexion();

$requete = $test->prepare("SELECT * FROM Utilisateur");
$requete->execute();
$result = $requete->fetchAll(PDO::FETCH_ASSOC);

echo print_r($result);
echo "<br>";
echo "EZ";
echo "TORB DIFFED";
?>