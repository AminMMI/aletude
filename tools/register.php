<?php 
session_start();
require '../includes/db.php';
if(isset($_POST['inscription'])){
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['mdp'])) {
      $nom = htmlspecialchars($_POST['nom']);
      $prenom = htmlspecialchars($_POST['prenom']);
      $email = htmlspecialchars($_POST['email']);
      $password = sha1($_POST['mdp']);
      $insertUser = $db->prepare('INSERT INTO users(nom, prenom, email, password)VALUES(?, ?, ?, ?)');
      $insertUser->execute(array($nom, $prenom, $email, $password));
      
      $recupUser = $db->prepare('SELECT * FROM users WHERE email = ? AND nom = ? AND prenom = ? AND password = ?');
$recupUser->execute(array($email, $nom, $prenom, $password));

      if($recupUser->rowCount() > 0){
          $_SESSION['email'] = $email;
          $_SESSION['nom'] = $nom;
          $_SESSION['prenom'] = $prenom;
          $_SESSION['password'] = $password;
          $_SESSION['id_users'] = $recupUser->fetch()['id_users'];
          header(header: 'Location: ../index.php');
        }


    } else {
      echo "Veuillez complétez tous les champs du formulaire";
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
                <a href="profil.php">
                    <img src="../images/profil.jpg" alt="Profil" style="height: 30px; width: 30px; border-radius: 50%;">
                </a>
            </li>
        <?php else : ?>
            <li><a href="tools/login.php">Connexion</a></li>
        <?php endif; ?>

    </ul>
</nav>
<main class="login">
    <h1>Inscription</h1>
    <h2>Déjà un compte ? <a href="login.php">Connectez vous !</a></h2>
    <form method="POST" action="" class="form-container">
        <input type="text" name="nom" placeholder="Nom" autocomplete="off" required>
        <input type="text" name="prenom" placeholder="Prénom" autocomplete="off" required>
        <input type="email" name="email" placeholder="Email" autocomplete="off" required>
        <input type="password" name="mdp" placeholder="Mot de passe" autocomplete="off" required>
        <button type="submit" name="inscription">S'inscrire</button>
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