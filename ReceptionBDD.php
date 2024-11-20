<?php
require_once 'ConnexionBDD.php';
$test = PDOsql::connexion();

$requete = $test->prepare("select * from Utilisateur");
$requete->execute();
$result = $requete->fetchAll(PDO::FETCH_ASSOC);

echo print_r($result);
?>