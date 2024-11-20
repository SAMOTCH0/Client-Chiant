<?php
require_once 'ConnexionBDD.php';

// Connexion à la base de données
$test = PDOsql::connexion();

try {
    // Préparation et exécution de la requête
    $requete = $test->prepare("SELECT * FROM Utilisateur");
    $requete->execute();
    $result = $requete->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des résultats
    foreach ($result as $row) {
        echo '<pre>' . print_r($row, true) . '</pre>';
    }
} catch (PDOException $e) {
    // Gestion des erreurs
    echo 'Erreur : ' . $e->getMessage();
}
?>
