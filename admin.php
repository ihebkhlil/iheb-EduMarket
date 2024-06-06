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

   <style>
        .nabar ul {
            list-style-type: none;
            padding: 0;
        }
        .nabar li {
            background-color: white;
            margin: 5px 0;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .nabar a {
            color: black ;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        footer {
            background-color: #d9edf6;
            position: fixed;
            width: 100%;
            bottom: 0;
            padding: 10px 0;
        }

        .footer-icons img {
            width: 25px;
            height: 25px;
            margin: 0 5px;
        }

        .footer-text {
            color: #86b4d5;
        }
    </style>
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
                        <a class="dropdown-item" href="index.php" onclick="deconnexion()">Deconnexion</a>
                    </div>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
<br>
    <div class="container">
        <h1>Liste des Éléments</h1>
        <div class="nabar">
        <ul>
            <li><a href="utilisateur1.php">Liste des utilisateurs</a></li>
            <li><a href="cours_list.php">Liste des cours</a></li>
            
            
        </ul>
        </div>
    </div>
        


    <footer class="text-light py-4">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 text-center">
                <ul class="list-inline footer-icons">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/"><img src="images/facebook.png" alt="Facebook"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.gmail.com/"><img src="images/gmail.png" alt="Email"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.Twitter.com/"><img src="images/Twitter.png" alt="Twitter"></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com/"><img src="images/youtube.png" alt="YouTube"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 text-center">
                <p class="footer-text">Copyright © 2016 apcpedagogie</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
</body>
</html>
