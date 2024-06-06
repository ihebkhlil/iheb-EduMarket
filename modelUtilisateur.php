<?php
include '../config.php';
include '../class Utilisateur.php';

class utilisateur
{
    // Function to create a new user
    function create($nom, $prenom, $email)
    {
        $sql = "INSERT INTO utilisateur (nom, prenom, email) VALUES (:nom, :prenom, :email)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(array(':nom' => $nom, ':prenom' => $prenom, ':email' => $email));
            return true;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Function to update an existing user
    function update($id_user, $nom, $prenom, $email)
    {
        $sql = "UPDATE utilisateur SET nom = :nom, prenom = :prenom, email = :email WHERE id_utilisateur = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(array(':nom' => $nom, ':prenom' => $prenom, ':email' => $email, ':id' => $id_user));
            return true;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Function to delete a user
    function delete($id_user)
    {
        $sql = "DELETE FROM utilisateur WHERE id_utilisateur = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(array(':id' => $id_user));
            return true;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
?>
