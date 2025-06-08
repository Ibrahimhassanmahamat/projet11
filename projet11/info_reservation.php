<?php
session_start();

// Connexion PDO
try {
    $pdo = new PDO("mysql:host=localhost;dbname=ibrah;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}

// Vérifie si l'utilisateur est admin
$is_admin = isset($_SESSION['email_admin']);

// POST pour insertion ou mise à jour
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Mise à jour par admin
    if ($is_admin && isset($_POST['id'])) {
        $id = intval($_POST['id']);
        $status = $_POST['status'] ?? 'En attente';

        // On autorise uniquement la modification du status par l'admin
        $stmt = $pdo->prepare("UPDATE reservations SET status = :status WHERE id = :id");
        $stmt->execute([':status' => $status, ':id' => $id]);

        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }

    // Nouvelle réservation utilisateur
    else {
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
        $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
        $tentes = filter_input(INPUT_POST, 'tentes', FILTER_SANITIZE_STRING);
        $chaises = filter_input(INPUT_POST, 'chaises', FILTER_SANITIZE_STRING);
        $tables = filter_input(INPUT_POST, 'tables', FILTER_SANITIZE_STRING);
        $couverts = filter_input(INPUT_POST, 'couverts', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'tel_paie', FILTER_SANITIZE_STRING);
        // ... Autres champs filtrés ...

        // On fixe date_demande à maintenant pour éviter manipulations utilisateur
        $date_demande = (new DateTime())->format('Y-m-d H:i:s');

        // Insertion avec date_demande automatique
        $stmt = $pdo->prepare("INSERT INTO reservations (nom, prenom,  tentes, chaises, tables, couverts, email,  date_demande, tel_paie, status) VALUES (:nom, :prenom, :tentes, :chaises, :tables, :couverts, :date_demande, :email, tel_paie, 'En attente')");
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':tentes' => $tentes,
            ':chaises' => $chaises,
            ':tables' => $tables,
            ':couverts' => $couverts,
            ':date_demande' => $date_demande,
            ':email' => $email,
            ':tel_paie' => $email
        ]);

        $_SESSION['message'] = "Réservation enregistrée avec succès.";
        header('Location: '.$_SERVER['PHP_SELF']);
        exit;
    }
}

