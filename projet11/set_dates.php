<?php
session_start();
if (!isset($_SESSION['email_admin'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date_debut = $_POST['date_debut'] ?? null;
    $date_fin = $_POST['date_fin'] ?? null;

    if ($date_debut && $date_fin && $date_debut <= $date_fin) {
        $pdo = new PDO("mysql:host=localhost;dbname=ibrah;charset=utf8", "root", "", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        // Supprime anciennes dates et insère la nouvelle plage
        $pdo->exec("DELETE FROM config_reservation");
        $stmt = $pdo->prepare("INSERT INTO config_reservation (date_debut, date_fin) VALUES (?, ?)");
        $stmt->execute([$date_debut, $date_fin]);

        $_SESSION['message'] = "Dates mises à jour avec succès.";
    } else {
        $_SESSION['message'] = "Dates invalides.";
    }
}

header("Location: gestion_reservations.php");
exit;
