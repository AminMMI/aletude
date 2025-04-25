<?php 
session_start();
require '../includes/db.php';
require '../includes/init.php';
$errors = [];
$success = '';

if (isset($_POST['envoi'])) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST['prenom']) &&
        !empty($_POST['email']) &&
        !empty($_POST['password'])
    ) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // 💡 Sécurisé

        // Vérifie si l'email est déjà utilisé
        $check = $db->prepare('SELECT id_users FROM users WHERE email = ?');
        $check->execute([$email]);

        if ($check->rowCount() > 0) {
            $errors[] = "Cette adresse email est déjà utilisée.";
        } else {
            // Ajoute l'utilisateur
            $insert = $db->prepare('INSERT INTO users (nom, prenom, email, password) VALUES (?, ?, ?, ?)');
            $insert->execute([$nom, $prenom, $email, $password]);

            $success = "Inscription réussie ! Vous pouvez vous connecter.";
            header('Location: login.php');
            exit();
        }
    } else {
        $errors[] = "Veuillez compléter tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
</head>
<body>
  <h1>Inscription</h1>

  <?php if (!empty($errors)) : ?>
    <ul style="color: red;">
      <?php foreach ($errors as $error) : ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <?php if ($success) : ?>
    <p style="color: green;"><?= htmlspecialchars($success) ?></p>
  <?php endif; ?>

  <form method="post">
    <input type="text" name="nom" placeholder="Nom" required><br>
    <input type="text" name="prenom" placeholder="Prénom" required><br>
    <input type="email" name="email" placeholder="Adresse mail" required><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br>
    <button type="submit" name="envoi">S'inscrire</button>
  </form>

  <script src="script.js"></script>

</body>
</html>