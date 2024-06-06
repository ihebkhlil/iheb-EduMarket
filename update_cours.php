<?php
require_once('connexion/connexion.php');

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si toutes les données nécessaires sont présentes
    if (isset($_POST['id_cours']) && isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['categorie']) && isset($_POST['prix']) && isset($_POST['duree'])) {
        // Récupère les données du formulaire
        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $categorie = $_POST['categorie'];
        $prix = $_POST['prix'];
        $duree = $_POST['duree'];


        // Prépare la requête SQL de mise à jour
        $sql = "UPDATE cours SET titre = :titre, description = :description, categorie = :categorie, prix = :prix, duree = :duree WHERE titre = :titre";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':categorie', $categorie);
        $stmt->bindParam(':prix', $prix);
        $stmt->bindParam(':duree', $duree);

        // Exécute la requête
        if ($stmt->execute()) {
            // Rediriger vers une page de confirmation ou vers la liste des cours
            header("Location: cours_list.php");
            exit();
        } else {
            echo "Erreur lors de la mise à jour du cour.";
        }
    } else {
        echo "Toutes les données nécessaires n'ont pas été fournies.";
    }
} else {
    echo "Accès invalide à cette page.";
}
