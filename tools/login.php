<?php
require '../includes/db.php';
require '../includes/init.php';
$errors = [];

if (isset($_POST['envoi'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];

        $stmt = $db->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch();

            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = [
                    'id' => $user['id_users'],
                    'nom' => $user['nom'],
                    'prenom' => $user['prenom'],
                    'email' => $user['email'],
                    'profil_pic' => $user['profil_pic']
                ];

                header('Location: index.php');
                exit();
            } else {
                $errors[] = "Mot de passe incorrect.";
            }
        } else {
            $errors[] = "Email non reconnu.";
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
  <title>Connexion</title>
</head>
<body>
  <h1>Connexion</h1>

  <?php if (!empty($errors)) : ?>
    <ul style="color: red;">
      <?php foreach ($errors as $error) : ?>
        <li><?= htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <form method="post">
    <input type="email" name="email" placeholder="Adresse mail" required><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br>
    <button type="submit" name="envoi">Se connecter</button>
  </form>

  <script src="script.js"></script>

</body>
</html>
