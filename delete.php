<?php
session_start();
include("connexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['username'])) {
    $username = mysqli_real_escape_string($conn, $_SESSION['username']);

    $sql = "DELETE FROM login WHERE username = '$username'";
    if (mysqli_query($conn, $sql)) {
        session_destroy();  // Déconnexion après suppression
        echo "Ton compte a bien été supprimé.";
    } else {
        echo "Erreur lors de la suppression : " . mysqli_error($conn);
    }
} else {
    echo "Accès non autorisé.";
}
?>