// Pour affichage : liste réservations (admin) ou réservation session (utilisateur)
if ($is_admin) {
    $reservations = $pdo->query("SELECT * FROM reservations ORDER BY date_demande DESC")->fetchAll(PDO::FETCH_ASSOC);

    // Si demande d'édition par admin
    $edit_reservation = null;
    if (isset($_GET['edit_id'])) {
        $edit_id = intval($_GET['edit_id']);
        $stmt = $pdo->prepare("SELECT * FROM reservations WHERE id = :id");
        $stmt->execute([':id' => $edit_id]);
        $edit_reservation = $stmt->fetch(PDO::FETCH_ASSOC);
    }
} else {
    // Pour simplifier, on suppose que l'utilisateur connecté a un id stocké en session
    $user_id = $_SESSION['user_id'] ?? null;
    $user_reservation = null;
    if ($user_id) {
        $stmt = $pdo->prepare("SELECT * FROM reservations WHERE id = :id");
        $stmt->execute([':id' => $user_id]);
        $user_reservation = $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

function canUserModify($date_demande, $status) {
    $dateReservation = new DateTime($date_demande);
    $aujourdHui = new DateTime();
    $diff = $dateReservation->diff($aujourdHui)->days;
    return ($diff <= 7 && $status !== 'OK');
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Gestion Réservations</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f9f9f9; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #00695c; color: white; }
        .btn { background: #00695c; color: white; padding: 8px 12px; border: none; border-radius: 4px; cursor: pointer; }
        .btn:hover { background: #004d40; }
        .message { margin: 10px 0; padding: 10px; background: #dff0d8; border: 1px solid #d0e9c6; border-radius: 5px; }
        .warning { background: #f2dede; border-color: #ebccd1; color: #a94442; }
        form { max-width: 500px; background: white; padding: 20px; border-radius: 8px; }
        label { display: block; margin: 12px 0 4px; }
        input, select { width: 100%; padding: 6px; box-sizing: border-box; }
    </style>
</head>
<body>

<h1>Gestion des Réservations</h1>

<?php if (!empty($_SESSION['message'])): ?>
    <div class="message"><?= htmlspecialchars($_SESSION['message']) ?></div>
    <?php unset($_SESSION['message']); ?>
<?php endif; ?>

<?php if ($is_admin): ?>

    <?php if ($edit_reservation): ?>
        <!-- Formulaire édition réservation par admin -->
        <h2>Modifier réservation #<?= $edit_reservation['id'] ?></h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?= $edit_reservation['id'] ?>" />
            <p><strong>Nom:</strong> <?= htmlspecialchars($edit_reservation['nom']) ?></p>
            <p><strong>Prénom:</strong> <?= htmlspecialchars($edit_reservation['prenom']) ?></p>
            <p><strong>tentes:</strong> <?= htmlspecialchars($edit_reservation['tentes']) ?></p>
            <p><strong>chaises:</strong> <?= htmlspecialchars($edit_reservation['chaises']) ?></p>
            <p><strong>tables:</strong> <?= htmlspecialchars($edit_reservation['tables']) ?></p>
            <p><strong>couverts:</strong> <?= htmlspecialchars($edit_reservation['couverts']) ?></p>
            <p><strong>Date de demande:</strong> <?= htmlspecialchars($edit_reservation['date_demande']) ?></p>
            <p><strong>email:</strong> <?= htmlspecialchars($edit_reservation['email']) ?></p>
            <p><strong>Numero de paiement:</strong> <?= htmlspecialchars($edit_reservation['tel_paie']) ?></p>
            <label for="status">Statut de la réservation :</label>
            <select name="status" id="status">
                <option value="En attente" <?= $edit_reservation['status'] === 'En attente' ? 'selected' : '' ?>>En attente</option>
                <option value="OK" <?= $edit_reservation['status'] === 'OK' ? 'selected' : '' ?>>OK</option>
                <option value="Refusé" <?= $edit_reservation['status'] === 'Refusé' ? 'selected' : '' ?>>Refusé</option>
            </select>
            <br><br>
            <button class="btn" type="submit">Mettre à jour</button>
            <a href="<?= $_SERVER['PHP_SELF'] ?>" class="btn" style="background:#999;">Annuler</a>
        </form>

    <?php else: ?>
        <!-- Liste réservations -->
        <h2>Liste des réservations</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th><th>Nom</th><th>Prénom</th><th>Tentes</th><th>Chaises</th><th>Tables</th><th>Couverts</th><th>Date demande</th><th>Email</th><th>Numero de paiement</th><th>Status</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $res): ?>
                    <tr>
                        <td><?= $res['id'] ?></td>
                        <td><?= htmlspecialchars($res['nom']) ?></td>
                        <td><?= htmlspecialchars($res['prenom']) ?></td>
                        <td><?= htmlspecialchars($res['tentes']) ?></td>
                        <td><?= htmlspecialchars($res['chaises']) ?></td>
                        <td><?= htmlspecialchars($res['tables']) ?></td>
                        <td><?= htmlspecialchars($res['couverts']) ?></td>
                        <td><?= htmlspecialchars($res['date_demande']) ?></td>
                        <td><?= htmlspecialchars($res['email']) ?></td>
                        <td><?= htmlspecialchars($res['tel_paie']) ?></td>
                        <td>
                            <?= htmlspecialchars($res['status']) ?>
                            <?php if ($res['status'] === 'OK'): ?> ✅ <?php endif; ?>
                        </td>
                        <td>
                            <a href="?edit_id=<?= $res['id'] ?>" class="btn">Mettre à jour</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

<?php else: ?>

    <?php if ($user_reservation): ?>

        <h2>Votre réservation</h2>
        <p><strong>Nom:</strong> <?= htmlspecialchars($user_reservation['nom']) ?></p>
        <p><strong>Prénom:</strong> <?= htmlspecialchars($user_reservation['prenom']) ?></p>
        <p><strong>Date de demande:</strong> <?= htmlspecialchars($user_reservation['date_demande']) ?></p>
        <p><strong>Status:</strong> <?= htmlspecialchars($user_reservation['status']) ?>
            <?php if ($user_reservation['status'] === 'OK'): ?> ✅ <?php endif; ?>
        </p>

        <?php if (canUserModify($user_reservation['date_demande'], $user_reservation['status'])): ?>
            <button class="btn" onclick="alert('Ici tu peux mettre un formulaire pour modifier la réservation');">Modifier ma réservation</button>
        <?php else: ?>
            <p class="warning">⛔ Vous ne pouvez plus modifier cette réservation (plus de 7 jours ou validée).</p>
        <?php endif; ?>

    <?php else: ?>
        <p>Aucune réservation trouvée pour votre compte.</p>
    <?php endif; ?>

<?php endif; ?>

</body>
</html>
