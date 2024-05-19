<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFIER LES INFOS DE L'ETUDIANT</title>
    <link rel="stylesheet" href="modifie infos etudiant.css">
</head>
<body>
    
</body>
</html>

<form action="traitement.php" method="post">
    <label for="matricule">Matricule:</label>
    <input type="text" id="matricule" name="matricule" value="12345"><br>

    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" value="MOUSTAPHA"><br>

    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" value="John"><br>

    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse" value="123, Rue Principale"><br>

    <label for="tel">Téléphone:</label>
    <input type="text" id="tel" name="tel" value="123-456-7890"><br>

    <input type="submit" value="Modifier">
</form>
