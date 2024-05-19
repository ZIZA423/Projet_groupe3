<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier les informations de l'étudiant</title>
    <link rel="stylesheet" href="modifie infos etudiant.css">
</head>
<body>
    <!-- Titre dans un cadre en haut -->
    <div class="titre">
        <h1>Modifier les informations de l'étudiant</h1>
    </div>

    <!-- Formulaire de modification des informations de l'étudiant -->
    <form action="modifier_etudiant.php" method="post">
        <label for="matricule">Matricule:</label>
        <input type="text" id="matricule" name="matricule">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom">
        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse">
        <label for="tel">Téléphone:</label>
        <input type="text" id="tel" name="tel">
        <input type="submit" value="Modifier">
    </form>

    <!-- JavaScript (facultatif) pour la validation côté client -->
    <script>
        // Vous pouvez ajouter ici du JavaScript pour valider les données côté client
    </script>
</body>
</html>
