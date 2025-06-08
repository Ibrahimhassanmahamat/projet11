<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue Produits | Ustensiles Express</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="djam.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Navbar corrigée -->
    <nav class="navbar">
        <div class="container">
            <img src="images/logo.jpg" width="200px" height="200px">
            <h1>PRESTIGE EVENT</h1>
                    <div class="nav-container">
                
                        <ul class="nav-links">
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="Catalogue.php" class="active">Catalogue</a></li>
                            <li><a href="a-propos.php">À propos</a></li>
                            <li><a href="inscription.php">Reserver</a></li>
                            <li><a href="contact.php"></a></li>
                        </ul>
                        <div class="hamburger">
                            <div class="line"></div>
                            <div class="line"></div> 
                             <div class="line"></div>
                        </div>
                    </div>
            </div>
        </div>
    </nav>

    <!-- Catalogue Hero -->
    <section class="page-hero">
        <div class="container">
            <h1>Notre Catalogue Complet</h1>
            <p>Découvrez nos produits de qualité professionnelle</p>
        </div>
    </section>

    <!-- Catalogue Content -->
    <section class="catalogue">
        <div class="container">
            <!-- Filtres simplifiés -->
            <div class="catalogue-filters">
                <div class="filter-group">
                    <button class="filter-btn active" data-filter="all">Tous</button>
                    <button class="filter-btn" data-filter="tentes">Tentes</button>
                    <button class="filter-btn" data-filter="chaises">Chaises</button>
                    <button class="filter-btn" data-filter="tables">Tables</button>
                </div>
            </div>

            <!-- Grille de produits élargie -->
            <div class="products-grid">
                <div class="total-somme">
                    <h2><span>Somme totale : </span><span id="somme">0 FCFA</span></h2>
                </div>

                <!-- Tente 1 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te1.jpg"Tente professionnelle">
                    </div>
                    <div class="product-info">
                        <h3>Tente Professionnelle 4x6m</h3>
                        <p class="product-description">Tente robuste pour événements extérieurs</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>

                <!-- Tente 2 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te2.jpg" alt="Tente événementielle">
                    </div>
                    <div class="product-info">
                        <h3>Tente Événementielle 5x8m</h3>
                        <p class="product-description">Grande tente pour réceptions et mariages</p>
                        <div class="product-price">
                            <span class="price">10000</span>
                        </div>
                    </div>
                </div>

                <!-- Tente 3 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te3.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                 <!-- Tente 4 -->
                 <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te4.jpeg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                 <!-- Tente 5 -->
                 <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te5.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                 
                <!-- Tente 7 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te7.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                 
                <!-- Tente 23 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te23.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                 
                <!-- Tente 27 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te27.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                <!-- Tente 8 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te8.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                <!-- Tente 9 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te9.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                <!-- Tente 10 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te10.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                <!-- Tente 11 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te11.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                <!-- Tente 12 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te12.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                <!-- Tente 13 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te13.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                <!-- Tente 14 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te14.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                <!-- Tente 15 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te15.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                <!-- Tente 16 -->
                <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te16.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
                 <!-- Tente 17 -->
                 <div class="product-card" data-category="tentes">
                    <div class="product-image">
                        <img src="images/te17.jpg" alt="Tente de randonnée">
                    </div>
                    <div class="product-info">
                        <h3>Tente Randonnée</h3>
                        <p class="product-description">Légère et facile à monter</p>
                        <div class="product-price">
                            <span class="price">10000fcf</span>
                        </div>
                    </div>
                </div>
            

                <!-- Chaise 1 -->
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                   <img src="images/ch1.jpg" alt="">
                    </div>
                    <div class="product-info">
                        <h3>Chaise Pliante Renforcée</h3>
                        <p class="product-description">Support jusqu'à 150kg</p>
                        <div class="product-price">
                            <span class="price">1000cfc</span>
                        </div>
                    </div>
                </div>

                <!-- Chaise 2 -->
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                    <img src="images/ch2.jpg" alt="">
                    </div>
                    <div class="product-info">
                        <h3>Chaise Design Contemporaine</h3>
                        <p class="product-description">Style moderne pour réceptions</p>
                        <div class="product-price">
                            <span class="price">1ooofcf</span>
                        </div>
                    </div>
                </div>

                <!-- Chaise 9 -->
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch9.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>
                
                <!-- Chaise 10 -->
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch10.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>
                
                <!-- Chaise 11 -->
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch15.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>
                
                <!-- Chaise 12 -->
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch12.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>
                
                <!-- Chaise 13 -->
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch13.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>
                
                <!-- Chaise 14 -->
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch14.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>
                
                <!-- Chaise 15 -->
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch15.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>
                
                <!-- Chaise 16 -->
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch16.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span> 
                        </div>
                    </div>
                </div>
                
                <!-- Chaise 17 -->
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch17.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>
                
                <!-- Chaise 18 -->
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch18.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>

                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch4.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch5.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>  <div class="product-card" data-category="chaises">
                    <div class="product-image">
                       <img src="images/ch6.jpg" alt="">
                       </div>
                    <div class="product-info">
                        <h3>Chaise de Conférence</h3>
                        <p class="product-description">Confortable pour longues réunions</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>

                <!-- Table 1 -->
                <div class="product-card" data-category="tables">
                    <div class="product-image">
                        <img src="images/t1.jpg" alt="">
                    </div>
                    <div class="product-info">
                        <h3>Table Pliante 180cm</h3>
                        <p class="product-description">Pratique pour événements</p>
                        <div class="product-price">
                            <span class="price">5000fcf</span>
                        </div>
                    </div>
                </div>

                <!-- Table 2 -->
                <div class="product-card" data-category="tables">
                    <div class="product-image">
                        <img src="images/t2.jpg" alt="">
                    </div>
                    <div class="product-info">
                        <h3>Table Ronde 120cm</h3>
                        <p class="product-description">Pour 6-8 personnes</p>
                        <div class="product-price">
                            <span class="price">5000fcf</span>
                        </div>
                    </div>
                </div>

                <!-- Table 3 -->
                <div class="product-card" data-category="tables">
                    <div class="product-image">
                        <img src="images/t3.jpg" alt="">
                        </div>
                    <div class="product-info">
                        <h3>Table Rectangulaire 2m</h3>
                        <p class="product-description">Idéale pour buffets</p>
                        <div class="product-price">
                            <span class="price">5000fcf</span>
                        </div>
                    </div>
                </div>

                     <!-- Table 4 -->
                     <div class="product-card" data-category="tables">
                        <div class="product-image">
                            <img src="images/t4.jpg" alt="">
                            </div>
                        <div class="product-info">
                            <h3>Table Rectangulaire 2m</h3>
                            <p class="product-description">Idéale pour buffets</p>
                            <div class="product-price">
                                <span class="price">5000frs</span>
                            </div>
                        </div>
                    </div>

                         <!-- Table 5 -->
                         <div class="product-card" data-category="tables">
                            <div class="product-image">
                                <img src="images/t11.jpg" alt="">
                                </div>
                            <div class="product-info">
                                <h3>Table Rectangulaire 2m</h3>
                                <p class="product-description">Idéale pour buffets</p>
                                <div class="product-price">
                                    <span class="price">5000fcfs</span>
                                </div>
                            </div>
                        </div>


                             <!-- Table 6 -->
                     <div class="product-card" data-category="tables">
                        <div class="product-image">
                            <img src="images/t6.jpg" alt="">
                            </div>
                        <div class="product-info">
                            <h3>Table Rectangulaire 2m</h3>
                            <p class="product-description">Idéale pour buffets</p>
                            <div class="product-price">
                                <span class="price">5000fcf</span>
                            </div>
                        </div>
                    </div>
                      <!-- Table 7 -->
                      <div class="product-card" data-category="tables">
                        <div class="product-image">
                            <img src="images/t10.jpg" alt="">
                            </div>
                        <div class="product-info">
                            <h3>Table Rectangulaire 2m</h3>
                            <p class="product-description">Idéale pour buffets</p>
                            <div class="product-price">
                                <span class="price">5000fcfs</span>
                            </div>
                        </div>
                    </div>

                  <!-- Table 8 -->
                  <div class="product-card" data-category="tables">
                    <div class="product-image">
                        <img src="images/t14.jpg" alt="">
                        </div>
                    <div class="product-info">
                        <h3>Tables Rondes 2m</h3>
                        <p class="product-description">Idéale pour buffets</p>
                        <div class="product-price">
                            <span class="price">5000fcfs</span>
                        </div>
                    </div>
                </div>
                  <!-- Table 9 -->
                  <div class="product-card" data-category="tables">
                    <div class="product-image">
                        <img src="images/t11.jpg" alt="">
                        </div>
                    <div class="product-info">
                        <h3>Table Rectangulaire 2m</h3>
                        <p class="product-description">Idéale pour buffets</p>
                        <div class="product-price">
                            <span class="price">5000fcfs</span>
                        </div>
                    </div>
                </div>
                 <!-- Table 11 -->
                 <div class="product-card" data-category="tables">
                    <div class="product-image">
                        <img src="images/t12.jpg" alt="">
                        </div>
                    <div class="product-info">
                        <h3>Table Rectangulaire 2m</h3>
                        <p class="product-description">Idéale pour buffets</p>
                        <div class="product-price">
                            <span class="price">5000fcfs</span>
                        </div>
                    </div>
                </div>
                 <!-- Table 13 -->
                 <div class="product-card" data-category="tables">
                    <div class="product-image">
                        <img src="images/t13.jpg" alt="">
                        </div>
                    <div class="product-info">
                        <h3>Table Rectangulaire 2m</h3>
                        <p class="product-description">Idéale pour buffets</p>
                        <div class="product-price">
                            <span class="price">5000fcfs</span>
                        </div>
                    </div>
                </div>
                 <!-- Table 14 -->
                 <div class="product-card" data-category="tables">
                    <div class="product-image">
                        <img src="images/t14.jpg" alt="">
                        </div>
                    <div class="product-info">
                        <h3>Table Rectangulaire 2m</h3>
                        <p class="product-description">Idéale pour buffets</p>
                        <div class="product-price">
                            <span class="price">5000fcfs</span>
                        </div>
                    </div>
                </div>
                 <!-- Table 15 -->
                 <div class="product-card" data-category="tables">
                    <div class="product-image">
                        <img src="images/t15.jpg" alt="">
                        </div>
                    <div class="product-info">
                        <h3>Table Rectangulaire 2m</h3>
                        <p class="product-description">Idéale pour buffets</p>
                        <div class="product-price">
                            <span class="price">5000fcfs</span>
                        </div>
                    </div>
                </div>
             <!-- Table 16 -->
             <div class="product-card" data-category="tables">
                <div class="product-image">
                    <img src="images/t16.jpg" alt="">
                    </div>
                <div class="product-info">
                    <h3>Table Rectangulaire 2m</h3>
                    <p class="product-description">Idéale pour buffets</p>
                    <div class="product-price">
                        <span class="price">5000fcfs</span>
                    </div>
                </div>
            </div>
             <!-- Table 17 -->
             <div class="product-card" data-category="tables">
                <div class="product-image">
                    <img src="images/t17.jpg" alt="">
                    </div>
                <div class="product-info">
                    <h3>Table Rectangulaire 2m</h3>
                    <p class="product-description">Idéale pour buffets</p>
                    <div class="product-price">
                        <span class="price">5000fcfs</span>
                    </div>
                </div>
            </div>
             <!-- Table 18 -->
             <div class="product-card" data-category="tables">
                <div class="product-image">
                    <img src="images/t18.jpg" alt="">
                    </div>
                <div class="product-info">
                    <h3>Table Rectangulaire 2m</h3>
                    <p class="product-description">Idéale pour buffets</p>
                    <div class="product-price">
                        <span class="price">5000fcfs</span>
                    </div>
                </div>
            </div>
             <!-- Table 19 -->
             <div class="product-card" data-category="tables">
                <div class="product-image">
                    <img src="images/t19.jpg" alt="">
                    </div>
                <div class="product-info">
                    <h3>Table Rectangulaire 2m</h3>
                    <p class="product-description">Idéale pour buffets</p>
                    <div class="product-price">
                        <span class="price">5000fcfs</span>
                    </div>
                </div>
            </div>
             <!-- Table 20 -->
             <div class="product-card" data-category="tables">
                <div class="product-image">
                    <img src="images/t23.jpg" alt="">
                    </div>
                <div class="product-info">
                    <h3>Table Rectangulaire 2m</h3>
                    <p class="product-description">Idéale pour buffets</p>
                    <div class="product-price">
                        <span class="price">5000fcfs</span>
                    </div>
                </div>
            </div>
             <!-- Table 21 -->
             <div class="product-card" data-category="tables">
                <div class="product-image">
                    <img src="images/t23.jpg" alt="">
                    </div>
                <div class="product-info">
                    <h3>Table Rectangulaire 2m</h3>
                    <p class="product-description">Idéale pour buffets</p>
                    <div class="product-price">
                        <span class="price">5000fcfs</span>
                    </div>
                </div>
            </div>
 
               
             <!-- Chaise 19 -->
             <div class="product-card" data-category="chaises">
                <div class="product-image">
                    <img src="images/ch12.jpg" alt="Chaise empilable">
                </div>
                <div class="product-info">
                    <h3>Chaise Empilable</h3>
                    <p class="product-description">Gain de place, lot de 10</p>
                    <div class="product-price">
                        <span class="price">1000fcf</span>
                    </div>
                </div>
            </div>
                 <!-- Chaise 13 -->
                 <div class="product-card" data-category="chaises">
                    <div class="product-image">
                        <img src="images/ch14.jpg" alt="Chaise empilable">
                    </div>
                    <div class="product-info">
                        <h3>Chaise Empilable</h3>
                        <p class="product-description">Gain de place, lot de 10</p>
                        <div class="product-price">
                            <span class="price">1000fcf</span>
                        </div>
                    </div>
                </div>

                <!-- Table 4 -->
                <div class="product-card" data-category="tables">
                    <div class="product-image">
                        <img src="images/t9.jpg" alt="Table haute">
                    </div>
                    <div class="product-info">
                        <h3>Table Haute Bar</h3>
                        <p class="product-description">Pour espaces cocktails</p>
                        <div class="product-price">
                            <span class="price">5000fcf</span>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="tables">
                    <div class="product-image">
                        <img src="images/t23.jpg" alt="Table haute">
                    </div>
                    <div class="product-info">
                        <h3>Table Haute Bar</h3>
                        <p class="product-description">Pour espaces cocktails</p>
                        <div class="product-price">
                            <span class="price">5000fcf</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <a href="index.html" class="logo">Ustensiles<span>Express</span></a>
                    <p>Fournisseur professionnel depuis 2020</p>
                </div>
                <div class="footer-links">
                    <h3>Catégories</h3>
                    <ul>
                        <li><a href="catalogue.html?filter=tentes">Tentes</a></li>
                        <li><a href="catalogue.html?filter=chaises">Chaises</a></li>
                        <li><a href="catalogue.html?filter=tables">Tables</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Entreprise</h3>
                    <ul>
                        <li><a href="index.html#about">À propos</a></li>
                        <li><a href="index.html#contact">Contact</a></li>
                        <li><a href="reservation.html">Réservation</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h3>Réseaux sociaux</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 UstensilesExpress. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script>
        // Filtrage des produits
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const category = this.dataset.filter;
                const products = document.querySelectorAll('.product-card');
                
                products.forEach(product => {
                    if(category === 'all') {
                        product.style.display = 'block';
                    } else {
                        product.style.display = product.dataset.category === category ? 'block' : 'none';
                    }
                });
            });
        });

        // Applique le filtre au chargement si présent dans l'URL
        window.addEventListener('load', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const filter = urlParams.get('filter');
            
            if(filter && ['tentes', 'chaises', 'tables'].includes(filter)) {
                const btn = document.querySelector(`.filter-btn[data-filter="${filter}"]`);
                if(btn) btn.click();
            }
        });
    </script>
    <!-- Lien vers ton fichier JavaScript -->
    <script src="calcul.js"></script>
</body>
</html>