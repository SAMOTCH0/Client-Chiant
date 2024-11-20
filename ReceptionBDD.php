<?php
requuire_once 'ConnexionBDD.php';
$test = PDOsql::connexion();

$requete = $test->prepare("select * from Utilisateur");
$requete->execute();