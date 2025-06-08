<?php
// Informations de connexion à la base de données
$host = 'localhost'; // Remplacez par votre hôte
$dbname = 'ibrah'; // Remplacez par le nom de votre base de données
$username = 'root'; // Remplacez par votre nom d'utilisateur
$password = ''; // Remplacez par votre mot de passe

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configuration des options PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des données du formulaire
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    $genre = filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $pays = filter_input(INPUT_POST, 'pays', FILTER_SANITIZE_STRING);
    $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
    $ville = filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_STRING);
    $tentes = filter_input(INPUT_POST, 'tentes', FILTER_SANITIZE_NUMBER_INT);
    $chaises = filter_input(INPUT_POST, 'chaises', FILTER_SANITIZE_NUMBER_INT);
    $tables = filter_input(INPUT_POST, 'tables', FILTER_SANITIZE_STRING);
    $couverts = filter_input(INPUT_POST, 'couverts', FILTER_SANITIZE_NUMBER_INT);
    $ville_des = filter_input(INPUT_POST, 'ville_des', FILTER_SANITIZE_STRING);
    $classe = filter_input(INPUT_POST, 'classe', FILTER_SANITIZE_STRING);
    $date_demande = filter_input(INPUT_POST, 'date_demande', FILTER_SANITIZE_STRING);
    $style = filter_input(INPUT_POST, 'style', FILTER_SANITIZE_STRING);
    $mode_paie = filter_input(INPUT_POST, 'mode_paie', FILTER_SANITIZE_STRING);
    $tel_paie = filter_input(INPUT_POST, 'tel_paie', FILTER_SANITIZE_STRING);

    // Préparation de la requête SQL
    $sql = "INSERT INTO reservations (nom, prenom, age, genre, email, pays, tel, ville, tentes, chaises, tables, couverts, ville_des, classe, date_demande, style, mode_paie, tel_paie) 
            VALUES (:nom, :prenom, :age, :genre, :email, :pays, :tel, :ville, :tentes, :chaises, :tables, :couverts, :ville_des, :classe, :date_demande, :style, :mode_paie, :tel_paie)";

    // Préparation de la déclaration
    $stmt = $pdo->prepare($sql);

    // Liaison des valeurs
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pays', $pays);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':ville', $ville);
    $stmt->bindParam(':tentes', $tentes);
    $stmt->bindParam(':chaises', $chaises);
    $stmt->bindParam(':tables', $tables);
    $stmt->bindParam(':couverts', $couverts);
    $stmt->bindParam(':ville_des', $ville_des);
    $stmt->bindParam(':classe', $classe);
    $stmt->bindParam(':date_demande', $date_demande);
    $stmt->bindParam(':style', $style);
    $stmt->bindParam(':mode_paie', $mode_paie);
    $stmt->bindParam(':tel_paie', $tel_paie);

    // Exécution de la requête
    $stmt->execute();
    session_start();
$_SESSION['form_data'] = [
    'nom' => $nom,
    'prenom' => $prenom,
    'age' => $age,
    'genre' => $genre,
    'email' => $email,
    'pays' => $pays,
    'tel' => $tel,
    'ville' => $ville,
    'tentes' => $tentes,
    'chaises' => $chaises,
    'tables' => $tables,
    'couverts' => $couverts,
    'ville_des' => $ville_des,
    'classe' => $classe,
    'date_demande' => $date_demande,
    'style' => $style,
    'mode_paie' => $mode_paie,
    'tel_paie' => $tel_paie
];


    // Redirection vers une page de succès (facultatif)
    header('Location: succes.html');
    exit();

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
<?php
session_start();

if (!isset($_SESSION['form_data'])) {
    echo "Aucune donnée disponible.";
    exit;
}

$data = $_SESSION['form_data'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord - Réservation</title>
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

        .show-button {
            padding: 15px 30px;
            font-size: 1rem;
            background-color: #009688;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: none; /* Masqué par défaut */
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #009688;
            color: white;
        }
    </style>
    <script>
        function afficherInfos() {
            document.getElementById('infosTable').style.display = 'table';
        }
    </script>
</head>
<body>

<div class="dashboard">
    <h2>Tableau de bord - Réservation client</h2>
    <button class="show-button" onclick="afficherInfos()">Afficher</button>

    <table id="infosTable">
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
                    <td><?= htmlspecialchars($valeur) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
<?php
