<?php
require_once 'ConnexionBDD.php';
$test = PDOsql::connexion();

$user = $_GET['user'];



$requete = $test->prepare("insert into Utilisateur (Nom) values (:user)");
$requete->bindParam(':user', $user);
$requete->execute();
$result = $requete->fetchAll(PDO::FETCH_ASSOC);

echo print_r($result);
echo "<br>";
echo "EZ";
echo "TORB DIFFED";
?>