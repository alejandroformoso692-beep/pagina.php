# Parte 1: Normalización Aplicada a Brawl Dex

**Proyecto:** Brawl Dex – Sitio web de guías, brawlers, modos, rankings y encuestas de Brawl Stars.

---

## 1. Entidad / Tabla Principal sin Normalizar

Se toma como ejemplo una tabla hipotética que concentra información de **encuestas de usuarios** junto con datos de brawlers favoritos y modos preferidos. En este estado se observan **campos multivalorados** y **redundancia**.

### Tabla sin normalizar: `encuesta_completa` (ejemplo de registro)

| id | nombre_usuario | email | password | rol | telefono | brawler_favorito | calidad_brawler | precio_gemas | modos_preferidos | fecha_respuesta |
|----|----------------|-------|----------|-----|----------|------------------|-----------------|--------------|------------------|-----------------|
| 1 | Juan Pérez | juan@mail.com | hash123 | usuario | 1122334455, 1199887766 | Shelly, Spike | Épico | 169 | Gem Grab, Brawl Ball | 2026-11-10 |
| 2 | Ana López | ana@mail.com | hash456 | admin | 1144556677 | El Primo | Mítico | 349 | Supervivencia, Caza Estelar | 2026-11-12 |
| 3 | Juan Pérez | juan@mail.com | hash123 | usuario | 1122334455, 1199887766 | Crow | Legendario | 699 | Gem Grab | 2026-11-14 |

**Problemas detectados:**
- Campo `telefono`, `modos_preferidos` y `brawler_favorito` son **multivalorados** (listas).
- Datos de usuario (`nombre`, `email`, `password`, `rol`) se **repiten** en cada respuesta.
- Información de la calidad del brawler (`calidad_brawler`, `precio_gemas`) está **redundante**.

---

## 2. Proceso de Normalización

### 1FN – Primera Forma Normal (atomicidad)

Se eliminan los grupos repetitivos. Cada campo debe contener un solo valor atómico.

**Tabla `usuarios`**
| id_usuario | nombre | email | password | rol | telefono |
|------------|--------|-------|----------|-----|----------|
| 1 | Juan Pérez | juan@mail.com | hash123 | usuario | 1122334455 |
| 1 | Juan Pérez | juan@mail.com | hash123 | usuario | 1199887766 |
| 2 | Ana López | ana@mail.com | hash456 | admin | 1144556677 |

**Tabla `encuestas`**
| id_encuesta | id_usuario | brawler_favorito | calidad_brawler | precio_gemas | modo_preferido | fecha_respuesta |
|-------------|------------|------------------|-----------------|--------------|----------------|-----------------|
| 1 | 1 | Shelly | Épico | 169 | Gem Grab | 2026-11-10 |
| 2 | 1 | Spike | Épico | 169 | Brawl Ball | 2026-11-10 |
| 3 | 2 | El Primo | Mítico | 349 | Supervivencia | 2026-11-12 |
| 4 | 2 | El Primo | Mítico | 349 | Caza Estelar | 2026-11-12 |
| 5 | 1 | Crow | Legendario | 699 | Gem Grab | 2026-11-14 |

---

### 2FN – Segunda Forma Normal

Se eliminan las dependencias parciales.

**`usuarios`**
| id_usuario (PK) | nombre | email | password | rol |
|-----------------|--------|-------|----------|-----|

**`telefonos_usuario`**
| id_telefono (PK) | id_usuario (FK) | telefono |

**`brawlers`**
| id_brawler (PK) | nombre | calidad | precio_gemas |

**`encuestas`**
| id_encuesta (PK) | id_usuario (FK) | id_brawler (FK) | fecha_respuesta |

**`encuesta_modo`** (N:M)
| id_encuesta (FK) | id_modo (FK) |

---

### 3FN – Tercera Forma Normal

Se eliminan las dependencias transitivas (`rol` y `calidad`).

**Estructura final:**

- **roles** → `id_rol` (PK), nombre
- **calidades** → `id_calidad` (PK), nombre, precio_gemas, precio_creditos
- **usuarios** → `id_usuario` (PK), nombre, email, password, `id_rol` (FK)
- **brawlers** → `id_brawler` (PK), nombre, descripcion, `id_calidad` (FK)
- **modos** → `id_modo` (PK), nombre, descripcion
- **encuestas** → `id_encuesta` (PK), `id_usuario` (FK), `id_brawler` (FK), fecha_respuesta
- **encuesta_modo** → `id_encuesta` (FK), `id_modo` (FK)

---

## 3. Listado final de tablas

| Tabla | PK | FK | Descripción |
|-------|----|----|-------------|
| roles | id_rol | — | Roles de usuario |
| calidades | id_calidad | — | Rareza de brawlers |
| usuarios | id_usuario | id_rol | Usuarios del sistema |
| brawlers | id_brawler | id_calidad | Catálogo de brawlers |
| modos | id_modo | — | Modos de juego |
| encuestas | id_encuesta | id_usuario, id_brawler | Respuestas de encuesta |
| encuesta_modo | (id_encuesta, id_modo) | ambas | Relación N:M |
