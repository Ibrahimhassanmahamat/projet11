<?php
session_start();
$data = $_SESSION['reservation'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier la réservation</title>
</head>
<body>
    <form method="post" action="traitement_reservation.php">
        <p>Nom : <input type="text" name="nom" value="<?= htmlspecialchars($data['nom'] ?? '') ?>" required></p>
        <p>Prénom : <input type="text" name="prenom" value="<?= htmlspecialchars($data['prenom'] ?? '') ?>" required></p>
        <!-- Ajoute ici les autres champs pré-remplis de la même façon -->
        <input type="submit" value="Modifier la réservation">
    </form>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['form_data'])) {
    echo "Aucune réservation à modifier.";
    exit;
}

$data = $_SESSION['form_data'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier votre réservation</title>
</head>
<body>
    <h2>Modifier votre réservation</h2>
    <form method="post" action="traitement_modification.php">
        <?php foreach ($data as $champ => $valeur): ?>
            <label><?= ucfirst($champ) ?> :</label><br>
            <input type="text" name="<?= $champ ?>" value="<?= htmlspecialchars($valeur) ?>"><br><br>
        <?php endforeach; ?>
        <input type="submit" value="Mettre à jour">
    </form>
</body>
</html>
