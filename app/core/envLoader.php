<?php

function loadEnv(string $filePath): void {
    if (!file_exists($filePath)) {
        throw new Exception("Le fichier .env est introuvable : $filePath");
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Ignorer les commentaires
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Séparer la clé et la valeur
        [$key, $value] = explode('=', $line, 2);

        // Supprimer les espaces autour de la clé et de la valeur
        $key = trim($key);
        $value = trim($value);

        // Charger dans $_ENV
        $_ENV[$key] = $value;
    }
}