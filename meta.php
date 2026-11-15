<?php
require_once __DIR__ . '/config/env.php';

$titulo_pagina = 'Meta';
$pagina_actual = 'meta';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="contenido" style="padding: 20px; text-align: center;">
    <h1 class="titulo">Meta</h1>
    <br><br>
    <img src="assets/meta.png" class="meta" alt="Meta Brawl Stars" style="width:90%; max-width:900px;">
    <p style="margin-top: 20px; color: white;">
        Tier list actual de Brawlers según el meta competitivo.
    </p>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
