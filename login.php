<?php
include("connexion.php");
session_start();  // Toujours au début pour démarrer la session

if (isset($_POST["submit"])) {
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['username'] = $username;  // Stocke le nom dans la session
        header("Location: welcome.php");
        exit();
    } else {
        echo '<script>
            alert("Login failed. Invalid username or password!");
            window.location.href = "index.php";
        </script>';
    }
}
?>
