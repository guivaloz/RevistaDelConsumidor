--
-- 01.11-cat_secciones.sql
--

CREATE TABLE cat_secciones (
    id            serial               PRIMARY KEY,

    nombre        character varying    NOT NULL,
    directorio    character varying    NOT NULL,

    notas         text,
    estatus       character(1)         DEFAULT 'A'::bpchar NOT NULL
);

INSERT INTO cat_secciones (nombre, directorio) VALUES ('Estudios de Calidad',  'EstudiosDeCalidad');
INSERT INTO cat_secciones (nombre, directorio) VALUES ('Platillo Sabio',       'PlatilloSabio');
INSERT INTO cat_secciones (nombre, directorio) VALUES ('Tecnología Doméstica', 'TecnologiaDomestica');
