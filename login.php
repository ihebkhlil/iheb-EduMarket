<?php
// Connexion à la base de données
$servername = "localhost"; // Nom du serveur
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données
$dbname = "edumarket"; // Nom de la base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if(isset($_POST['submit'])) {
    // Récupérer les valeurs du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $adresse = $_POST['adresse'];
    $numéro_téléphone = $_POST['numéro_téléphone'];
    $ville = $_POST['ville'];
    $code_postal = $_POST['code_postal'];
    $pays = $_POST['pays'];

    // Préparer et exécuter la requête SQL pour insérer les données dans la table Utilisateur
    $sql = "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, adresse,
    numéro_téléphone, ville, code_postal, pays) VALUES ('$nom', '$prenom', '$email', '$mot_de_passe', '$adresse', '$numéro_téléphone', '$ville', '$code_postal', '$pays')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie!";
        header("Location: http://localhost//iheb-EduMarket/accueil.php");
        exit();
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login APC</title>
</head>
<body>
<div class="container" id="container">
    <div class="form-container forget-password">
    <form method="POST" enctype="multipart/form-data">
                <h1>Create Account</h1>
                
                <div class="coter" style="display:flex;">
                    <input type="text" id="nom" name="nom" placeholder="Nom" style="margin-left:5px;" >
                    <input type="text" id="prenom" name="prenom" placeholder="Prenom" style="margin-left:5px;">
                </div>

                <div class="coter" style="display:flex;">
                    <input type="email" id="email" name="email" placeholder="email" style="margin-left:5px;">
                    <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="mot_de_passe" style="margin-left:5px;">
                </div>

                <div class="coter" style="display:flex;">
               
                

                <input type="text" id="adresse" name="adresse" placeholder="adresse"style="margin-left:5px;">
                <input type="numéro_téléphone" id="numéro_téléphone" name="numéro_téléphone" placeholder="numéro téléphone" style="margin-left:5px;">

                </div>
                <div class="coter" style="display:flex;">
                <input type="text" id="ville" name="ville" placeholder="ville" style="margin-left:5px;">
                
                <input type="number" id="code_postal" name="code_postal" placeholder="code_postal" style="margin-left:5px;">
                <input type="text" id="pays" name="pays" placeholder="pays" style="margin-left:5px;">
            </div>

             
                <button type="submit"  name="submit">Sign Up</button>
            </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-right">
                <h1>Hello, Friend!</h1>
                <p>Register with your personal details to use all of site features</p>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>