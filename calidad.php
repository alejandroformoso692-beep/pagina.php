<?php
require_once __DIR__ . '/config/env.php';

$titulo_pagina = 'Calidad de Brawlers';
$pagina_actual = 'calidad';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="contenido" style="padding: 20px; color: white;">
    <h1 class="titulo">Calidad de Brawler</h1>

    <table style="width: 90%; max-width: 700px; margin: 20px auto; border-collapse: collapse; background: #ddd; color: black;">
        <thead>
            <tr>
                <th style="background: #444; color: white; padding: 8px; border: 1px solid #999;">Calidad</th>
                <th style="background: #444; color: white; padding: 8px; border: 1px solid #999;">Precio por gemas</th>
                <th style="background: #444; color: white; padding: 8px; border: 1px solid #999;">Precio por créditos</th>
            </tr>
        </thead>
        <tbody>
            <tr><td style="padding: 8px; border: 1px solid #999;">Inicial</td><td style="padding: 8px; border: 1px solid #999;">0</td><td style="padding: 8px; border: 1px solid #999;">0</td></tr>
            <tr><td style="padding: 8px; border: 1px solid #999;">Especial</td><td style="padding: 8px; border: 1px solid #999;">0</td><td style="padding: 8px; border: 1px solid #999;">0</td></tr>
            <tr><td style="padding: 8px; border: 1px solid #999;">Superespecial</td><td style="padding: 8px; border: 1px solid #999;">0</td><td style="padding: 8px; border: 1px solid #999;">0</td></tr>
            <tr><td style="padding: 8px; border: 1px solid #999;">Épicos</td><td style="padding: 8px; border: 1px solid #999;">169</td><td style="padding: 8px; border: 1px solid #999;">925</td></tr>
            <tr><td style="padding: 8px; border: 1px solid #999;">Míticos</td><td style="padding: 8px; border: 1px solid #999;">349</td><td style="padding: 8px; border: 1px solid #999;">1900</td></tr>
            <tr><td style="padding: 8px; border: 1px solid #999;">Legendarios</td><td style="padding: 8px; border: 1px solid #999;">699</td><td style="padding: 8px; border: 1px solid #999;">3800</td></tr>
            <tr><td style="padding: 8px; border: 1px solid #999;">Ultra legendarios</td><td style="padding: 8px; border: 1px solid #999;">999</td><td style="padding: 8px; border: 1px solid #999;">5500</td></tr>
        </tbody>
    </table>

    <ul style="max-width: 700px; margin: 20px auto; font-size: 18px; text-align: left;">
        <li>Las calidades Común, Camino de Trofeos y Cromática fueron eliminadas.</li>
        <li>Desde la calidad Épica en adelante, se pueden conseguir créditos para desbloquear brawlers.</li>
        <li>Los Brawlers Épicos, Míticos, Legendarios y Ultralegendarios pueden desbloquearse usando gemas.</li>
    </ul>

    <div style="text-align: center; margin: 30px;">
        <button style="background: yellow; border: none; padding: 10px 30px; font-size: 18px; font-weight: bold; cursor: pointer;">
            Ver más
        </button>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
