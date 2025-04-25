<?php
session_start();
require 'includes/db.php';
require 'includes/init.php';
?>
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
        <a href="index.php"><img src="image/logo.png" alt="Logo du centre d'étude"></a>
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
                    <img src="images/loupe_751381.png" alt="bouton d'ouverture de la barre de recherche">
                </button>
                <input type="text" class="search-input" placeholder="Rechercher...">
            </div>
        </li>
        <li><a href="services.php">Nos Services</a></li>
        <li><a href="tarif.php">Tarifs</a></li>
        <li><a href="apropos.php">À propos</a></li>
        <li><a href="#">Exercice</a></li>
        <li><a href="#">Cours</a></li>
        
        <?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
}?>
         <?php if (isset($_SESSION['email'])) : ?>
            <li>
                <a href="profil.php">
                    <img src="images/profil.jpg" alt="Profil" style="height: 30px; width: 30px; border-radius: 50%;">
                </a>
            </li>
        <?php else : ?>
            <li><a href="tools/login.php">Connexion</a></li>
        <?php endif; ?>

    </ul>
</nav>

      
      <header class="hero">
        <div class="hero__content">
          <h1 class="hero__title">Démarrez l'année sur une bonne note avec le Centre Aletude !</h1>
          <p class="hero__text">
            ALETUDE est un centre spécialisé dans le soutien scolaire, de la CP à la Terminale. Forts de plus de 8 ans d'expérience, nous avons accompagné plus de 500 élèves vers la réussite. N'hésitez pas à nous contacter pour plus d'informations.
          </p>
  
        </div>
      </header>

      <main>
            <section class="fixed-bg bg-1">
                <div class="bg-1__container">
                    <div class="bg-1__container-text">
                        <h1>Optimisez le parcours éducatif de votre enfant.</h1>
                        <p>Donnez à votre enfant les meilleures chances de réussite avec notre approche pédagogique personnalisée. En combinant des méthodes d’enseignement innovantes et un suivi individualisé, nous créons un environnement d’apprentissage stimulant et adapté aux besoins spécifiques de chaque élève. Notre objectif est de révéler leur plein potentiel et de les préparer pour un avenir brillant.</p>
                    </div>

                    <div class="bg-1__container-img">
                        <img src="images/illustration-bg1.svg" alt="">
                    </div>
                    </p>
                </div>
            </section>


            <section class="cards-section color-1">
                <div class="card">
                  <img src="images/card1.jpg" alt="Image 1">
                  <h1>Toutes les matières</h1>
                  <p>Votre enfant aura accès aux cours et fiches de révision des matières principales tout au long de l'année scolaire, lui permettant de se concentrer sur l'essentiel et de réviser à son rythme même quand il sera à la maison.</p>
                </div>
                <div class="card">
                  <img src="images/card2.jpg" alt="Image 2">
                  <h1>Exercice et Quiz interactif</h1>
                  <p>Les quiz et exercices, avec leur correction, seront dispnobiles tout au long de l'année scolaire, permettant à votre enfant de s'entrainer régulièrement et d'évaluer ses progrés.</p>
                </div>
                <div class="card">
                  <img src="images/card3.jpg" alt="Image 3">
                  <h1>Suivi du progrès</h1>
                  <p>L'évolution et le travail de votre enfant sur l'application seront suivis en continu tout au long de l'année, garantissant un suivi personnalisé et régulier de ses progrès.</p>
                </div>
                </section>

                <section class="fixed-bg parcoursupp">
                    <div class="info-parcoursupp">
                        <div class="info-parcoursupp__text">
                          <h2>Accompagnement Parcoursup</h2>
                          <p>Grâce à notre expertise dans l’accompagnement post-bac, nous aidons les élèves à construire un projet d’orientation solide, à maîtriser les outils de Parcoursup et à préparer les concours ou entretiens d’admission.</p>
                        </div>
                        <div class="info-parcoursupp__img">
                          <img src="images/illustration_parcoursupp.jpg" alt="Illustration Parcoursup">
                        </div>
                      </div>
                </section>

                <section class="fixed-bg stats-banner">
                    <h1>Alietude en quelques chiffres, c'est :</h1>
                  
                    <div class="stats-banner__grid">
                      <div class="stat-item">
                        <h2>+500</h2>
                        <p><strong>élèves inscrits</strong></p>
                      </div>
                      <div class="stat-item">
                        <h2>+8 ans</h2>
                        <p><strong>d'expérience</strong></p>
                      </div>
                      <div class="stat-item">
                        <h2>Bac +3</h2>
                        <p><strong>à Bac +8 pour nos enseignants</strong></p>
                      </div>
                      <div class="stat-item">
                        <h2>4 à 5</h2>
                        <p><strong>séances par étude</strong></p>
                      </div>
                    </div>
                  </section>
                  

                  <section class="faq">
                    <h2 class="faq__title">Foire aux questions</h2>
                    <div class="faq__item">
                      <button class="faq__question">Quels niveaux sont concernés ?</button>
                      <div class="faq__answer">
                        <p>Nous accompagnons les élèves du CP à la Terminale, toutes filières confondues.</p>
                      </div>
                    </div>
                    <div class="faq__item">
                      <button class="faq__question">Où sont situés vos centres ?</button>
                      <div class="faq__answer">
                        <p>Nous sommes présents dans plusieurs villes, contactez-nous pour connaître le centre le plus proche de chez vous.</p>
                      </div>
                    </div>
                    <div class="faq__item">
                      <button class="faq__question">Proposez-vous des cours en ligne ?</button>
                      <div class="faq__answer">
                        <p>Oui, nous proposons également un accompagnement en ligne via une plateforme dédiée.</p>
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