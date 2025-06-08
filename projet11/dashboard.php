<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte - ReservationCeremonie</title>
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
                    <li><a href="a-propos.php">A propos</a></li>
                    <li><a href="inscription.php">Réservation</a></li>
                    <li><a href="dashboard.php" class="active">Mon compte</a></li>
                    <li><a href="deconnecter.php" class="btn-logout">Déconnexion</a></li>
                </ul>
                <div class="burger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <section class="dashboard-hero">
        <div class="container">
            <h1>Mon Tableau de Bord</h1>
            <p>Gérez vos réservations et vos informations personnelles</p>
        </div>
    </section>

    <section class="dashboard-content">
        <div class="container">
            <div class="dashboard-grid">
                <aside class="dashboard-sidebar">
                    <div class="user-profile">
                        <div class="user-avatar">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="user-info">
                            <h3>Jean Dupont</h3>
                            <p>Membre depuis: Jan 2025</p>
                        </div>
                    </div>
                    <nav class="dashboard-menu">
                        <ul>
                            <li><a href="#reservations" class="active"><i class="fas fa-calendar-alt"></i> Mes réservations</a></li>
                            <li><a href="#profile"><i class="fas fa-user"></i> Mon profil</a></li>
                            <li><a href="#notifications"><i class="fas fa-bell"></i> Notifications</a></li>
                            <li><a href="#settings"><i class="fas fa-cog"></i> Paramètres</a></li>
                        </ul>
                    </nav>
                </aside>

                <main class="dashboard-main">
                    <section id="reservations" class="dashboard-section active">
                        <h2>Mes Réservations</h2>
                        <div class="reservations-list">
                            <div class="reservation-card">
                                <div class="reservation-header">
                                    <h3>Réservation #RC20250001</h3>
                                    <span class="status confirmed">Confirmée</span>
                                </div>
                                <div class="reservation-details">
                                    <div class="detail">
                                        <span class="label">Date:</span>
                                        <span class="value">15 Juin 2025</span>
                                    </div>
                                    <div class="detail">
                                        <span class="label">Événement:</span>
                                        <span class="value">Mariage</span>
                                    </div>
                                    <div class="detail">
                                        <span class="label">Matériel:</span>
                                        <span class="value">2 tentes, 50 chaises, 10 tables, 5 couverts</span>
                                    </div>
                                    <div class="detail">
                                        <span class="label">Total:</span>
                                        <span class="value">125,000 FCFA</span>
                                    </div>
                                </div>
                                <div class="reservation-actions">
                                    <button class="btn-action view"><i class="fas fa-eye"></i> Détails</button>
                                    <button class="btn-action modify"><i class="fas fa-edit"></i> Modifier</button>
                                    <button class="btn-action cancel"><i class="fas fa-times"></i> Annuler</button>
                                    <button class="btn-action print"><i class="fas fa-print"></i> Imprimer</button>
                                </div>
                            </div>

                            <div class="reservation-card">
                                <div class="reservation-header">
                                    <h3>Réservation #RC20250002</h3>
                                    <span class="status pending">En attente</span>
                                </div>
                                <div class="reservation-details">
                                    <div class="detail">
                                        <span class="label">Date:</span>
                                        <span class="value">20 Juillet 2025</span>
                                    </div>
                                    <div class="detail">
                                        <span class="label">Événement:</span>
                                        <span class="value">Anniversaire</span>
                                    </div>
                                    <div class="detail">
                                        <span class="label">Matériel:</span>
                                        <span class="value">1 tente, 30 chaises, 5 tables</span>
                                    </div>
                                    <div class="detail">
                                        <span class="label">Total:</span>
                                        <span class="value">75,000 FCFA</span>
                                    </div>
                                </div>
                                <div class="reservation-actions">
                                    <button class="btn-action view"><i class="fas fa-eye"></i> Détails</button>
                                    <button class="btn-action modify"><i class="fas fa-edit"></i> Modifier</button>
                                    <button class="btn-action cancel"><i class="fas fa-times"></i> Annuler</button>
                                </div>
                            </div>

                            <div class="reservation-card">
                                <div class="reservation-header">
                                    <h3>Réservation #RC20250003</h3>
                                    <span class="status cancelled">Annulée</span>
                                </div>
                                <div class="reservation-details">
                                    <div class="detail">
                                        <span class="label">Date:</span>
                                        <span class="value">10 Mai 2025</span>
                                    </div>
                                    <div class="detail">
                                        <span class="label">Événement:</span>
                                        <span class="value">Baptême</span>
                                    </div>
                                    <div class="detail">
                                        <span class="label">Matériel:</span>
                                        <span class="value">1 tente, 20 chaises, 4 tables, 2 couverts</span>
                                    </div>
                                    <div class="detail">
                                        <span class="label">Total:</span>
                                        <span class="value">65,000 FCFA</span>
                                    </div>
                                </div>
                                <div class="reservation-actions">
                                    <button class="btn-action view"><i class="fas fa-eye"></i> Détails</button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="profile" class="dashboard-section">
                        <h2>Mon Profil</h2>
                        <form class="profile-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" id="prenom" name="prenom" value="Jean">
                                </div>
                                <div class="form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" id="nom" name="nom" value="Dupont">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="jean.dupont@example.com">
                            </div>
                            <div class="form-group">
                                <label for="telephone">Téléphone</label>
                                <input type="tel" id="telephone" name="telephone" value="+237 6XX XXX XXX">
                            </div>
                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <textarea id="adresse" name="adresse" rows="3">123 Avenue de l'Indépendance, Ngaoundéré</textarea>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn-primary">Mettre à jour</button>
                            </div>
                        </form>
                    </section>

                    <section id="notifications" class="dashboard-section">
                        <h2>Notifications</h2>
                        <div class="notifications-list">
                            <div class="notification-card unread">
                                <div class="notification-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="notification-content">
                                    <h3>Réservation confirmée #RC20250001</h3>
                                    <p>Votre réservation pour le 15 Juin 2025 a été confirmée. Montant payé: 125,000 FCFA.</p>
                                    <span class="notification-time">Il y a 2 jours</span>
                                </div>
                            </div>
                            <div class="notification-card">
                                <div class="notification-icon">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                                <div class="notification-content">
                                    <h3>Paiement reçu #RC20250002</h3>
                                    <p>Nous avons reçu votre paiement de 75,000 FCFA pour la réservation #RC20250002.</p>
                                    <span class="notification-time">Il y a 1 semaine</span>
                                </div>
                            </div>
                            <div class="notification-card">
                                <div class="notification-icon">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="notification-content">
                                    <h3>Rappel: Événement à venir</h3>
                                    <p>N'oubliez pas votre réservation #RC20250001 dans 3 jours.</p>
                                    <span class="notification-time">Il y a 2 semaines</span>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="settings" class="dashboard-section">
                        <h2>Paramètres</h2>
                        <form class="settings-form">
                            <div class="form-group">
                                <label for="language">Langue</label>
                                <select id="language" name="language">
                                    <option value="fr" selected>Français</option>
                                    <option value="en">English</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="notifications-email">Notifications par email</label>
                                <div class="toggle-switch">
                                    <input type="checkbox" id="notifications-email" name="notifications-email" checked>
                                    <label for="notifications-email"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="notifications-sms">Notifications par SMS</label>
                                <div class="toggle-switch">
                                    <input type="checkbox" id="notifications-sms" name="notifications-sms">
                                    <label for="notifications-sms"></label>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn-primary">Enregistrer les paramètres</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
        </div>
    </section>

    <footer>
        <!-- Même footer que index.html -->
    </footer>

    <script src="js/main.js"></script>
    <script src="js/dashboard.js"></script>
</body>
</html>