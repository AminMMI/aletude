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

      <header class="hero-service">
        <div class="hero__content">
            <h1 class="hero__title">Nos services</h1>
            <p class="hero__text">Notre objectif : donner à votre enfant une formation enrichissante pour développer sa curiosité et ses compétences !</p>
        </div>
      </header>

      <section class="services">
        <div class="cards-section">
            <div class="card">
                <img src="images/illustration_devoir.jpg" alt="Service 1">
                <h2><strong>Aide aux devoirs</strong></h2>
                <ul class="card-list">
                    <li>Aide aux devoirs personnalisé pour maîtriser les compétences essentielles</li>
                    <li>Enseignants dédiés pour clarifier les concepts clés et renforcer la confiance en soi</li>
                    <li>Soutien continu pour aborder les défis académiques avec assurance</li>
                </ul>          
            </div>
      
            <div class="card">
                <img src="images/illustration_pogress.jpg" alt="Service 2">
                <h2><strong>Remise à niveau</strong></h2>
                <ul class="card-list">
                    <li>Remise à niveau personnalisée pour consolider les connaissances et renforcer les leçons non maîtrisées.</li>
                    <li>Enseignants expérimentés pour une compréhension approfondie des chapitres.</li>
                    <li>Objectif : permettre à chaque élève de progresser avec confiance et d'atteindre la réussite académique.</li>
                </ul>
            </div>
      
            <div class="card">
                <img src="images/illustration_stage.jpg" alt="Service 3">
                <h2><strong>Stages intensifs</strong></h2>
                <ul class="card-list">
                    <li>Stages intensifs pendant les vacances pour combler les lacunes, approfondir les connaissances ou prendre de l'avance.</li>
                    <li>Cours dynamiques et interactifs pour une préparation efficace.</li>
                    <li>Équipe qualifiée pour assurer une réussite scolaire optimale.</li>
                </ul>
            </div>
        </div>
      </section>

      <section class="testimonials">
        <h2 class="testimonials-title">Ils nous ont fait confiance</h2>
      
        <div class="testimonial-container">
          <div class="testimonial">
            <p>Prof au top il m’a énormément aidé pour mes examens cela fait maintenant deux ans que je suis en accompagnement avec lui je vous le conseille fortement !</p>
            <span>— Berfin Korkmaz</span>
          </div>
      
          <div class="testimonial">
            <p>On est super bien accueilli une aide au top dans les matières scientifiques et le français. Je recommande fortement !<br><br>Merci pour tout Ali</p>
            <span>— Lilian</span>
          </div>
      
          <div class="testimonial">
            <p>Ça fait 1 ans que j’y suis et je sens que j’ai vraiment progresser dans toute les matières en plus le professeur explique vraiment très bien mieux que des profs de collège et c’est un excellent endroit si vous avez besoin de progresser</p>
            <span>— Rayan Okh</span>
          </div>
      
          <div class="testimonial">
            <p>Professeur au top ! Cela fait maintenant 2 ans que je pratique des cours particuliers dans ce centre et grâce à mon professeur j’ai pu augmenter ma moyenne de 3 points. Toujours à l’écoute de ses élèves et prends le temps qu’il faut pour chacun d’entre nous.</p>
            <span>— Lou Rambour</span>
          </div>
        </div>
      </section>
      
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