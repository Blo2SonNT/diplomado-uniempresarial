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