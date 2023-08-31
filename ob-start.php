<?php
ob_start();

echo "Ceci est du contenu généré.";

// À ce stade, le contenu généré est stocké en mémoire plutôt qu'envoyé au navigateur.

$contenu = ob_get_clean(); // Récupère le contenu en mémoire tampon et nettoie la mémoire tampon.
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exemple ob_start</title>
</head>
<body>
    <?php echo $contenu; ?>
</body>
</html>