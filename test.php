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
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            fetch('test.php', {
                method: 'POST',
                body: new FormData(e.target)
            }).then(function(response) {
                return response.text();
            }).then(function(text) {
                console.log(text);
            });
        });
    });
