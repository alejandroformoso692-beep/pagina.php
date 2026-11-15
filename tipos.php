<?php
require_once __DIR__ . '/config/env.php';

$titulo_pagina = 'Tipos de Brawler';
$pagina_actual = 'tipos';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="contenido" style="text-align: center; padding: 20px;">
    <h2 class="titulo">Brawlers</h2>

    <div class="brawlers" style="display: flex; justify-content: space-around; flex-wrap: wrap; margin-top: 20px; gap: 20px;">
        <div class="card" style="width: 250px; color: white;">
            <img src="assets/shelly.png" alt="Shelly" style="width: 100px; height: 100px; border: 6px solid black; border-radius: 8px;">
            <p style="margin-top: 15px; line-height: 1.6;">
                Shelly es la francotiradora perfecta pero su puntería flaquea cuando se trata de elegir amigos.
                Su mejor amigo es un cactus llamado Spike.
            </p>
        </div>

        <div class="card" style="width: 250px; color: white;">
            <img src="assets/sandy.png" alt="Sandy" style="width: 100px; height: 100px; border: 6px solid black; border-radius: 8px;">
            <p style="margin-top: 15px; line-height: 1.6;">
                Sandy es un brawler adormilado que tiene una conexión especial con la arena.
                Ataca a los enemigos a pedradas e invoca una tormenta de arena para proteger a sus aliados.
            </p>
        </div>

        <div class="card" style="width: 250px; color: white;">
            <img src="assets/imagen2.jpg" alt="El Primo" style="width: 100px; height: 100px; object-fit: cover; border: 6px solid black; border-radius: 8px;">
            <p style="margin-top: 15px; line-height: 1.6;">
                El Primo es un tanque poderoso de corto alcance. Ideal para absorber daño y abrir caminos
                para el equipo.
            </p>
        </div>
    </div>

    <div style="text-align: center; margin-top: 40px;">
        <a href="modos.php" style="background: yellow; color: black; text-decoration: none; font-weight: bold; padding: 15px 60px; font-size: 20px; border-radius: 8px;">
            VER MÁS
        </a>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
