



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNEXION ETUDIANT</title>
    <link rel="stylesheet" href="general.css">
</head>
<body>
    <div class="wrapper">
        <form action="page etudiant.php" method="post">
            <h1><p>CONNEXION ETUDIANT</p></h1>
            <div class="input-box">
                <input type="text" name="matricule" placeholder="MATRICULE" required>
            </div>
            <div class="input-box">
                <input type="password" name="mot_de_passe" placeholder="MOT DE PASSE" required>
            </div>
            <div class="remember-forget">
                <p><a href="#">Mot de passe oublié?</a></p>
            </div>
            <button type="submit" class="btn">CONNEXION</button>
        </form>
    </div>
</body>
</html>