<?php require_once("partials/navbar.php"); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-12 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Liste des utilisateurs</h1>
        <div data-aos="fade-up" data-aos-delay="600">
          <?php
            require_once('connexion/connexion.php');
            $limit = 5;
            $search = ""; 
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            if (isset($_GET['search']) && !empty($_GET['search'])) {
                $search = $_GET['search'];
            }
            if (!empty($search)) {
                $sql = "SELECT COUNT(*) AS total FROM utilisateur WHERE 
                        nom LIKE :search OR 
                        prenom LIKE :search OR
                        email LIKE :search OR
                        ville LIKE :search OR
                        pays LIKE :search";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
                $stmt->execute();
            } else {
                $sql = "SELECT COUNT(*) AS total FROM utilisateur";
                $stmt = $pdo->query($sql);
            }

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $total_pages = ceil($result['total'] / $limit);
            $offset = ($page - 1) * $limit;
            if (!empty($search)) {
                $sql = "SELECT * FROM utilisateur WHERE 
                        nom LIKE :search OR 
                        prenom LIKE :search OR
                        email LIKE :search OR
                        ville LIKE :search OR
                        pays LIKE :search
                        LIMIT :limit OFFSET :offset";
            } else {
                $sql = "SELECT * FROM Utilisateur LIMIT :limit OFFSET :offset";
            }

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
            if (!empty($search)) {
                $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
            }
            $stmt->execute();
          ?>

          <div class="row mb-1 bg-light">
            <div class="col-sm-3 col-lg-3">
              <a href="ajout_utilisateur.php" class="btn btn-outline-primary me-2">
                <i class="bi bi-plus bi-2x"></i>
                Ajouter un utilisateur
              </a>
            </div>
            <div class="col-sm-9 col-lg-9 d-flex justify-content-end">
              <form class="d-flex">
                <input class="form-control me-2" name="search" type="search" placeholder="Recherche..." aria-label="Search" value="<?php if (isset($search)) { echo htmlentities($search); } ?>">
                <button class="btn btn-outline-secondary" type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </form>
            </div>
          </div>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                // Récupération des résultats
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  echo "<tr>"; 
                  echo "<td>".$row["nom"]."</td>";
                  echo "<td>".$row["prenom"]."</td>";
                  echo "<td>".$row["email"]."</td>"; 
                  echo "<td>".$row["ville"]."</td>";
                  echo "<td>".$row["pays"]."</td>";
                  echo "<td>"; 
                  echo "<a href='edit_utilisateur.php?id=".$row['id_utilisateur']."'class='btn btn-outline-primary btn-sm'><i class='bi bi-pencil'></i></a>";
                  echo "<a href='delete_utilisateur.php?id=".$row['id_utilisateur']."'class='btn btn-outline-danger btn-sm'><i class='bi bi-trash'></i></a>";
                  echo "<a href='afficher_utilisateur.php?id=".$row['id_utilisateur']."'class='btn btn-outline-success btn-sm'><i class='bi bi-eye'></i></a>";
                  echo "</td>";
                  echo "</tr>";
                }
              ?>
            </tbody>
          </table>
          <!-- Pagination -->
          <div class="d-flex justify-content-center"> 
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <?php if ($page > 1): ?>
                  <li class="page-item"><a class="page-link" href="?search=<?php echo $search; ?>&page=<?php echo ($page - 1); ?>">&laquo; Précédent</a></li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                  <li class="page-item <?php if ($page == $i) echo 'active'; ?>"><a class="page-link" href="?search=<?php echo $search; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
                <?php if ($page < $total_pages): ?>
                  <li class="page-item"><a class="page-link" href="?search=<?php echo $search; ?>&page=<?php echo ($page + 1); ?>">Suivant &raquo;</a></li>
                <?php endif; ?>
              </ul>
            </nav>
          </div> 
        </div>
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<?php require_once("partials/footer.php"); ?>
