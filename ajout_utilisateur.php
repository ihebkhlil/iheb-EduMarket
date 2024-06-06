<?php require_once("partials/navbar.php"); ?>

<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Ajouter un utilisateur</h1>
                <div data-aos="fade-up" data-aos-delay="600">
                    <?php
                    require_once('connexion/connexion.php');

                    // Initialiser les variables pour stocker les données du formulaire
                    $nom = $prenom = $email = $adresse = $ville = $code_postal = $pays = "";
                    $error = "";

                    // Fonction pour générer un mot de passe aléatoire
                    function generatePassword($length = 10) {
                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $charactersLength = strlen($characters);
                        $randomString = '';
                        for ($i = 0; $i < $length; $i++) {
                            $randomString .= $characters[rand(0, $charactersLength - 1)];
                        }
                        return $randomString;
                    }

                    // Vérifie si le formulaire a été soumis
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Récupérer les données du formulaire
                        $nom = $_POST['nom'];
                        $prenom = $_POST['prenom'];
                        $email = $_POST['email'];
                        $adresse = $_POST['adresse'];
                        $ville = $_POST['ville'];
                        $code_postal = $_POST['code_postal'];
                        $pays = $_POST['pays'];
                        $mot_de_passe = generatePassword();  // Génère un mot de passe aléatoire

                        // Hachage du mot de passe
                        $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

                        // Préparer la requête SQL pour insérer un nouvel utilisateur dans la base de données
                        $sql = "INSERT INTO Utilisateur (nom, prenom, email, mot_de_passe, adresse, ville, code_postal, pays) 
                                VALUES (:nom, :prenom, :email, :mot_de_passe, :adresse, :ville, :code_postal, :pays)";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(':nom', $nom);
                        $stmt->bindParam(':prenom', $prenom);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':mot_de_passe', $mot_de_passe_hash);
                        $stmt->bindParam(':adresse', $adresse);
                        $stmt->bindParam(':ville', $ville);
                        $stmt->bindParam(':code_postal', $code_postal);
                        $stmt->bindParam(':pays', $pays);

                        // Exécuter la requête
                        if ($stmt->execute()) {
                            // Optionnel: Envoyer le mot de passe par email à l'utilisateur
                            // mail($email, "Votre nouveau compte", "Votre mot de passe est: $mot_de_passe");

                            // Rediriger vers une page de confirmation ou vers la liste des utilisateurs
                            header("Location: utilisateur1.php");
                            exit();
                        } else {
                            $error = "Erreur lors de l'ajout de l'utilisateur.";
                        }
                    }
                    ?>

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Adresse</th>
                                    <th>Ville</th>
                                    <th>Code Postal</th>
                                    <th>Pays</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" id="nom" name="nom" class="form-control" required></td>
                                    <td><input type="text" id="prenom" name="prenom" class="form-control" required></td>
                                    <td><input type="email" id="email" name="email" class="form-control" required></td>
                                    <td><input type="text" id="adresse" name="adresse" class="form-control" required></td>
                                    <td><input type="text" id="ville" name="ville" class="form-control" required></td>
                                    <td><input type="text" id="code_postal" name="code_postal" class="form-control" required></td>
                                    <td><input type="text" id="pays" name="pays" class="form-control" required></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a href="utilisateur1.php" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<?php require_once("partials/footer.php"); ?>
