<?php
require_once __DIR__ . '/config/env.php';

$titulo_pagina = 'Encuesta';
$pagina_actual = 'encuesta';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="formulario">
    <h1>ENCUESTA <?= htmlspecialchars(APP_NAME) ?></h1>

    <form id="formulario">
        <label>Nombre:</label>
        <input type="text" id="nombre" placeholder="Ingresá tu nombre">
        <p id="errorNombre" class="error"></p>

        <label>Correo electrónico:</label>
        <input type="text" id="correo" placeholder="ejemplo@gmail.com">
        <p id="errorCorreo" class="error"></p>

        <label>Brawler favorito:</label>
        <input type="text" id="brawler" placeholder="Ingresá tu brawler favorito">
        <p id="errorBrawler" class="error"></p>

        <button type="submit">Enviar encuesta</button>
    </form>
</div>

<script>
document.getElementById('formulario').addEventListener('submit', function(event) {
    event.preventDefault();

    const nombre = document.getElementById('nombre').value.trim();
    const correo = document.getElementById('correo').value.trim();
    const brawler = document.getElementById('brawler').value.trim();

    const errorNombre = document.getElementById('errorNombre');
    const errorCorreo = document.getElementById('errorCorreo');
    const errorBrawler = document.getElementById('errorBrawler');

    errorNombre.innerHTML = '';
    errorCorreo.innerHTML = '';
    errorBrawler.innerHTML = '';

    let valido = true;
    const formatoCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (nombre === '') {
        errorNombre.innerHTML = '⚠️ El nombre no puede estar vacío.';
        valido = false;
    }
    if (correo === '') {
        errorCorreo.innerHTML = '⚠️ El correo no puede estar vacío.';
        valido = false;
    } else if (!formatoCorreo.test(correo)) {
        errorCorreo.innerHTML = '⚠️ Ingresá un correo electrónico válido.';
        valido = false;
    }
    if (brawler === '') {
        errorBrawler.innerHTML = '⚠️ El brawler no puede estar vacío.';
        valido = false;
    }

    if (valido) {
        alert('¡Encuesta enviada correctamente!');
    }
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
