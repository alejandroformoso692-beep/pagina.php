-- ============================================================
-- schema.sql - Brawl Dex
-- ============================================================

CREATE DATABASE IF NOT EXISTS brawl_dex
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE brawl_dex;

-- Roles
CREATE TABLE roles (
    id_rol      INT AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(50) NOT NULL UNIQUE,
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Calidades
CREATE TABLE calidades (
    id_calidad      INT AUTO_INCREMENT PRIMARY KEY,
    nombre          VARCHAR(50) NOT NULL UNIQUE,
    precio_gemas    INT NOT NULL DEFAULT 0,
    precio_creditos INT NOT NULL DEFAULT 0,
    created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Usuarios
CREATE TABLE usuarios (
    id_usuario  INT AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(100) NOT NULL,
    email       VARCHAR(150) NOT NULL UNIQUE,
    password    VARCHAR(255) NOT NULL,
    id_rol      INT NOT NULL,
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_usuarios_rol
        FOREIGN KEY (id_rol) REFERENCES roles(id_rol)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE INDEX idx_usuarios_email ON usuarios(email);

-- Brawlers
CREATE TABLE brawlers (
    id_brawler  INT AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(80) NOT NULL UNIQUE,
    descripcion TEXT,
    id_calidad  INT NOT NULL,
    imagen      VARCHAR(255) DEFAULT NULL,
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_brawlers_calidad
        FOREIGN KEY (id_calidad) REFERENCES calidades(id_calidad)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE INDEX idx_brawlers_calidad ON brawlers(id_calidad);

-- Modos
CREATE TABLE modos (
    id_modo     INT AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(80) NOT NULL UNIQUE,
    descripcion VARCHAR(255) DEFAULT NULL,
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Encuestas
CREATE TABLE encuestas (
    id_encuesta     INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario      INT NOT NULL,
    id_brawler      INT NOT NULL,
    fecha_respuesta DATE NOT NULL,
    created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_encuestas_usuario
        FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT fk_encuestas_brawler
        FOREIGN KEY (id_brawler) REFERENCES brawlers(id_brawler)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
) ENGINE=InnoDB;

-- Relación N:M Encuesta - Modos
CREATE TABLE encuesta_modo (
    id_encuesta INT NOT NULL,
    id_modo     INT NOT NULL,
    PRIMARY KEY (id_encuesta, id_modo),
    CONSTRAINT fk_em_encuesta
        FOREIGN KEY (id_encuesta) REFERENCES encuestas(id_encuesta)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT fk_em_modo
        FOREIGN KEY (id_modo) REFERENCES modos(id_modo)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;
