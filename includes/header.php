<?php
// Cargar configuración si aún no está cargada
if (!defined('APP_NAME')) {
    require_once __DIR__ . '/../config/env.php';
}

// Título por defecto si no se definió
if (!isset($titulo_pagina)) {
    $titulo_pagina = APP_NAME;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo_pagina) ?> - <?= htmlspecialchars(APP_NAME) ?></title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        /* Estilos comunes de layout */
        #reloj {
            position: absolute;
            top: 10px;
            left: 10px;
            background: black;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            font-family: Arial, sans-serif;
            z-index: 1000;
        }
        #fecha { font-size: 14px; }
        #hora { font-size: 18px; font-weight: bold; }
        #tema {
            position: absolute;
            top: 10px;
            right: 15px;
            background: white;
            padding: 10px;
            border-radius: 20px;
            z-index: 1000;
        }
        body.oscuro {
            background: #222;
            color: white;
        }
        body.oscuro .contenido,
        body.oscuro #informacion,
        body.oscuro .formulario {
            background: #333;
            color: white;
        }
        nav a.active {
            background: #000;
            color: #ffe600 !important;
            padding: 6px 12px;
            border-radius: 6px;
        }
        .menu-interactivo {
            width: 80%;
            max-width: 700px;
            margin: 30px auto;
            text-align: center;
        }
        .boton-menu {
            width: 100%;
            padding: 15px;
            background: #ffcc00;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }
        #informacion {
            display: none;
            background: white;
            color: black;
            padding: 20px;
            border-radius: 0 0 8px 8px;
        }
        /* Cards genéricos */
        .card {
            background: #20242d;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            color: white;
        }
        .card h3 { margin-bottom: 5px; }
        main, .main-content {
            min-height: calc(100vh - 180px);
            padding-bottom: 80px;
        }
        footer {
            position: relative;
        }
    </style>
</head>
<body>

<header>
    <img src="assets/logo.png" alt="<?= htmlspecialchars(APP_NAME) ?>" class="logo">
</header>
