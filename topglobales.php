<?php
require_once __DIR__ . '/config/env.php';

$titulo_pagina = 'Top Globales';
$pagina_actual = 'topglobales';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="titulo" style="text-align: center; margin: 20px;">
    <h1 style="display: inline-block; background: yellow; padding: 8px 20px; font-size: 36px;">
        TOP GLOBALES
    </h1>
</div>

<div class="ranking" style="width: 95%; max-width: 800px; margin: auto;">
    <?php
    $jugadores = [
        ['pos' => 1, 'nombre' => 'Elox',    'copas' => '228.4K'],
        ['pos' => 2, 'nombre' => 'Netty',   'copas' => '207.2K'],
        ['pos' => 3, 'nombre' => 'Tites',   'copas' => '207K'],
        ['pos' => 4, 'nombre' => 'FSimi',   'copas' => '204.8K'],
        ['pos' => 5, 'nombre' => 'Ianbabo', 'copas' => '204K'],
    ];
    foreach ($jugadores as $j):
    ?>
    <div class="jugador" style="background: #1f1f1f; color: white; margin: 10px 0; padding: 15px; display: flex; justify-content: space-between; align-items: center; border-radius: 5px;">
        <div class="posicion" style="font-size: 25px; font-weight: bold; width: 50px;"><?= $j['pos'] ?></div>
        <div class="nombre" style="flex: 1;"><?= htmlspecialchars($j['nombre']) ?></div>
        <div class="copas" style="color: gold; font-weight: bold;"><?= $j['copas'] ?> 🏆</div>
    </div>
    <?php endforeach; ?>
</div>

<div class="paginas" style="text-align: center; margin: 30px;">
    <a href="#" style="background: #222; color: white; text-decoration: none; padding: 10px 15px; margin: 3px;">◀</a>
    <a href="#" class="activo" style="background: #1e88e5; color: white; text-decoration: none; padding: 10px 15px; margin: 3px;">1</a>
    <a href="#" style="background: #222; color: white; text-decoration: none; padding: 10px 15px; margin: 3px;">2</a>
    <a href="#" style="background: #222; color: white; text-decoration: none; padding: 10px 15px; margin: 3px;">3</a>
    <a href="#" style="background: #222; color: white; text-decoration: none; padding: 10px 15px; margin: 3px;">▶</a>
</div>

<div class="banner" style="width: 80%; max-width: 600px; margin: 40px auto; background: #ffe082; text-align: center; padding: 20px; font-size: 24px; font-weight: bold; border-radius: 8px;">
    GAMESPOT - LEARN MORE
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
