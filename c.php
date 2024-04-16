<?php
// Chemin du répertoire à afficher
$chemin = './';
// Récupération de tous les fichiers et dossiers dans le répertoire
$elements = glob($chemin . '*');

// Correction du nom de la variable dans la boucle pour éviter la confusion
foreach ($elements as $element) {
    echo basename($element) . "<br>";
}
?>
