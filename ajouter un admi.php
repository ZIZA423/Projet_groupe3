<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJOUTER UN ADMIN</title>
    <link rel="stylesheet" href="general.css">
</head>
<body>
    
    <div class="wrapper">
        <form action="page administrateur.php" method="post">
            <h1>AJOUTER ADMIN</h1>
            <div class="input-box">
                <input type="text" name="admin" placeholder="ADMIN" required> <!-- Modification ici -->
            </div>
            <div class="input-box">
                <input type="password" name="mpassword" placeholder="Password" required>
            </div>
            <div class="remember-forget">
            </div>
            <button type="submit" name="formsubmit" class="btn" onclick="hideSuccessMessage()">AJOUTER</button>
        </form>
        
        <?php
        try {
            define('HOST', 'localhost');
            define('DB_NAME', 'siteweb');
            define('USERNAME', 'root'); // Assurez-vous que le nom d'utilisateur est correct ici
            define('PASSWORD', ''); // Si vous n'avez pas de mot de passe, laissez ceci vide

            // Connexion à la base de données
            $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USERNAME, PASSWORD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Vérification de l'existence de la colonne "admin"
            $stmt = $db->query("SHOW COLUMNS FROM admin LIKE 'admin'");
            $columnExists = $stmt->rowCount() > 0;

            // Si la colonne n'existe pas, ajoutez-la
            if (!$columnExists) {
                $db->exec("ALTER TABLE admin ADD COLUMN admin VARCHAR(255)");
            }

            if(isset($_POST['formsubmit'])){
                $admin = $_POST['admin']; // Modification ici
                $password = $_POST['mpassword'];

                // Insertion des données dans la base de données
                $q = $db->prepare("INSERT INTO admin (admin, password) VALUES (:admin, :password)");
                $q->execute([
                    'admin' => $admin, // Modification ici
                    'password' => password_hash($password, PASSWORD_BCRYPT)
                ]);

                echo "Utilisateur inséré avec succès";
                echo "<script>hideSuccessMessage();</script>"; // Appel de la fonction JavaScript
            }
        } catch (PDOException $e) {
            // Vérifier si c'est une erreur de violation de contrainte d'intégrité
            if(strpos($e->getMessage(), "Integrity constraint violation") === false) {
                echo "Erreur de connexion : " . $e->getMessage();
            }
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
        ?>
    </div>

</body>
</html>