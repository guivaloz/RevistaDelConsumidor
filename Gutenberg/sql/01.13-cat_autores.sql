--
-- 01.13-cat_autores.sql
--

CREATE TABLE cat_autores (
    id         serial               PRIMARY KEY,

    nombre     character varying    NOT NULL,
    puesto     character varying,
    area       character varying,

    notas      text,
    estatus    character(1)         DEFAULT 'A'::bpchar NOT NULL
);
