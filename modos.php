<?php
require_once __DIR__ . '/config/env.php';

$titulo_pagina = 'Modos de Juego';
$pagina_actual = 'modos';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<main style="background: linear-gradient(135deg, #ff0000, #200000); color: white; padding: 20px; min-height: 70vh;">
    <h1 class="titulo">Modos de Juego</h1>

    <p style="max-width: 800px; margin: 0 auto 20px;">
        Brawl Stars ofrece una variedad de modos de juego que rotan a diario,
        manteniendo la jugabilidad fresca y emocionante. Cada modo tiene objetivos
        diferentes, desde recoger gemas en Gem Grab hasta marcar goles en Brawl Ball.
    </p>

    <div class="card">
        <h3>ATRAPAGEMAS</h3>
        <p>3 contra 3 - Atrapa 10 gemas para ganar.</p>
    </div>
    <div class="card">
        <h3>ATRACO</h3>
        <p>3 contra 3 - Destruye la caja fuerte enemiga.</p>
    </div>
    <div class="card">
        <h3>CAZA ESTELAR</h3>
        <p>3 contra 3 - Consigue más estrellas que el rival.</p>
    </div>
    <div class="card">
        <h3>BALÓN BRAWL</h3>
        <p>3 contra 3 - Marca dos goles para ganar.</p>
    </div>
    <div class="card">
        <h3>SUPERVIVENCIA (SOLO)</h3>
        <p>Último superviviente.</p>
    </div>
    <div class="card">
        <h3>SUPERVIVENCIA (DÚO)</h3>
        <p>Sobrevive junto a un compañero.</p>
    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
