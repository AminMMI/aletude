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
            <li><a href="services.php">Nos Services</a></li>
            <li><a href="tarif.php">Tarifs</a></li>
            <li><a href="apropos.php">À propos</a></li>
            <li><a href="#">Exercice</a></li>
            <li><a href="#">Cours</a></li>

        </ul>
      </nav>

      <main>
        <section class="a-propos">
            <h1>A propos de nous</h1>
          
            <div class="a-propos-photos">
              <img src="images/photo1.jpg" alt="Photo du centre 1">
              <img src="images/photo2.jpg" alt="Photo du centre 2">
            </div>
          
            <h2>Notre centre</h2>
            <p>
              ALETUDE est un centre spécialisé dans le soutien scolaire, de la CP à la Terminale. Forts de plus de 8 ans d'expérience et de l'accompagnement de plus de 500 élèves, nous nous engageons à améliorer la réussite scolaire de votre enfant. Grâce à notre équipe d'experts, chaque élève bénéficie d'un soutien personnalisé pour atteindre ses objectifs académiques. Pour plus d'informations, n'hésitez pas à nous contacter.
            </p>
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
