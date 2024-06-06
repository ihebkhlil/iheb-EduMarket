
<?php  
require_once('connexion/connexion.php');

// Vérifier si l'identifiant de l'étudiant est passé en paramètre Post
if (isset($_POST['id'])) {
    $id = $_POST['id'];

        // Préparez votre requête SQL pour récupérer les détails de l'étudiant
        $sql = "DELETE  FROM cours WHERE id_cours = :id"; 
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        

        // Vérifiez s'il y a un résultat
        if ($stmt-> execute()) { 
            header("location : liste_cours.php");
            exit(); 
        } else { 
            echo "erreur lors de la suppression de l'étudiant."; 
        }
} else { 
    echo "l'identifiant d'étudiant non spécifié.";
}
        // Affichez les détails de l'étudiant dans un formulaire pour l'édition
?>
       