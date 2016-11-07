--
-- 01.51-pub_publicaciones.sql
--

CREATE TABLE pub_publicaciones (
    id                    serial                         PRIMARY KEY,
    seccion               integer                        REFERENCES cat_regiones NOT NULL,

    fecha                 timestamp without time zone    NOT NULL,
    nombre                character varying              NOT NULL,
    descripcion           text,
    palabras_clave        character varying,

    autores_captura       character varying,
    categorias_captura    character varying,
    fuentes_captura       character varying,
    regiones_captura      character varying,

    clase                 character varying,
    archivo               character varying,

    notas                 text,
    estatus               character(1)         DEFAULT 'A'::bpchar NOT NULL
);
