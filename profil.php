<?php
session_start();
require 'includes/db.php';
require 'includes/init.php';
// Redirection si pas connecté
if (!isset($_SESSION['email'])) {
    header('Location: tools/login.php');
    exit();
}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
}

// Mise à jour des infos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_SESSION['user']['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    // Gestion de la photo de profil
    if (!empty($_FILES['profil_pic']['tmp_name'])) {
        $fileName = basename($_FILES['profil_pic']['name']);
        $targetPath = "uploads/" . $fileName;
        move_uploaded_file($_FILES['profil_pic']['tmp_name'], $targetPath);
    } else {
        $targetPath = $_SESSION['user']['profil_pic'];
    }

    $stmt = $db->prepare("UPDATE users SET nom = ?, prenom = ?, email = ?, profil_pic = ? WHERE id = ?");
    $stmt->execute([$nom, $prenom, $email, $targetPath, $id]);

    // Mise à jour de la session
    $_SESSION['user']['nom'] = $nom;
    $_SESSION['user']['prenom'] = $prenom;
    $_SESSION['user']['email'] = $email;
    $_SESSION['user']['profil_pic'] = $targetPath;

    echo "<p style='color:green'>Profil mis à jour !</p>";
}
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

<main>
<h1>Mon profil</h1>
<form method="post" enctype="multipart/form-data">
    <label>Nom</label><br>
    <input type="text" name="nom" value="<?= htmlspecialchars($_SESSION['user']['nom']) ?>"><br>
    
    <label>Prénom</label><br>
    <input type="text" name="prenom" value="<?= htmlspecialchars($_SESSION['user']['prenom']) ?>"><br>
    
    <label>Email</label><br>
    <input type="email" name="email" value="<?= htmlspecialchars($_SESSION['user']['email']) ?>"><br>

    <label>Photo de profil</label><br>
    <input type="file" name="profil_pic"><br>
    <img src="<?= $_SESSION['user']['profil_pic'] ?>" style="height: 60px; border-radius: 10px;"><br><br>

    <button type="submit">Mettre à jour</button>
</form>

<?php if (isset($_SESSION['user'])): ?>
    <form method="post" style="display:inline;">
        <button type="submit" name="logout">Déconnexion</button>
    </form>
<?php endif; ?>

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