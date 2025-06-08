<?php
// a_propos.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>À propos - Réservation de Cérémonies à Ngaoundéré</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      font-family: 'Segoe UI', sans-serif;
      color: #333;
      overflow-x: hidden;
    }

    .hero {
      background-image: url('images/1746468945966.jpg'); /* Image à adapter */
      height: 50vh; /* Hauteur réduite */
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Filtre sombre */
      z-index: 1;
    }

    .hero h1 {
      position: relative;
      color: #fff;
      font-size: 2.5rem;
      z-index: 2;
      text-align: center;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
      animation: fadeIn 2s ease-in-out;
    }
    .hero {
  height: 50vh;
  background-image: url('images/1746468945966.jpg');
  background-size: cover;
  background-repeat: repeat-y;
  animation: scrollBackground 1s linear infinite;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

    .container {
      max-width: 960px;
      margin: 50px auto;
      padding: 30px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      animation: slideUp 1s ease-in-out;
    }

    .about h2 {
      color: #009688;
      text-align: center;
      margin-bottom: 20px;
    }

    .about p {
      font-size: 1.2rem;
      line-height: 1.7;
      text-align: center;
      color: #555;
    }

    .cta-button {
      display: block;
      width: fit-content;
      margin: 30px auto 0;
      padding: 14px 30px;
      background-color: #009688;
      color: #fff;
      font-size: 1.1rem;
      border: none;
      border-radius: 30px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .cta-button:hover {
      background-color: #00796B;
    }

    footer {
      background-color: #009688;
      color: #fff;
      text-align: center;
      padding: 20px;
      font-size: 0.95rem;
      margin-top: 40px;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes slideUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
        padding: 0 10px;
      }

      .about p {
        font-size: 1rem;
        padding: 0 10px;
      }
    }
  </style>
</head>
<body>

  <!-- Image de fond réduite -->
  <div class="hero">
    <h1>Bienvenue à Réservervation de Cérémonie Ngaoundéré</h1>
  </div>
  <div>
    <h1>PRESTIGE EVENT</h1>
  </div>

  <!-- Contenu principal -->
  <div class="container">
    <section class="about">
      <h2>À propos de notre service</h2>
      <p>
        Réservervation de Cérémonie est une application intuitive qui facilite la location de <strong>tentes, tables, chaises</strong> et tout équipement de cérémonie à Ngaoundéré.
      </p>
      <p>
        Que ce soit pour un mariage, un baptême ou un anniversaire, notre plateforme vous permet de réserver rapidement, en toute sécurité, depuis chez vous.
      </p>
      <a href="inscription.php" class="cta-button">Réservez maintenant</a>
    </section>
  </div>

  <!-- Pied de page -->
  <footer>
    &copy; 2025 Réservation de Cérémonie - Ngaoundéré. Tous droits réservés.
  </footer>

  <script>
    document.querySelector('.cta-button').addEventListener('click', function() {
      alert("Merci pour votre confiance ! Vous serez redirigé(e)...");
    });
  </script>

</body>
</html>
