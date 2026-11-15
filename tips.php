<?php
require_once __DIR__ . '/config/env.php';

$titulo_pagina = 'Tips';
$pagina_actual = 'tips';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="contenido" style="padding: 20px; color: white;">
    <h1 class="titulo">Tips</h1>

    <p style="max-width: 900px; margin: 20px auto; line-height: 1.7; text-align: left;">
        <strong>Conoce tu rol.</strong> Cada Brawler es ideal para un rol diferente.
        Por ejemplo, El Primo puede resistir mucho daño y proteger a los demás Brawlers de su equipo,
        pero Brawlers como Brock son mejores para brindar apoyo a larga distancia.
    </p>

    <p style="max-width: 900px; margin: 20px auto; line-height: 1.7; text-align: left;">
        <strong>Conoce la velocidad de los ataques de tu Brawler.</strong>
        Si el ataque de tu Brawler tarda en llegar a su destino, debes apuntar por delante de tu objetivo
        si se está moviendo, o fallarás.
    </p>

    <p style="max-width: 900px; margin: 20px auto; line-height: 1.7; text-align: left;">
        <strong>Aprende a retirarte cuando sea necesario.</strong>
        Los luchadores se curan cuando no disparan ni reciben daño. Si tienes poca salud,
        lo mejor es cubrirte un rato para recuperarla.
    </p>

    <p style="max-width: 900px; margin: 20px auto; line-height: 1.7; text-align: left;">
        <strong>Intenta esquivar los ataques enemigos.</strong>
        Los proyectiles de largo alcance se pueden esquivar con las técnicas de desplazamiento lateral adecuadas.
    </p>

    <h3 class="titulo" style="margin-top: 40px;">Bandeja de entrada</h3>
    <p style="max-width: 900px; margin: 20px auto; text-align: left;">
        La Bandeja de entrada es donde recibes Bling, gemas, aspectos, recompensas y mensajes del Club.
    </p>

    <div style="text-align: center; margin: 30px;">
        <button style="background: #ffe600; border: 0; padding: 10px 25px; font-weight: bold; cursor: pointer;">
            Ver más
        </button>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
