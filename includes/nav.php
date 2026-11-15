<?php
/**
 * Menú de navegación principal
 * Resalta el ítem activo según $pagina_actual
 */
$pagina_actual = $pagina_actual ?? '';

$menu = [
    'index'       => ['label' => 'GUIAS',           'href' => 'index.php'],
    'tipos'       => ['label' => 'TIPOS DE BRAWLER', 'href' => 'tipos.php'],
    'meta'        => ['label' => 'META',             'href' => 'meta.php'],
    'modos'       => ['label' => 'MODOS DE JUEGO',   'href' => 'modos.php'],
    'topglobales' => ['label' => 'TOP GLOBALES',     'href' => 'topglobales.php'],
    'calidad'     => ['label' => 'CALIDAD',          'href' => 'calidad.php'],
    'brawlpass'   => ['label' => 'BRAWL PASS',       'href' => 'brawlpass.php'],
    'tips'        => ['label' => 'TIPS',             'href' => 'tips.php'],
    'encuesta'    => ['label' => 'ENCUESTA',         'href' => 'encuesta.php'],
];
?>
<nav>
    <?php foreach ($menu as $key => $item): ?>
        <a href="<?= $item['href'] ?>"
           class="<?= ($pagina_actual === $key) ? 'active' : '' ?>">
            <?= $item['label'] ?>
        </a>
    <?php endforeach; ?>
</nav>
