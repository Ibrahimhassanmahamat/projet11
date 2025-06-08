<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReservationCeremonie - Accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <h1>PRESTIGE EVENTS</h1>
                    <p>Ngaoundéré, Cameroun</p>
                </div>
                <ul class="nav-links">
                    <li><a href="index.php" class="active">Accueil</a></li>
                    <li><a href="a-propos.php">A propos</a></li>
                    <li><a href="#contacts">contact</a></li>
                    <li><a href="admin_login.php" class="btn-login">administrateurs</a></li>
                    <li><a href="inscription.php" class="btn-login">inscription</a></li>
                </ul>
                <div class="burger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
        <a href="https://wa.me/23567420457" target="_blank" title="Contactez-nous sur WhatsApp">
            <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp" style="width:50px; height:50px; position:fixed; bottom:20px; right:20px; z-index:1000; cursor:pointer;">
        </a>

    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h2>Réservez votre matériel de cérémonie en toute simplicité</h2>
                <p>Tentes, chaises, tables et couverts pour vos événements spéciaux à Ngaoundéré</p>
                <div class="hero-buttons">
                    <a href="inscription.php" class="btn-primary">Réserver maintenant</a>
                    <a href="popo.php" class="btn-secondary">Cathalogues</a>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2 class="section-title">Nos Services</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Réservation en ligne</h3>

                    
                    <p>Réservez votre matériel 24h/24 depuis notre plateforme sécurisée.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h3>Notifications</h3>
                    <p>Recevez des confirmations et rappels par SMS et email.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h3>Gestion flexible</h3>
                    <p>Modifiez ou annulez vos réservations à tout moment.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3>Paiement sécurisé</h3>
                    <p>Plusieurs méthodes de paiement disponibles et sécurisées.</p>
                </div>
            </div>
        </div>
    </section>


    
    <!--partie materiels-->
    <section class="materiel">
        <div class="container">
            <h2 class="section-title">Notre Matériel</h2>
            <div class="materiel-grid">
                    <div class="materiel-card">
                        <img src="images/te11.jpg" alt="Tente de cérémonie">
                        <h3>Tentes</h3>
                        <p>Différentes tailles disponibles pour s'adapter à votre événement.</p>
                    </div>
              
                <div class="materiel-card">
                    <img src="images/ch12.jpg" alt="Chaises">
                    <h3>Chaises</h3>
                    <p>Chaises confortables et élégantes pour vos invités.</p>
                </div>
                <div class="materiel-card">
                    <img src="images/t13.jpg" alt="Tables">
                    <h3>Tables</h3>
                    <p>Tables rondes et rectangulaires de différentes tailles.</p>
                </div>
                <div class="materiel-card">
                    <img src="images/c12.jpg" alt="Couverts">
                    <h3>Couverts</h3>
                    <p>Services complets pour vos repas de cérémonie.</p>
                </div>
            </div>
        </div>
    </section>

    <footer >
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>PRESTIGE EVENT</h3>
                    <p>Plateforme de réservation de matériel pour cérémonies à Ngaoundéré.</p>
                </div>
                <div class="footer-col">
                    <h3>Liens rapides</h3>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="inscription.php">Réservation</a></li>
                        <li><a href="dashboard.php">Mon compte</a></li>
                    </ul>
                </div>
                <div  class="footer-col">
                    <h3>Contact</h3>
                    <ul id=contacts>
                        <li><i class="fas fa-map-marker-alt"></i> Ngaoundéré</li>
                        <li><i class="fas fa-phone"></i> +237 692 77 97 58</li>
                        <li><i class="fas fa-envelope"></i> prestigeevent@gmail.com</li>
                        <li><i class="fas fa-phone"></i> +237 672 19 12 87</li>
                        <li><i class="fas fa-envelope"></i> tibrahassanmahamatgmail.com</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Suivez-nous</h3>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/23567420457"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 ReservationCeremonie. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

  
</body>
</html>