<footer>
    <?= htmlspecialchars(APP_NAME) ?> &copy; <?= date('Y') ?> |
    Contacto: <a href="mailto:<?= htmlspecialchars(APP_EMAIL) ?>"><?= htmlspecialchars(APP_EMAIL) ?></a>
    <?php if (APP_ENV === 'local'): ?>
        <span style="opacity:0.6;"> | Entorno: local</span>
    <?php endif; ?>
</footer>

<script>
// Reloj
function actualizarFechaHora() {
    const ahora = new Date();
    const fecha = ahora.toLocaleDateString('es-AR');
    const hora = ahora.toLocaleTimeString('es-AR');
    const elFecha = document.getElementById('fecha');
    const elHora = document.getElementById('hora');
    if (elFecha) elFecha.innerHTML = 'Fecha: ' + fecha;
    if (elHora) elHora.innerHTML = 'Hora: ' + hora;
}
if (document.getElementById('fecha')) {
    actualizarFechaHora();
    setInterval(actualizarFechaHora, 1000);
}

// Modo oscuro
function cambiarTema() {
    document.body.classList.toggle('oscuro');
}

// Menú interactivo (si existe)
function mostrarInformacion() {
    const info = document.getElementById('informacion');
    if (info) {
        info.style.display = (info.style.display === 'block') ? 'none' : 'block';
    }
}

// Galería de imágenes (si existe)
let imagenes = ['assets/imagen1.jpg', 'assets/imagen2.jpg', 'assets/imagen3.jpg'];
let posicion = 0;

function mostrarImagen(numero) {
    posicion = numero;
    const img = document.getElementById('imagenGrande');
    if (img) img.src = imagenes[posicion];
}

function siguienteImagen() {
    posicion++;
    if (posicion >= imagenes.length) posicion = 0;
    const img = document.getElementById('imagenGrande');
    if (img) img.src = imagenes[posicion];
}

function anteriorImagen() {
    posicion--;
    if (posicion < 0) posicion = imagenes.length - 1;
    const img = document.getElementById('imagenGrande');
    if (img) img.src = imagenes[posicion];
}
</script>
</body>
</html>
