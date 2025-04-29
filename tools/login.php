<?php
session_start();
require '../includes/db.php';

if (isset($_POST['envoi'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['password']);

        $recupUser = $db->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
        $recupUser->execute([$email, $mdp]);

        if ($recupUser->rowCount() > 0) {
            $user = $recupUser->fetch();
            $_SESSION['user'] = [
                'id' => $user['id'],
                'nom' => $user['nom'],
                'prenom' => $user['prenom'],
                'email' => $user['email'],
                'profil_pic' => $user['profil_pic'],
                'password' => $user['password']
            ];
            header('Location: ../index.php');
            exit();
        } else {
            echo "Identifiants incorrects.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre - Alietude</title>
    <link href="../style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
<nav class="nav">
    <div class="nav__logo">
        <a href="../index.php"><img src="image/logo.png" alt="Logo du centre d'étude"></a>
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
                    <img src="../images/loupe_751381.png" alt="bouton d'ouverture de la barre de recherche">
                </button>
                <input type="text" class="search-input" placeholder="Rechercher...">
            </div>
        </li>
        <li><a href="../services.php">Nos Services</a></li>
        <li><a href="../tarif.php">Tarifs</a></li>
        <li><a href="../apropos.php">À propos</a></li>
        <li><a href="#">Exercice</a></li>
        <li><a href="#">Cours</a></li>
        
        <?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
}?>
         <?php if (isset($_SESSION['email'])) : ?>
            <li>
                <a href="../profil.php">
                    <img src="../images/profil.jpg" alt="Profil" style="height: 30px; width: 30px; border-radius: 50%;">
                </a>
            </li>
        <?php else : ?>
            <li><a href="tools/login.php">Connexion</a></li>
        <?php endif; ?>

    </ul>
</nav>

<main class="login">
  <h1>Connexion</h1>
  <h2>Pas de compte ? <a href="register.php">inscrivez vous !</a></h2>

  <?php if (!empty($errors)) : ?>
    <ul style="color: red;">
      <?php foreach ($errors as $error) : ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <form method="POST" action="" class="form-container">
    <input type="email" name="email" placeholder="Adresse mail" required><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br>
    <button type="submit" name="envoi">Se connecter</button>
  </form>
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
