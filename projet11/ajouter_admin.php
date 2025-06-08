<?php
$conn = new mysqli("localhost", "root", "", "ibrah");

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

$email = "tibrahassanmahamat@gmail.com";
$mot_de_passe = "565623";
$hashed_password = password_hash($mot_de_passe, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO admin (email, mot_de_passe) VALUES (?, ?)");
if ($stmt) {
    $stmt->bind_param("ss", $email, $hashed_password);

    if ($stmt->execute()) {
        echo "✅ Administrateur ajouté avec succès.";
    } else {
        echo "❌ Erreur d'exécution : " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "❌ Erreur de préparation de requête : " . $conn->error;
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #4b6cb7, #182848);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            width: 350px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .login-container label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .login-container input[type="submit"] {
            width: 100%;
            background-color: #4b6cb7;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container input[type="submit"]:hover {
            background-color: #3a52a0;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Connexion Admin</h2>
    <?php if ($error): ?>
        <div class="error-message"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="POST" action="">
        <label>Email :</label>
        <input type="email" name="email" required>
        
        <label>Mot de passe :</label>
        <input type="password" name="mot_de_passe" required>
        
        <input type="submit" value="Se connecter">
    </form>
</div>

</body>
</html>
