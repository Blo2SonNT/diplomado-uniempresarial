CREATE TABLE tb_generos(
    id_registro BIGINT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    url_imagen TEXT,
    fec_cre DATE DEFAULT NOW()
);

CREATE TABLE tb_paises(
    id_registro BIGINT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(200),
    fec_cre DATE DEFAULT NOW()
);

CREATE TABLE tb_usuarios (
    id_registro BIGINT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(200),
    apellido VARCHAR(200),
    correo VARCHAR(255),
    edad INTEGER,
    id_generos_preferidos TEXT,
    id_pais BIGINT,
    clave TEXT,
    fec_cre DATE DEFAULT NOW()
);

CREATE TABLE tb_perfiles(
    id_registro BIGINT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    fec_cre DATE DEFAULT NOW()
);

ALTER TABLE tb_usuarios ADD COLUMN id_perfil BIGINT DEFAULT 1 AFTER id_pais;

INSERT INTO tb_perfiles(nombre) VALUES ('Administrador'), ('Visitante');


CREATE TABLE tb_tipos_video(
    id_registro BIGINT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(150),
    id_est_registro BOOLEAN DEFAULT TRUE,
    fec_cre DATE DEFAULT NOW()
);

CREATE TABLE tb_peliculas_series(
    id_registro BIGINT PRIMARY KEY AUTO_INCREMENT,
    nombre TEXT,
    fec_estreno DATE,
    director VARCHAR(250),
    id_tipo_video BIGINT,
    clasificacion VARCHAR(100),
    id_genero BIGINT,
    url_imagen TEXT,
    id_est_registro BOOLEAN DEFAULT TRUE,
    fec_cre DATE DEFAULT NOW()
);

INSERT INTO tb_tipos_video (nombre) VALUES ("Pelicula"), ("Serie"), ("Navideña"), ("Halloween"), ("Animación");

ALTER TABLE tb_tipos_video ADD COLUMN icono_opcion TEXT AFTER nombre