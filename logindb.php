<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edumarket";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    $sql = "SELECT * FROM utilisateur WHERE email = '$email' AND mot_de_passe = '$mot_de_passe'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        header("Location: http://localhost//iheb-EduMarket/accueil.php");
        exit();
    } else {
        echo "<script>alert('Invalid email or password!'); window.location.href = 'http://localhost//iheb-EduMarket/index.php';</script>";
        exit();
    }
}

mysqli_close($conn);
?>
