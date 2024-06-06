<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Bootstrap</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="css/accueil.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/profil.css">

   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="accueil.php">
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
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cours.php">Cours et Tutoriel</a>
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
                        <a class="dropdown-item" href="#"></a>
                        <a class="dropdown-item" href="#" onclick="deconnexion()">Deconnexion</a>
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
        <div class="col-md-3">
            <img src="images/programmation-.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-9"> 
            <p>Ce cours vous initiera aux bases de la programmation avec Visual Basic .NET. Aucun prérequis n'est nécessaire, il n'est pas indispensable de connaître les langages de programmation bruts pour comprendre. Ce cours s'adresse à toute personne, de tout âge, du débutant à l'utilisateur confirmé désirant se mettre à jour avec les dernières technologies. Il comprend des exemples concrets et des exercices pratiques.</p>
            <a href="cours.php" class="btn btn-success">Lire plus...</a>
        </div>
    </div>
</div>

        <div class="container custom-container mb-4"> 
                <h1>Le management de projet</h1>
                <div class="row">
                    <div class="col-md-3">
                        <img src="images/management-de-projet.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <p>Le management de projets a révélé être la méthode la plus efficace pour livrer des produits dans le coût, le calendrier et les contraintes des ressources. Cette série intensive et pratique de cours fournit les compétences nécessaires pour que vos projets soient réalisés dans les délais et le budget tout en donnant aux futurs utilisateurs le produit qu'ils attendent. Vous obtiendrez une idée claire et pratique des bases de la gestion de projet et comment suivre irrévocablement et efficacement les projets de travail.</p> 
                        <button type="button" class="btn btn-success" >Lire plus...</button>
                    </div>
                </div>
        </div>
            <div class="container custom-container"> 
                <h1>L'Approche Par Compétences</h1>
                <div class="row">
                    <div class="col-md-3">
                        <img src="images/apc.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <p>L'approche par compétences est un apprentissage sur des mises en situation réelles ou professionnelles qui devront permettre à l'apprenant d'aborder un jour métiers dans ses différentes dimensions opérationnelles. Le formateur s'engage dans une classification des objectifs à atteindre, en allant du plus simple au plus complet. L'évaluation des apprentissages porte sur les comportements observables, elle peut être de type formatif, sommatif ou ipsatif.</p> 
                        <button type="button" class="btn btn-success" >Lire plus...</button>
                    </div>
                </div>
            </div>
            <div class="container custom-container"> 
                <h1>Les tests psychotechniques</h1>
                <div class="row">
                    <div class="col-md-3">
                        <img src="images/test.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <p>Les tests psychotechniques rassemblent plusieurs types de tests tels que des tests de culture générale et de personnalité, mais aussi des tests plus modernes comme les tests d'observation, les énigmes logiques ou encore les matrices. Les tests psychotechniques sont des outils utilisés en psychologie du travail pour la sélection et l'orientation professionnelle. Ils consistent en une série de tests variés destinés à évaluer des aptitudes dans différents domaines comme la logique ou la mémoire.</p> 
                        <button type="button" class="btn btn-success" >Lire plus...</button>
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
            <div class="container custom-container"> 
    <form action="#" method="post">
        <div class="upper-container">
            <div class="image-container">
               <img src="images/profil.jpg" />
            </div>
         </div>
         <div class="lower-container">
            <div>
               <h3>Foulen Ben Foulen</h3>
            </div>
            <br>
            <div>
               <p>Ici, vous trouverez des ressources précieuses pour vos études, des conseils pratiques, 
                des opportunités de networking, et des événements à ne pas manquer. 
               </p>
            </div>
         </div>
        
    </form>
</div>


            <div class="container custom-container bg-blue"> 
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/programmation.png" alt="Description de l'image" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h2 class="text-white">Algorithme</h2>
                        <p class="text-white">L'algorithme est un terme d'origine arabe comme algèbre</p>
                    </div>
                </div>
            </div>
            <div class="container custom-container"> 
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/Java.png" alt="Description de l'image" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h2 class="text-primary">Java</h2>
                        <p class="text-primary">Java est un langage de programmation objet et fortement type:</p>
                    </div>
                </div>
            </div>
            <div class="container custom-container bg-blue"> 
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/android.png" alt="Description de l'image" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h2 class="text-white">Android</h2>
                        <p class="text-white">Android est un système d'exploitation développé par une petite entreprise en Califormie, aux États Unis.</p>
                    </div>
                </div>
            </div>
            <div class="container custom-container"> 
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/vb.png" alt="Description de l'image" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h2 class="text-primary">vb</h2>
                        <p class="text-primary">VB.Net: Ce cours va vous initier aux hates du Visual Basic, ce qui est tout de même normal quand on sadresse à des Zéros</p>
                    </div>
                </div>
            </div>
            <div class="container custom-container bg-blue"> 
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/Bootstrap1.png" alt="Description de l'image" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h2 class="text-white">bootstrap</h2>
                        <p class="text-white">Bootstrap est un ensemble d'outils gratuits permettant de créer des pages Web...</p>
                    </div>
                </div>
            </div>
            <div class="container custom-container"> 
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/XAML.jpg" alt="Description de l'image" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h2 class="text-primary">Xaml</h2>
                        <p class="text-primary">XAML est un langage d'interface utilisateur graphique universel pour les applications Web riches (RIA)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<footer class="text-light py-4" style="background-color: #d9edf6;">
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
<script>
    function deconnexion() {
        // Rediriger vers index.php
        window.location.href = 'index.php';
    }
</script>
</body>
</html>
