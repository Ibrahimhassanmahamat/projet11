<?php
session_start();
if(!empty($_POST)){

    if(isset($_POST["email"], $_POST["password"]) && !empty($_POST["email"]) && !empty($_POST["password"])){

        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

           //die("Adress email invalide");
            $_SESSION["utilisateur"]=[
            "erreur" => "adresse email invalide",
        ];
        header("location:reservation.php");
        exit();
 

        }

        include "connexion.php";

        $sql = "SELECT * FROM utilisateur WHERE email = :email ";

        $requete = $db->prepare($sql);

        $requete->bindValue(":email", $_POST["email"]);

        $requete->execute();

        $resulta = $requete->fetch(PDO::FETCH_ASSOC);

        if(!$resulta){

            //die("adresse / mot de passe incorrect");
            $_SESSION["utilisateur"]=[
            "erreur" => "adresse email invalide",
        ];
        header("location:reservation.php");
        exit();
 

        }

        if(!password_verify($_POST["password"], $resulta["password"])){

            //die("adresse / mot de passe incorrect");
            $_SESSION["utilisateur"]=[
            //"erreur" => "mot de passe incorrect",
        ];
        header("location:reservation.php");
        exit();
 

        }

        $_SESSION["utilisateur"] = [
            "id" => $resulta["id"],
            "nom" => $resulta["nom"],
            "email" => $resulta["email"]
        ];

        header("location:reservation.php");

    }else{
       // die("formulaire incomplet");
        $_SESSION["utilisateur"]=[
            "erreur" => "fomulaire incomplet",
        ];
        header("location:reservation.php");
        exit();
 
    }
}


include "header.php";


//include "navbar.php";
?>
    <div class="container">
        <form method="post">
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="passe">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">valider</button>
            <p><a href="inscription.php">inscription</a></p>
        </form>
    </div>
<?php
include "fooder.php";

