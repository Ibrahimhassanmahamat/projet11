<?php
session_start();

if (!empty($_POST)) {
    if (
        isset($_POST["nom"], $_POST["email"], $_POST["password"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["password"])
    ) {
        $nom = strip_tags($_POST["nom"]);
        $email = trim($_POST["email"]);
        $passwordInput = $_POST["password"];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["utilisateur"]["erreur"] = "Adresse email invalide.";
            header("Location: seconnecter.php");
            exit();
        }

        include "connexion.php";

        // Vérifie si l'utilisateur existe déjà
        $sql = "SELECT * FROM utilisateur WHERE email = :email";
        $requete = $db->prepare($sql);
        $requete->bindValue(":email", $email);
        $requete->execute();
        $utilisateur = $requete->fetch();

        if ($utilisateur) {
            // Utilisateur existe → vérifier mot de passe
            if (password_verify($passwordInput, $utilisateur["password"])) {
                // Connexion réussie
                $_SESSION["utilisateur"] = [
                    "id" => $utilisateur["id"],
                    "nom" => $utilisateur["nom"],
                    "email" => $utilisateur["email"],
                    "message" => "Connecté avec succès !"
                ];
                header("Location: accueil.php");
                exit();
            } else {
                // Utilisateur existe mais mauvais mot de passe → empêcher l’accès
                $_SESSION["utilisateur"]["erreur"] = "Mot de passe incorrect. Vous ne pouvez pas créer un nouveau compte avec cette adresse email.";
                header("Location: seconnecter.php");
                exit();
            }
        } else {
            // Utilisateur inexistant → autoriser la création
            $password = password_hash($passwordInput, PASSWORD_BCRYPT);
            $sql = "INSERT INTO utilisateur (nom, email, password) VALUES (:nom, :email, :password)";
            $requete = $db->prepare($sql);
            $requete->bindValue(":nom", $nom, PDO::PARAM_STR);
            $requete->bindValue(":email", $email, PDO::PARAM_STR);
            $requete->bindValue(":password", $password, PDO::PARAM_STR);

            if ($requete->execute()) {
                $id = $db->lastInsertId();
                $_SESSION["utilisateur"] = [
                    "id" => $id,
                    "nom" => $nom,
                    "email" => $email,
                    "message" => "Compte créé et connecté avec succès !"
                ];
                header("Location: accueil.php");
                exit();
            } else {
                $_SESSION["utilisateur"]["erreur"] = "Erreur lors de la création du compte.";
                header("Location: creer_compte.php");
                exit();
            }
        }
    } else {
        $_SESSION["utilisateur"]["erreur"] = "Veuillez remplir tous les champs.";
        header("Location: seconnecter.php");
        exit();
    }
}
?>
<?php include "header.php"; ?>

<div class="container">
    <form method="post" id="formulaire">
        <!-- Affichage du message d'erreur ou de succès -->
        <span style="color: red;">
            <?= $_SESSION["utilisateur"]["erreur"] ?? "" ?>
        </span>
        <span style="color: green;">
            <?= $_SESSION["utilisateur"]["message"] ?? "" ?>
        </span>
        <?php unset($_SESSION["utilisateur"]); ?>

        <div>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
        </div>

        <button type="submit">Créer un compte / Se connecter</button>

        <p><a href="#" onclick="motOublie()">Mot de passe oublié ?</a></p>
    </form>
</div>

<script>
function motOublie() {
    alert("Si vous avez oublié votre mot de passe, veuillez créer un nouveau compte avec une autre adresse email.");
}
</script>

<?php include "fooder.php"; ?>
