<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre - Alietude</title>
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  </head>
<body>
    <nav class="nav">
        <div class="nav__logo">
          <a href="index.html"><img src="image/logo.png" alt="Logo du centre d'étude"></a>
        </div>
      
        <button class="nav__toggle" aria-label="Ouvrir le menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>
    

        <ul class="nav__list"> 
            <li>
                <div class="search-container">
                    <button class="search-btn" aria-label="Rechercher">
                        <img src="images/loupe_751381.png" alt="bouton d'ouverture de la bar de recherche">
                    </button>
                    <input type="text" class="search-input" placeholder="Rechercher...">
                  </div>
                  
                  
            </li>
            <li><a href="services.html">Nos Services</a></li>
            <li><a href="tarif.html">Tarifs</a></li>
            <li><a href="apropos.html">À propos</a></li>
            <li><a href="#">Exercice</a></li>
            <li><a href="#">Cours</a></li>
        </ul>
      </nav>

      <main class="tarif">
        <section class="tarif-section">
            <h2>Tarif Annuel</h2>
            <div class="tarif-container">
              <div class="tarif-card">
                <h3>Primaire</h3>
                <div class="sous-offre">
                  <p><strong>2h/semaine :</strong> 1000€/an</p>
                  <p><strong>4h/semaine :</strong> 1800€/an</p>
                </div>
                <button class="tarif-button">
                    <a href="contact.html">Démarrer maintenant</a>
                </button>
              </div>
              <div class="tarif-card">
                <h3>Collège</h3>
                <div class="sous-offre">
                  <p><strong>2h/semaine :</strong> 1200€/an</p>
                  <p><strong>4h/semaine :</strong> 2000€/an</p>
                </div>
                <button class="tarif-button">
                    <a href="contact.html">Démarrer maintenant</a>
                </button>
              </div>
              <div class="tarif-card">
                <h3>Lycée</h3>
                <div class="sous-offre">
                  <p><strong>2h/semaine :</strong> 1400€/an</p>
                  <p><strong>4h/semaine :</strong> 2200€/an</p>
                </div>
                <button class="tarif-button">
                    <a href="contact.html">Démarrer maintenant</a>
                </button>
              </div>
            </div>
          </section>

          <section class="tarif-section">
            <h2>Tarif Mensuel</h2>
            <div class="tarif-container">
              <div class="tarif-card">
                <h3>Primaire</h3>
                <div class="sous-offre">
                  <p><strong>2h/semaine :</strong> 90€/mois</p>
                  <p><strong>4h/semaine :</strong> 160€/mois</p>
                </div>
                <button class="tarif-button">
                    <a href="contact.html">Démarrer maintenant</a>
                </button>
              </div>
              <div class="tarif-card">
                <h3>Collège</h3>
                <div class="sous-offre">
                  <p><strong>2h/semaine :</strong> 110€/mois</p>
                  <p><strong>4h/semaine :</strong> 180€/mois</p>
                </div>
                <button class="tarif-button">
                    <a href="contact.html">Démarrer maintenant</a>
                </button>
              </div>
              <div class="tarif-card">
                <h3>Lycée</h3>
                <div class="sous-offre">
                  <p><strong>2h/semaine :</strong> 130€/mois</p>
                  <p><strong>4h/semaine :</strong> 200€/mois</p>
                </div>
                <button class="tarif-button">
                    <a href="contact.html">Démarrer maintenant</a>
                </button>
              </div>
            </div>
          </section>

          <section class="tarif-section">
            <h2>Tarif Vacancier</h2>
            <div class="tarif-container">
              <div class="tarif-card">
                <h3>Primaire</h3>
                <div class="sous-offre">
                  <p><strong>2h/semaine :</strong> 60€/semaine</p>
                  <p><strong>4h/semaine :</strong> 110€/semaine</p>
                </div>
                <button class="tarif-button">
                    <a href="contact.html">Démarrer maintenant</a>
                </button>
              </div>
              <div class="tarif-card">
                <h3>Collège</h3>
                <div class="sous-offre">
                  <p><strong>2h/semaine :</strong> 70€/semaine</p>
                  <p><strong>4h/semaine :</strong> 120€/semaine</p>
                </div>
                <button class="tarif-button">
                    <a href="contact.html">Démarrer maintenant</a>
                </button>
              </div>
              <div class="tarif-card">
                <h3>Lycée</h3>
                <div class="sous-offre">
                  <p><strong>2h/semaine :</strong> 80€/semaine</p>
                  <p><strong>4h/semaine :</strong> 130€/semaine</p>
                </div>
                <button class="tarif-button">
                    <a href="contact.html">Démarrer maintenant</a>
                </button>
              </div>
            </div>
          </section>
          
          
      </main>
      
      <footer class="site-footer">
        <div class="footer__content">
          <p><strong>Adresse :</strong> 12 rue des Savoirs, 75000 Paris</p>
          <p><strong>Téléphone :</strong> 01 23 45 67 89</p>
          <p><strong>Email :</strong> contact@alietude.fr</p>
          <a href="#" class="footer__link">Mentions légales</a>
        </div>
      </footer>

      <script src="script.js"></script>

      </body>
      </html>