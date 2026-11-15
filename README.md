Brawl Dex – Trabajo Práctico N° 4

Migración a PHP, Modularización (SSI) y Renderizado Server-Side (SSR)

Aplicación web sobre Brawl Stars migrada de maquetado estático HTML a PHP con includes reutilizables, títulos dinámicos y variables de entorno.

---

 1. Descripción del Proyecto

Este proyecto es la evolución del Hito 1 (maqueta estática) hacia una arquitectura Server-Side Rendering (SSR) básica con PHP.

Se eliminó el código duplicado de header, navegación y footer mediante Server Side Includes (`require_once`), se implementaron títulos de página dinámicos y se centralizó la configuración en un archivo `.env`.


---

 2. Enlace al Prototipo de Figma

https://github.com/alejandroformoso692-beep/pagina.php.git

---

 3. Tecnologías Utilizadas

- HTML5
- CSS3
- JavaScript (vanilla)
- PHP 8.x
- XAMPP / Laragon (servidor local Apache + PHP)
- Git / GitHub

---

 4. Instrucciones de Instalación y Ejecución Local

 Requisitos previos
- XAMPP o Laragon instalado
- PHP 8.0 o superior
- Navegador web moderno

 Pasos

1. Clonar el repositorio
   ```bash
   git clone https://github.com/TU_USUARIO/brawl-dex-php.git
   ```

2. Copiar a la carpeta del servidor local
   - XAMPP: copiar la carpeta `brawl-dex-php` dentro de `C:\xampp\htdocs\`
   - Laragon: copiar dentro de `C:\laragon\www\`

3. Configurar variables de entorno
   ```bash
   cd brawl-dex-php
   copy .env.example .env
   ```
   (En Linux/Mac: `cp .env.example .env`)

4. Iniciar Apache
   - Abrir el panel de control de XAMPP/Laragon y activar Apache

5. Abrir en el navegador
   ```
   http://localhost/brawl-dex-php/
   ```
   o
   ```
   http://localhost/brawl-dex-php/index.php
   ```

---

 5. Estructura del Proyecto

```
brawl-dex-php/
├── config/
│   └── env.php          # Carga de variables de entorno
├── includes/
│   ├── header.php       # <head> + logo + estilos comunes
│   ├── nav.php          # Menú de navegación con clase active
│   └── footer.php       # Pie de página + scripts JS
├── css/
│   └── estilos.css
├── assets/
│   ├── logo.png
│   ├── imagen1.jpg … imagen3.jpg
│   ├── meta.png
│   ├── shelly.png, sandy.png
│   └── videoplayback.mp4
├── index.php
├── meta.php
├── modos.php
├── tipos.php
├── tips.php
├── topglobales.php
├── calidad.php
├── brawlpass.php
├── encuesta.php
├── .env.example         
├── .env                
├── .gitignore
└── README.md
```

---

 6. Características implementadas (TP4)

 Migración a `.php` : Todas las páginas renombradas y funcionando con PHP 
 Modularización SSI : `header.php`, `nav.php`, `footer.php` incluidos con `require_once` 
 Título dinámico : Variable `$titulo_pagina` definida antes del include 
 Menú activo : Clase `active` según `$pagina_actual` 
 Variables de entorno : Archivo `.env` + `config/env.php` 
 `.gitignore` : Contiene `.env` 
 `.env.example` : Presente en el repositorio 

---

7. Evidencia de Funcionamiento



 Servidor local ejecutándose

<img width="1890" height="1342" alt="foto link" src="https://github.com/user-attachments/assets/7f0be002-181b-4944-90ad-82a0f865a64b" />


### Estructura modular (SSI)
<img width="1812" height="1342" alt="titulo" src="https://github.com/user-attachments/assets/c7bd24bd-4d8f-46c1-b1ba-78ec1d66bc51" />
<img width="1812" height="1342" alt="fother" src="https://github.com/user-attachments/assets/51e3b498-a990-4e3b-95f7-5fc6608cec3b" />


### Navegación dinámica
- Pestaña del navegador con título distinto en cada página (ej. “Meta - Brawl Dex”).
- Ítem del menú con clase `active` resaltado según la sección actual.

### Variables de entorno
Captura de `.env.example` en el repositorio y de `.gitignore` mostrando la línea `.env`.

---

## 8. Flujo de Git recomendado

```bash
git checkout -b feature/migracion-php-ssi
# ... realizar los cambios ...
git add .
git commit -m "feat: migra maquetado HTML a PHP e implementa header/nav/footer dinámicos"
git commit -m "feat: agrega títulos dinámicos y resaltado de menú activo"
git commit -m "feat: implementa variables de entorno (.env) y .env.example"
git push -u origin feature/migracion-php-ssi
# Crear Pull Request hacia main
```

---

## Autor

Estudiante – Programación Web  
Trabajo Práctico N° 4 – Unidad 4
