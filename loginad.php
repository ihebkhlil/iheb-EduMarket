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
    echo "(''-è(-è(--(-((-_(-è(-";
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM admin WHERE password = '$password' AND email = '$email'  ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        header("Location: http://localhost//iheb-EduMarket/admin.php");
        exit();
    } else {
        echo "<script>alert('Invalid username or password!'); window.location.href = 'http://localhost//iheb-EduMarket/index.php';</script>";
        exit();
    }
}

mysqli_close($conn);
?>
