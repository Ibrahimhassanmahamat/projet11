<?php
session_start();

$conn = new mysqli("localhost", "root", "", "ibrah");
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

$error = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $mot_de_passe = $_POST['mot_de_passe'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "❌ Adresse email invalide.";
    } elseif (strlen($mot_de_passe) < 6) {
        $error = "❌ Le mot de passe doit contenir au moins 6 caractères.";
    } else {
        $stmt = $conn->prepare("SELECT mot_de_passe FROM admin WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($hashed_password);
            $stmt->fetch();

            if (password_verify($mot_de_passe, $hashed_password)) {
                $_SESSION['email_admin'] = $email;
                header("Location:info_reservation.php");
                exit();
            } else {
                $error = "❌ Mot de passe incorrect.";
            }
        } else {
            $error = "❌ Email non trouvé.";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin</title>
    <style>
        /* Reset basique */
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }
        .login-container {
            background: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            width: 350px;
            text-align: center;
        }
        h2 {
            margin-bottom: 25px;
            color: #4a3fdb;
        }
        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 1.8px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #4a3fdb;
            outline: none;
        }
        input[type="submit"] {
            background-color: #4a3fdb;
            color: white;
            font-weight: 700;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #3827a6;
        }
        .error-message {
            color: #e74c3c;
            background-color: #fceae9;
            border: 1px solid #e74c3c;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Connexion Admin</h2>

    <?php if (!empty($error)): ?>
        <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($email); ?>">
        
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required>
        
        <input type="submit" value="Se connecter">
    </form>
</div>

</body>
</html>
