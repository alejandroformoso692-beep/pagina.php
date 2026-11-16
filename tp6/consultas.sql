-- ============================================================
-- consultas.sql - Brawl Dex
-- ============================================================

USE brawl_dex;

-- ===================== CREATE =====================

INSERT INTO roles (nombre) VALUES
('usuario'),
('admin');

INSERT INTO calidades (nombre, precio_gemas, precio_creditos) VALUES
('Épico', 169, 925),
('Mítico', 349, 1900),
('Legendario', 699, 3800),
('Ultra Legendario', 999, 5500);

INSERT INTO usuarios (nombre, email, password, id_rol) VALUES
('Juan Pérez', 'juan@mail.com', '$2y$10$ejemploHashJuan123', 1),
('Ana López', 'ana@mail.com', '$2y$10$ejemploHashAna456', 2);

INSERT INTO brawlers (nombre, descripcion, id_calidad, imagen) VALUES
('Shelly', 'Francotiradora inicial. Su mejor amigo es un cactus llamado Spike.', 1, 'assets/shelly.png'),
('El Primo', 'Tanque de corto alcance. Ideal para absorber daño y abrir caminos.', 2, 'assets/imagen2.jpg'),
('Sandy', 'Controlador adormilado. Invoca una tormenta de arena para proteger aliados.', 2, 'assets/sandy.png'),
('Crow', 'Asesino venenoso. Aplica veneno y se mueve con gran movilidad.', 3, NULL);

INSERT INTO modos (nombre, descripcion) VALUES
('Atrapagemas', '3 contra 3 - Atrapa 10 gemas para ganar.'),
('Balón Brawl', '3 contra 3 - Marca dos goles para ganar.'),
('Supervivencia (Solo)', 'Último superviviente.'),
('Caza Estelar', '3 contra 3 - Consigue más estrellas que el rival.');

INSERT INTO encuestas (id_usuario, id_brawler, fecha_respuesta) VALUES
(1, 1, '2026-11-10'),
(2, 2, '2026-11-12'),
(1, 4, '2026-11-14');

INSERT INTO encuesta_modo (id_encuesta, id_modo) VALUES
(1, 1),
(1, 2),
(2, 3),
(3, 1);

-- ===================== READ =====================

-- SELECT con WHERE + ORDER BY
SELECT b.id_brawler, b.nombre, c.nombre AS calidad, c.precio_gemas
FROM brawlers b
INNER JOIN calidades c ON b.id_calidad = c.id_calidad
WHERE c.precio_gemas >= 349
ORDER BY b.nombre ASC;

-- SELECT con INNER JOIN
SELECT
    e.id_encuesta,
    u.nombre AS usuario,
    r.nombre AS rol,
    b.nombre AS brawler_favorito,
    c.nombre AS calidad_brawler,
    e.fecha_respuesta
FROM encuestas e
INNER JOIN usuarios u ON e.id_usuario = u.id_usuario
INNER JOIN roles r ON u.id_rol = r.id_rol
INNER JOIN brawlers b ON e.id_brawler = b.id_brawler
INNER JOIN calidades c ON b.id_calidad = c.id_calidad
ORDER BY e.fecha_respuesta DESC;

-- ===================== UPDATE =====================

UPDATE encuestas
SET id_brawler = 3,
    updated_at = CURRENT_TIMESTAMP
WHERE id_encuesta = 3;

-- ===================== DELETE =====================

DELETE FROM encuesta_modo
WHERE id_encuesta = 3;

DELETE FROM encuestas
WHERE id_encuesta = 3;
