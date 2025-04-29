<?php
session_start();
require 'includes/db.php';

// Activer les erreurs PDO
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Simule un utilisateur connecté (à adapter selon ton système)
$_SESSION['user'] = [
    'id_users' => 57 // Remplace "1" par l'ID d'un utilisateur existant dans ta base
];

// Données de test à mettre à jour
$newNom = 'TestNom';
$newPrenom = 'TestPrenom';
$newEmail = 'test@example.com';
$newPassword = sha1('motdepasse'); // Simule un mot de passe crypté
$profil_pic = 'img/profil/test.jpg'; // Exemple de chemin

try {
    $update = $db->prepare("UPDATE users SET nom = ?, prenom = ?, email = ?, password = ?, profil_pic = ? WHERE id_users = ?");
    $update->execute([$newNom, $newPrenom, $newEmail, $newPassword, $profil_pic, $_SESSION['user']['id_users']]);

    echo "✅ Mise à jour réussie.";
} catch (PDOException $e) {
    echo "❌ Erreur SQL : " . $e->getMessage();
}
?>
