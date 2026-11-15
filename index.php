<?php
require_once __DIR__ . '/config/env.php';

$titulo_pagina = 'Inicio / Guías';
$pagina_actual = 'index';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<!-- Reloj -->
<div id="reloj">
    <div id="fecha"></div>
    <div id="hora"></div>
</div>

<!-- Interruptor tema -->
<div id="tema">
    <label>
        🌙
        <input type="checkbox" id="interruptor" onchange="cambiarTema()">
        ☀️
    </label>
</div>

<div class="buscador">
    <input type="text" placeholder="Buscar...">
</div>

<h2 class="titulo"><?= htmlspecialchars(APP_NAME) ?></h2>

<div class="contenido">
    <p>Bienvenido a <?= htmlspecialchars(APP_NAME) ?>.</p>
    <br>
    <p>
        Explora guías, brawlers, modos de juego, metas, rankings y consejos
        para mejorar en Brawl Stars.
    </p>
</div>

<div class="menu-interactivo">
    <button class="boton-menu" onclick="mostrarInformacion()">
        ▼ VER INFORMACIÓN DE BRAWL DEX
    </button>
    <div id="informacion">
        <h2>¿Qué es Brawl Dex?</h2>
        <p>
            Brawl Dex es una página creada para encontrar información sobre Brawl Stars.
        </p>
        <br>
        <p>
            Podés encontrar guías, información sobre brawlers, modos de juego,
            consejos, novedades y rankings.
        </p>
    </div>
</div>

<div class="video">
    <video width="700" height="400" controls autoplay muted loop preload="auto">
        <source src="assets/videoplayback.mp4" type="video/mp4">
        Tu navegador no soporta la etiqueta de video.
    </video>
</div>

<div class="galeria">
    <h2>Galería de Brawl Stars</h2>
    <img id="imagenGrande"
         src="assets/imagen1.jpg"
         alt="Imagen de Brawl Stars"
         width="600">
    <br><br>
    <button onclick="anteriorImagen()">◀ Anterior</button>
    <button onclick="siguienteImagen()">Siguiente ▶</button>
    <br><br>
    <img class="miniatura" src="assets/imagen1.jpg" onclick="mostrarImagen(0)" alt="Imagen 1" width="120">
    <img class="miniatura" src="assets/imagen2.jpg" onclick="mostrarImagen(1)" alt="Imagen 2" width="120">
    <img class="miniatura" src="assets/imagen3.jpg" onclick="mostrarImagen(2)" alt="Imagen 3" width="120">
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
