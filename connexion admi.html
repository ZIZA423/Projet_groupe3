<?php



// Connexion à la base de données
define('HOST', 'localhost');
define('DB_NAME', 'siteweb');
define('USERNAME', 'root'); // Assurez-vous que le nom d'utilisateur est correct ici
define('PASSWORD', ''); // Si vous n'avez pas de mot de passe, laissez ceci vide

// Création de la connexion en utilisant les constantes définies
$conn = new mysqli(HOST, USERNAME, PASSWORD, DB_NAME);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Récupération des données du formulaire
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


// Requête SQL pour vérifier les informations de connexion de l'administrateur
$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // L'administrateur est authentifié, rediriger vers la page d'administration
    header("Location: page_administration.php");
    exit(); // Assurez-vous de terminer le script après la redirection
} else {
    // L'administrateur n'est pas authentifié, afficher un message d'erreur
    
}

// Fermer la connexion à la base de données
$conn->close();
?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNEXION ADMIN</title>
    <link rel="stylesheet" href="general.css">
</head>
<body>
    <div class="wrapper">
        <h1>CONNEXION ADMIN</h1>
        <form action="page administrateur.php" method="POST">
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Mot de passe" required>
            </div>
            <button type="submit" value="valider" name="bouton-valider"
             class="btn">CONNEXION</button>
        </form>
    </div>
</body>
</html>