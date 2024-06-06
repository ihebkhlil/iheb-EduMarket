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
        <form method="POST" enctype="multipart/form-data" action="reset_password.php">
            <h1>Forget Password</h1>
            <div class="coter" style="display:flex;">
                <input type="email" id="email_forget" name="email_forget" placeholder="Email" style="margin-left:5px;" required>
            </div>
            <!-- Ajouter un champ de saisie pour le code de vérification -->
            <input type="text" id="numéro_téléphone" name="numéro_téléphone" placeholder="numéro_téléphone" style="margin-top:10px;" required>
            <button type="submit" name="forget_submit">Submit</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-right">
                <h1>Hello, Friend!</h1>
                <p>If you've forgotten your password, don't worry! You can reset it here. Please enter the email address associated with your account, and we'll send you instructions on how to reset your password.</p>
                <button class="hidden" id="">Sign Up</button>
            </div>
        </div>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>
