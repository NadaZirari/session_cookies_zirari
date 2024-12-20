<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
</head>
<body>
    <?php if (isset($_SESSION['nom_SC'])): ?>
        <h2>Bonjour <?php echo htmlspecialchars($_SESSION['nom_SC']); ?>!</h2>
    <?php else: ?>
        <p>Nom d'utilisateur non défini. Veuillez vous connecter.</p>
    <?php endif; ?>
    
    <p><a href="logout.php">Se déconnecter</a></p>
</body>
</html>
