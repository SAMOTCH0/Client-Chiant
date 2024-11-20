<?php
require_once 'ConnexionBDD.php';
$test = PDOsql::connexion();

$user = $_GET['user'];
$prenom = "TG";
$email = "TG";


$requete = $test->prepare("insert into Utilisateur (Nom,Prenom,Email) values (:user , :prenom , :email)");
$requete->bindParam(':user', $user);
$requete->bindParam(':prenom', $prenom);
$requete->bindParam(':email', $email);
$requete->execute();
$result = $requete->fetchAll(PDO::FETCH_ASSOC);

echo print_r($result);
echo "<br>";
echo "EZ";
echo "TORB DIFFED";
?>