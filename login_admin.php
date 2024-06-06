<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login APC</title>
</head>
<body>
<div class="container" id="container">
    <div class="form-container forget-password">
    <form action="loginad.php" method="post" enctype="multipart/form-data">
    <img src="images/logo1.png" alt="Zone de connexion" class="title">
    
        <div class="form-group">
            <label for="email"></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
        </div>
        <div class="form-group">
            <label for="password"> </label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
        </div>
        <button type="submit" class="button">Login</button>
        
    </form>
    </div>

    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-right">
                <h1>Hello, Friend!</h1>
                <p>Register with your personal details to use all of site features</p>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>