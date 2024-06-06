<?php
class Utilisateur
{
    private ?int $id_utilisateur = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $email = null;
    private ?string $mot_de_passe = null;
    private ?string $adresse = null;
    private ?string $ville = null;
    private ?string $code_postal = null;
    private ?string $pays = null;

    public function __construct($id, $nom, $prenom, $email, $mot_de_passe, $adresse, $ville, $code_postal, $pays)
    {
        $this->id_utilisateur = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mot_de_passe = $mot_de_passe;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->code_postal = $code_postal;
        $this->pays = $pays;
    }

    /**
     * Get and set the value of id_utilisateur
     */
    public function getId_utilisateur()
    {
        return $this->id_utilisateur;
    }

    public function setId_utilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;
    }

    /**
     * Get and set the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get and set the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get and set the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get and set the value of mot_de_passe
     */
    public function getMot_de_passe()
    {
        return $this->mot_de_passe;
    }

    public function setMot_de_passe($mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;
    }

    /**
     * Get and set the value of adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * Get and set the value of ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * Get and set the value of code_postal
     */
    public function getCode_postal()
    {
        return $this->code_postal;
    }

    public function setCode_postal($code_postal)
    {
        $this->code_postal = $code_postal;
    }

    /**
     * Get and set the value of pays
     */
    public function getPays()
    {
        return $this->pays;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;
    }
}
?>