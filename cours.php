<?php
session_start();
require 'includes/db.php';


// Récupération du prénom
$prenom = htmlspecialchars($_SESSION['user']['prenom']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page des cours</title>
    <link rel="stylesheet" href="assets/style.css"> <!-- si tu as un CSS -->
</head>
<body>

    <h1>Salut <?= $prenom ?> ! Prêt pour les révisions ? 📚</h1>

    <form method="GET">
        <input type="text" name="search" placeholder="Rechercher un cours..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
        <button type="submit">Rechercher</button>
    </form>

    <section id="cours">
        <?php
        // Exemple de structure (à remplacer plus tard par une base de données)
        $cours = [
            "Maths" => [
                "CP" => [
                    "Addition",
                    "Soustraction"
                ],
                "CE1" => [
                    "Multiplication",
                    "Division"
                ],
                "Seconde" => [
                    "Équations",
                    "Fonctions"
                ]
            ],
            "Physique-Chimie" => [
                "5ème" => [
                    "Électricité",
                    "Matière"
                ],
                "4ème" => [
                    "Pression",
                    "Énergie"
                ]
            ]
        ];

        $recherche = isset($_GET['search']) ? strtolower($_GET['search']) : '';

        foreach ($cours as $matiere => $niveaux) {
            echo "<h2>$matiere</h2>";
            foreach ($niveaux as $niveau => $chapitres) {
                echo "<h3>$niveau</h3><ul>";
                foreach ($chapitres as $chapitre) {
                    // Si pas de recherche ou si le chapitre correspond à la recherche
                    if (!$recherche || str_contains(strtolower($chapitre), $recherche)) {
                        echo "<li><a href='#'>$chapitre</a></li>"; // lien à compléter plus tard
                    }
                }
                echo "</ul>";
            }
        }
        ?>
    </section>

</body>
</html>
