<?php
require_once 'ConnexionBDD.php';
$test = PDOsql::connexion();

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email =  $_POST['email'];


$requete = $test->prepare("insert into Utilisateur (Nom,Prenom,Email) values (:nom , :prenom , :email)");
$requete->bindParam(':nom', $nom);
$requete->bindParam(':prenom', $prenom);
$requete->bindParam(':email', $email);
$requete->execute();
$result = $requete->fetchAll(PDO::FETCH_ASSOC);

echo print_r($result);
echo "<br>";
echo "EZ";
echo "TORB DIFFED";
?>