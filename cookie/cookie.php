<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préférences de langue</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">Choisissez votre langue</h1>

        <form method="POST" class="space-y-4">
            <div class="flex items-center">
                <label for="language" class="mr-4">Langue :</label>
                <select name="language" id="language" class="border rounded p-2">
                    <option value="fr" <?php echo ($language == 'fr') ? 'selected' : ''; ?>>Français</option>
                    <option value="en" <?php echo ($language == 'en') ? 'selected' : ''; ?>>Anglais</option>
                    <option value="es" <?php echo ($language == 'es') ? 'selected' : ''; ?>>Espagnol</option>
                </select>
            </div>
            <input type="submit" value="Enregistrer la préférence" class="bg-blue-500 text-white p-2 rounded">
        </form>

        <hr class="my-6">

        <h2 class="text-xl font-semibold">Message personnalisé</h2>
        <?php
        if ($language == 'fr') {
            echo "<p>Bienvenue sur notre site en français !</p>";
        } elseif ($language == 'en') {
            echo "<p>Welcome to our site in English!</p>";
        } elseif ($language == 'es') {
            echo "<p>¡Bienvenido a nuestro sitio en español!</p>";
        } else {
            echo "<p>Bienvenue sur notre site !</p>";
        }
        ?>

    </div>

</body>
</html>
