<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styless.css" rel="stylesheet" />
    </head>
    <body>
        
        <!-- Header-->
        <header class="bg-light py-5">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h2 class="fw-bolder">Get in touch</h2>
                    <p class="lead mb-0">Us for you</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                    <?php
                            // Insérez votre code PHP ici
                            session_start();
        
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "edumarket";
        
                            // Établir une connexion à la base de données
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
        
                            // Vérifier la connexion
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
        
                            // Vérifier si le formulaire a été soumis
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Récupérer l'e-mail et le code de vérification soumis
                                $email = $_POST["email_forget"];
                                $numéro_téléphone = $_POST["numéro_téléphone"];
        
                                // Requête SQL pour vérifier si l'e-mail et le code de vérification correspondent à une entrée dans la table utilisateur
                                $sql = "SELECT * FROM utilisateur WHERE email = '$email' AND numéro_téléphone = '$numéro_téléphone'";
                                $result = mysqli_query($conn, $sql);
        
                                // Vérifier s'il y a des résultats
                                if (mysqli_num_rows($result) > 0) {
                                    // Récupérer les données de l'utilisateur
                                    $user_data = mysqli_fetch_assoc($result);
        
                                    // Créer un message avec les coordonnées de l'utilisateur
                                    $message = "";

                                    $message .= "<p>Nom: " . $user_data["nom"] . "</p>";
                                    $message .= "<p>Prénom: " . $user_data["prenom"] . "</p>";
                                    $message .= "<p>Email: " . $user_data["email"] . "</p>";
                                    $message .= "<p>Mot de passe: " . $user_data["mot_de_passe"] . "</p>";

                                    // Afficher le message
                                    echo $message;

                                    // Ajout du bouton Next pour rediriger vers index.php
                                } else {
                                    echo '<script>alert("Aucun utilisateur trouvé avec cet e-mail et ce code de vérification.");';
                                    // Redirection vers la page précédente
                                    echo 'window.history.back();</script>';
                                }
                            }
        
                            // Fermer la connexion à la base de données
                            mysqli_close($conn);
                            ?>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="index.php">Next</a>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        
        
       
        
        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
   
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
