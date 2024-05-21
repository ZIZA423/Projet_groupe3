<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJOUTER UN ETUDIANT</title>
    <link rel="stylesheet" href="general.css">
</head>
<body>
    
    
    <div class="wrapper">
        <form action="#" method="post">
            <h1>AJOUTER UN ETUDIANT</h1>
            <div class="input-box">
                <input type="text" name="matricule" placeholder="MATRICULE" required>
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

            // Connexion a la base de donnaes
            $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USERNAME, PASSWORD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(isset($_POST['formsubmit'])){
                $matricule = $_POST['matricule'];
                $password = $_POST['mpassword'];

                // Insertion des donnaes dans la base de donnaes
                $q = $db->prepare("INSERT INTO utilisateur (matricule, password) VALUES (:matricule, :password)");
                $q->execute([
                    'matricule' => $matricule,
                    'password' => password_hash($password, PASSWORD_BCRYPT)
                ]);

                echo "Utilisateur insara avec succas";
                echo "<script>hideSuccessMessage();</script>"; // Appel de la fonction JavaScript
            }
        } catch (PDOException $e) {
            // Vérifier si c'est une erreur de violation de contrainte d'intagrita
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