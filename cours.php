<?php
// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'edumarket';
$username = 'root';
$password = '';

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Impossible de se connecter à la base de données : " . $e->getMessage());
}

// Requête SQL pour récupérer les identifiants, titres et descriptions des cours
$sql = "SELECT id_cours, titre, description FROM cours";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$cours = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Bootstrap</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="css/accueil.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
                <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" fill="#8e9215"></path>
            </svg>
            <span style="color: #8e9215;">apc</span><span style="color:white;">pedagogie</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cours et Tutoriel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://apcpedagogie.com/blogapc-pedagogie-cours-en-ligne-autoformation/">Nos resoures</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://apcpedagogie.com/contactez-nous/">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Connexion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Register</a>
                        <a class="dropdown-item" href="#">Deconnexion</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
<div class="row">
<div class="col-md-8">

<div class="container custom-container mb-4"> 
                <h1>Les Cours de Programmation</h1>
                <div class="row">
                    <div class="col-md-9">
                        <p> - L’informatique est le domaine d’activité scientifique, technique et industriel concernant le traitement automatique de l’information par des machines telles que : calculateur, système embarqué, ordinateur, console de jeux vidéo, robot, automate, etc. [Wikipedia]</p>
                        <p> - Pourquoi de l’informatique ?
                        <p>*Outil scientifique incontournable sur la scène internationale</p>
 <p>*Domaine scientifique omniprésent</p>
 <p>*Science de communication, et source d’échanges scientifiques avec les autres disciplines</p>
 <p>*Vecteur de progrès technologiques, science de société</p>
 <p>*Une diversité thématique insoupçonnée </p>
 <br>
 <br>
 <p>- Les cours de programmation concernent les langages suivants :</p>
                    </div>
                </div>
            </div>

<div class="container custom-container mb-4">
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/python/"> <img src="https://apcpedagogie.com/wp-content/uploads/2019/04/Python-129x129.png" alt="Image"></a>
            <h3 class="text-dark"><a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/python/">Python</a></h3>
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/python/" class="btn btn-primary">Lire la suite...</a>
        </div>
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/dart/"> <img src="https://apcpedagogie.com/wp-content/uploads/2024/02/dart-1-150x150.png" alt="Image"></a>
            <h3 class="text-dark"><a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/dart/">Dart</a></h3>
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/dart/" class="btn btn-primary">Lire la suite...</a>
        </div>
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/flutter/"> <img src="https://apcpedagogie.com/wp-content/uploads/2021/12/flutter-1-150x150.jpg" alt="Image"></a>
            <h3 class="text-dark"><a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/flutter/">Flutter</a></h3>
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/flutter/" class="btn btn-primary">Lire la suite...</a>
        </div>
    
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
    
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/php/"> <img src="https://apcpedagogie.com/wp-content/uploads/2016/03/Php-256-129x129.png" alt="Image"></a>
            <h3 class="text-dark"><a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/php/">PHP</a></h3>
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/php/" class="btn btn-primary">Lire la suite...</a>
        </div>
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/symfony/"> <img src="https://apcpedagogie.com/wp-content/uploads/2024/02/symfony-1-150x150.png" alt="Image"></a>
            <h3 class="text-dark"><a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/symfony/">Symfony</a></h3>
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/symfony/" class="btn btn-primary">Lire la suite...</a>
        </div>
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/les-styles-css/"> <img src="https://apcpedagogie.com/wp-content/uploads/2016/03/Css-256-129x129.png" alt="Image"></a>
            <h3 class="text-dark"><a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/les-styles-css/">CSS</a></h3>
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/les-styles-css/" class="btn btn-primary">Lire la suite...</a>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/le-jquery/"> <img src="https://apcpedagogie.com/wp-content/uploads/2019/01/jQurery-129x129.png" alt="Image"></a>
            <h3 class="text-dark"><a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/le-jquery/">jQuery</a></h3>
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/le-jquery/" class="btn btn-primary">Lire la suite...</a>
        </div>
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/wordpress/"> <img src="https://apcpedagogie.com/wp-content/uploads/2016/12/Wordpress-129x129.png" alt="Image"></a>
            <h3 class="text-dark"><a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/wordpress/">WordPress</a></h3>
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/wordpress/" class="btn btn-primary">Lire la suite...</a>
        </div>
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/Le-html/"> <img src="https://apcpedagogie.com/wp-content/uploads/2016/03/HTML5-Logo-256-150x150.png" alt="Image"></a>
            <h3 class="text-dark"><a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/Le-html/">HTML</a></h3>
            <a href="https://apcpedagogie.com/cours-et-tutoriels/les_cours/cours-de-programmation/Le-html/" class="btn btn-primary">Lire la suite...</a>
        </div>
        
    </div>
</div>
</div>
</div>

<div class="col-md-4">
            <div class="container custom-container mb-4"> 
                <h2 class="title">Recherche</h2>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
            <div class="container custom-container mb-4">
        <h2 class="title">Sujets BAC</h2>
        <div class="input-group mb-3">
            <ul>
                <?php foreach ($cours as $cours_item): ?>
                    <li>
                        <a href="<?php echo htmlspecialchars($cours_item['description'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank">
                            <?php echo htmlspecialchars($cours_item['titre'], ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

</div>
</div>



<footer class="text-light py-4" style="background-color: #d9edf6;margin-top:10%; ">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-12 text-center">
          <ul class="list-inline">
            <a href="https://www.facebook.com/"><img src="images/facebook.png" alt="Facebook" style="width: 25px;height: 25px;"></a>
            <a href="https://www.gmail.com/"><img src="images/gmail.png" alt="Email" style="width: 25px;height: 25px;"></a>
            <a href="https://www.Twitter.com/"><img src="images/Twitter.png" alt="Twitter" style="width: 25px;height: 25px;"></a>
            <a href="https://www.youtube.com/"><img src="images/youtube.png" alt="YouTube" style="width: 25px;height: 25px;"></a>
          </ul>
        </div>
      </div>
      <div class="row justify-content-center align-items-center">
        <div class="col-md-12 text-center">
          <p style="color: #86b4d5;">Copyright © 2016 apcpedagogie</p>
        </div>
      </div>
    </div>
  </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
