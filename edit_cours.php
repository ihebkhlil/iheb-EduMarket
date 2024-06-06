<?php require_once("partials/navbar.php");?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Liste des Cours</h1>
          <div data-aos="fade-up" data-aos-delay="600">
           <?php
require_once('connexion/connexion.php');

// Vérifier si l'identifiant de l'étudiant est passé en paramètre GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Préparez votre requête SQL pour récupérer les détails de l'étudiant
    $sql = "SELECT * FROM cours WHERE id_cours = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Vérifiez s'il y a un résultat
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Affichez les détails de l'étudiant dans un formulaire pour l'édition
?>
        <form action="update_cours.php" method="POST">
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
            <input type="hidden" name="id_cours" value="<?php echo $row['id_cours']; ?>">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
<?php
    } else {
        echo "Aucun cour trouvé avec cet identifiant.";
    }
} else {
    echo "Identifiant du cour non spécifié.";
}
?>

          </div>
        </div>
       
      </div>
    </div>

  </section><!-- End Hero -->

  
 <?php require_once("partials/footer.php");?>