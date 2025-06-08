<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: info_admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord admin</title>
</head>
<body>
    <h1>Bienvenue, administrateur</h1>
    <a href="logout.php">Déconnexion</a>
</body>
</html>
