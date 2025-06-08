<?php
session_start();

// Vérifie si les données de réservation sont disponibles
if (!isset($_SESSION['reservation'])) {
    echo "<h2>Aucune réservation trouvée. Veuillez remplir le formulaire d'abord.</h2>";
    echo "<a href='reservation.php'>Retour au formulaire</a>";
    exit();
}

$data = $_SESSION['reservation'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord - Réservation</title>
    <link rel="stylesheet" href="reservation2.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
        h1 {
            text-align: center;
        }
        .btns {
            text-align: center;
            margin-top: 30px;
        }
        .btns button {
            margin: 0 10px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>

<h1>Tableau de bord de votre réservation</h1>

<table>
    <tr><th>Champ</th><th>Valeur</th></tr>
    <?php foreach ($data as $champ => $valeur): ?>
        <tr>
            <td><?= htmlspecialchars(ucwords(str_replace("_", " ", $champ))) ?></td>
            <td><?= htmlspecialchars($valeur) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<div class="btns">
    <button onclick="location.href='modifier_reservation.php'">Modifier ma réservation</button>
    <button onclick="location.href='reservation.php'">Nouvelle réservation</button>
    <button onclick="location.href='succes.html'">Retour</button>
</div>

</body>
</html>
