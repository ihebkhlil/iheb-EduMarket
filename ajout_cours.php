<?php require_once("partials/navbar.php"); ?>

<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Ajouter un cours</h1>
                <div data-aos="fade-up" data-aos-delay="600">
                    <?php
                    require_once('connexion/connexion.php');

                    // Initialiser les variables pour stocker les données du formulaire
                    $titre = $description = $categorie = $prix = $duree = "";
                    $error = "";

                    // Vérifie si le formulaire a été soumis
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Récupérer les données du formulaire
                        $titre = $_POST['titre'];
                        $description = $_POST['description'];
                        $categorie = $_POST['categorie'];
                        $prix = $_POST['prix'];
                        $duree = $_POST['duree'];

                        // Préparer la requête SQL pour insérer un nouveau cours dans la base de données
                        $sql = "INSERT INTO cours (titre, description, categorie, prix, duree) 
                                VALUES (:titre, :description, :categorie, :prix, :duree)";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(':titre', $titre);
                        $stmt->bindParam(':description', $description);
                        $stmt->bindParam(':categorie', $categorie);
                        $stmt->bindParam(':prix', $prix);
                        $stmt->bindParam(':duree', $duree);

                        // Exécuter la requête
                        if ($stmt->execute()) {
                            // Rediriger vers une page de confirmation ou vers la liste des cours
                            header("Location: cours_list.php");
                            exit();
                        } else {
                            $error = "Erreur lors de l'ajout du cours.";
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
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Catégorie</th>
                                    <th>Prix</th>
                                    <th>Durée</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" id="titre" name="titre" class="form-control" required></td>
                                    <td><input type="text" id="description" name="description" class="form-control" required></td>
                                    <td><input type="text" id="categorie" name="categorie" class="form-control" required></td>
                                    <td><input type="number" step="0.01" id="prix" name="prix" class="form-control" required></td>
                                    <td><input type="number" id="duree" name="duree" class="form-control" required></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a href="cours_list.php" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<?php require_once("partials/footer.php"); ?>
