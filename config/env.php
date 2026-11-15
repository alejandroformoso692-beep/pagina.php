<?php
/**
 * Configuración de variables de entorno
 * En producción se recomienda usar un .env real con vlucas/phpdotenv
 * Aquí usamos un array de configuración cargado desde .env si existe.
 */

$envFile = __DIR__ . '/../.env';

if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#')) {
            continue;
        }
        if (strpos($line, '=') !== false) {
            [$key, $value] = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value, " \t\"'");
            $_ENV[$key] = $value;
            putenv("$key=$value");
        }
    }
}

// Valores por defecto (fallback)
define('APP_NAME', $_ENV['APP_NAME'] ?? 'Brawl Dex');
define('APP_EMAIL', $_ENV['APP_EMAIL'] ?? 'soporte@brawldex.local');
define('APP_ENV', $_ENV['APP_ENV'] ?? 'local');
define('APP_URL', $_ENV['APP_URL'] ?? 'http://localhost/brawl-dex-php');

$nombre_sitio = APP_NAME;
$email_contacto = APP_EMAIL;
$entorno = APP_ENV;
