<?php
require_once 'ConnectorPDO.php';

// Your code here
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    try {
        $pdo = new ConnectorPDO();
        $stmt = $pdo->prepare("INSERT INTO users (nom, prenom) VALUES (:nom, :prenom)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        echo "Data inserted successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<form method="post" action="">
    <label for="nom">nom:</label>
    <input type="text" id="nom" nom="nom" required>
    <br>
    <label for="prenom">prenom:</label>
    <input type="prenom" id="prenom" nom="prenom" required>
    <br>
    <label for="email">email:</label>
    <input type="email" id="email" nom="email" required>
    <br>
    <input type="submit" value="Submit">
</form>
?>