# Brawl Dex – Trabajo Práctico N° 4

**Migración a PHP, Modularización (SSI) y Renderizado Server-Side (SSR)**

Aplicación web sobre Brawl Stars migrada de maquetado estático HTML a PHP con includes reutilizables, títulos dinámicos y variables de entorno.

---

## 1. Descripción del Proyecto

Este proyecto es la evolución del Hito 1 (maqueta estática) hacia una arquitectura **Server-Side Rendering (SSR)** básica con PHP.

Se eliminó el código duplicado de header, navegación y footer mediante **Server Side Includes** (`require_once`), se implementaron títulos de página dinámicos y se centralizó la configuración en un archivo `.env`.

**Asignatura:** Programación Web  
**Unidad:** Unidad 4 – Entorno Servidor y Primeros Pasos con PHP

---

## 2. Enlace al Prototipo de Figma

> *Reemplazar por el enlace real de tu Figma del Hito 1:*  
> [https://www.figma.com/file/XXXXXXXX/Brawl-Dex](https://www.figma.com)

---

## 3. Tecnologías Utilizadas

- HTML5
- CSS3
- JavaScript (vanilla)
- PHP 8.x
- XAMPP / Laragon (servidor local Apache + PHP)
- Git / GitHub

---

## 4. Instrucciones de Instalación y Ejecución Local

### Requisitos previos
- XAMPP o Laragon instalado
- PHP 8.0 o superior
- Navegador web moderno

### Pasos

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/TU_USUARIO/brawl-dex-php.git
   ```

2. **Copiar a la carpeta del servidor local**
   - **XAMPP:** copiar la carpeta `brawl-dex-php` dentro de `C:\xampp\htdocs\`
   - **Laragon:** copiar dentro de `C:\laragon\www\`

3. **Configurar variables de entorno**
   ```bash
   cd brawl-dex-php
   copy .env.example .env
   ```
   (En Linux/Mac: `cp .env.example .env`)

4. **Iniciar Apache**
   - Abrir el panel de control de XAMPP/Laragon y activar **Apache**.

5. **Abrir en el navegador**
   ```
   http://localhost/brawl-dex-php/
   ```
   o
   ```
   http://localhost/brawl-dex-php/index.php
   ```

---

## 5. Estructura del Proyecto

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
├── .env.example         # Plantilla de configuración (sí va a Git)
├── .env                 # Valores reales (NO va a Git)
├── .gitignore
└── README.md
```

---

## 6. Características implementadas (TP4)

| Requisito | Implementación |
|-----------|----------------|
| Migración a `.php` | Todas las páginas renombradas y funcionando con PHP |
| Modularización SSI | `header.php`, `nav.php`, `footer.php` incluidos con `require_once` |
| Título dinámico | Variable `$titulo_pagina` definida antes del include |
| Menú activo | Clase `active` según `$pagina_actual` |
| Variables de entorno | Archivo `.env` + `config/env.php` |
| `.gitignore` | Contiene `.env` |
| `.env.example` | Presente en el repositorio |

---

## 7. Evidencia de Funcionamiento

> **Nota para la entrega:** reemplazá las siguientes secciones con capturas reales tomadas de tu XAMPP.

### Servidor local ejecutándose
Captura del navegador mostrando `http://localhost/brawl-dex-php/`

### Estructura modular (SSI)
Capturas del código de `includes/header.php`, `nav.php` y `footer.php`, y de una página (ej. `index.php`) mostrando los `require_once`.

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
