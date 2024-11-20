<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="test.php" method="post" class="form-container">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <button type="submit">Envoyer</button>
    </form>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        let form = document.querySelector('.form-container');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            fetch('test.php', {
                method: 'POST',
                body: new FormData(e.target)
            }).then(function(response) {
                return response.text();
            }).then(function(data) {
                console.log(data);
            });
            window.location.replace('victoire.html'); 

        });
    });
    </script>
</body>
</html>
