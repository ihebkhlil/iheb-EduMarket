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
        <form action="delete_confirm.php" method="POST"> 
            <h2>Voulez-vous vraiment supprimer le cour suivant ?</h2>
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
                        <td><?php echo $row['titre']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['categorie']; ?></td>
                        <td><?php echo $row['prix']; ?></td>
                        <td><?php echo $row['duree']; ?></td>
                    </tr>
                </tbody>
            </table> 
            <form action="delete_confirm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id_cours']; ?>">
            <button type="submit" class="btn btn-danger">Confirmer la suppression</button> 
            <a href="liste_cours.php" class="btn btn-secondary">Annuler</a>
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