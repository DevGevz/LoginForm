<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
</head>
<body>
    <h1>Bienvenue <?= htmlspecialchars($username) ?> !</h1>

    <button class="delete-btn">Supprimer mon compte</button>

    <script>
        const deleteBtn = document.querySelector('.delete-btn');
    deleteBtn.addEventListener('click', () => {
        if (confirm("Veux-tu vraiment supprimer ton compte ?")) {
            fetch('delete.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'delete=1'
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                window.location.href = "index.php";
            })
            .catch(err => {
                alert("Erreur : " + err);
            });
        }
    });

    </script>
</body>
</html>
