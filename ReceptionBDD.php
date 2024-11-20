<?php
require_once 'ConnexionBDD.php';

// Connexion à la base de données
$test = PDOsql::connexion();

try {
    // Préparation et exécution de la requête
    $requete = $test->prepare("SELECT * FROM Utilisateur");
    $requete->execute();
    $result = $requete->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Utilisateurs</h1>
        <table>
            <thead>
                <tr>
                    <?php
                    if (!empty($result)) {
                        // Afficher les noms des colonnes
                        foreach (array_keys($result[0]) as $column) {
                            echo "<th>" . htmlspecialchars($column) . "</th>";
                        }
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                // Afficher les données
                foreach ($result as $row) {
                    echo "<tr>";
                    foreach ($row as $cell) {
                        echo "<td>" . htmlspecialchars($cell) . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
