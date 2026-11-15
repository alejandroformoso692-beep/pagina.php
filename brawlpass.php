<?php
require_once __DIR__ . '/config/env.php';

$titulo_pagina = 'Brawl Pass';
$pagina_actual = 'brawlpass';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="contenido" style="padding: 20px; color: white;">
    <h1 class="titulo">Brawl Pass</h1>

    <p style="max-width: 900px; margin: 20px auto; line-height: 1.7; text-align: left;">
        El Brawl Pass es una mecánica añadida al juego en mayo del 2020.
        Permite al jugador avanzar tras niveles utilizando XP, conseguidos a base de jugar
        y completar misiones, adquiriendo diferentes recompensas.
    </p>

    <p style="max-width: 900px; margin: 20px auto; line-height: 1.7; text-align: left;">
        Contiene 60 niveles con recompensas como: Monedas, Gemas, Puntos de Fuerza, Créditos,
        Premios Starr, Reacciones, Sprays, Bling, Aspectos, etc.
        Se divide entre Brawl Pass Gratis, Brawl Pass de Pago y Brawl Pass Plus.
    </p>

    <h2 class="titulo" style="margin-top: 30px;">Misiones</h2>
    <p style="max-width: 900px; margin: 20px auto; text-align: left;">
        Las misiones son objetivos que recompensan XP. Existen misiones pequeñas,
        medianas y difíciles, las cuales ayudan a progresar en el Brawl Pass.
    </p>

    <div style="text-align: center; margin: 30px;">
        <button style="background: #ffe600; border: 0; padding: 10px 25px; font-weight: bold; cursor: pointer;">
            Ver más
        </button>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
