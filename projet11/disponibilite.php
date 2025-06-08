<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disponibilités - ReservationCeremonie</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <h1>ReservationCeremonie</h1>
                    <p>Ngaoundéré, Cameroun</p>
                </div>
                <ul class="nav-links">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="disponibilite.php" class="active">Disponibilités</a></li>
                    <li><a href="reservation.php">Réservation</a></li>
                    <li><a href="dashboard.php">Mon compte</a></li>
                    <li><a href="connexion.php" class="btn-login">Connexion</a></li>
                </ul>
                <div class="burger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <section class="disponibilite-hero">
        <div class="container">
            <h1>Consultez les disponibilités</h1>
            <p>Vérifiez la disponibilité de notre matériel pour vos dates d'événement</p>
        </div>
    </section>

    <section class="disponibilite-form">
        <div class="container">
            <div class="form-container">
                <form id="disponibiliteForm">
                    <div class="form-group">
                        <label for="date">Date de l'événement</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type de matériel</label>
                        <select id="type" name="type">
                            <option value="all">Tout le matériel</option>
                            <option value="tente">Tentes</option>
                            <option value="chaise">Chaises</option>
                            <option value="table">Tables</option>
                            <option value="couvert">Couverts</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-primary">Vérifier disponibilité</button>
                </form>
            </div>
        </div>
    </section>

    <section class="disponibilite-results">
        <div class="container">
            <h2 class="section-title">Résultats de disponibilité</h2>
            <div class="results-grid" id="resultsContainer">
                <!-- Les résultats seront injectés ici par JavaScript -->
                <div class="no-results">
                    <i class="fas fa-calendar-alt"></i>
                    <p>Sélectionnez une date pour voir les disponibilités</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <!-- Même footer que index.html -->
    </footer>

    <script src="js/main.js"></script>
    <script src="js/reservation.js"></script>
</body>
</html>