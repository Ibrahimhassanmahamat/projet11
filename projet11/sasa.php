<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION['form_data'])) {
    echo "Aucune donnée disponible.";
    exit;
}

$data = $_SESSION['form_data'];

$message = "";

// Si un formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['modifier'])) {
        // Ne rien faire ici, on affiche le formulaire plus bas
    } elseif (isset($_POST['annuler'])) {
        session_destroy();
        $message = "
        <div class='message error-message'>
            ❌ Réservation annulée avec succès.
        </div>";
    } elseif (isset($_POST['enregistrer_modifications'])) {
        foreach ($_POST as $key => $value) {
            if ($key !== 'enregistrer_modifications') {
                $_SESSION['form_data'][$key] = htmlspecialchars(trim($value));
            }
        }
        $data = $_SESSION['form_data'];
        $message = "
        <div class='message success-message'>
            ✅ Réservation mise à jour avec succès !
        </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="rat.css">
    <title>Modifier la réservation</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
            padding: 40px;
            text-align: center;
        }

        h2 {
            color: #2c3e50;
        }

        .dashboard {
            margin: auto;
            max-width: 800px;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .submit-button {
            padding: 12px 25px;
            background-color: #009688;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s ease;
        }

        .submit-button:hover {
            background-color: #00796b;
        }

        .error-message {
            color:rgb(12, 230, 34);
            background-color: #fdecea;
            border: 1px solid #e0b4b4;
            padding: 15px;
            margin: 20px 0;
            border-radius: 10px;
            font-weight: bold;
        }

        .success-message {
            color: #2ecc71;
            background-color: #eafaf1;
            border: 1px solid #b7e1cd;
            padding: 15px;
            margin: 20px 0;
            border-radius: 10px;
            font-weight: bold;
        }

        .message {
            animation: fade-in 0.6s ease-in-out;
        }

        @keyframes fade-in {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<div class="dashboard">
    <h2>Gérer votre réservation</h2>
    <?= $message ?>

    <?php if ($_SERVER['REQUEST_METHOD'] !== 'POST' || isset($_POST['modifier'])): ?>
        <?php if (!isset($_POST['modifier']) && !isset($_POST['enregistrer_modifications'])): ?>
            <!-- Affichage des deux boutons -->
            <form method="POST">
                <button type="submit" name="modifier" class="submit-button">Modifier la réservation</button>
                <button type="submit" name="annuler" class="submit-button" style="background-color: #e74c3c;">Annuler la réservation</button>
            </form>
        <?php else: ?>
            <!-- Formulaire de modification -->
            <div class="form-container">
                <form method="POST">
                    <table>
                        <thead>
                            <tr>
                                <th>Champ</th>
                                <th>Valeur</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $champ => $valeur): ?>
                                <tr>
                                    <td><strong><?= ucfirst($champ) ?></strong></td>
                                    <td>
                                        <input 
                                            type="<?= is_numeric($valeur) ? 'number' : (filter_var($valeur, FILTER_VALIDATE_EMAIL) ? 'email' : 'text') ?>" 
                                            name="<?= htmlspecialchars($champ) ?>" 
                                            value="<?= htmlspecialchars($valeur) ?>" 
                                            required
                                        >
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <button type="submit" name="enregistrer_modifications" class="submit-button">Enregistrer les modifications</button>
                </form>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>

</body>
</html>
