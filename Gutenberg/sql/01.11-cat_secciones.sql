--
-- 01.11-cat_secciones.sql
--

CREATE TABLE cat_secciones (
    id         serial               PRIMARY KEY,

    nombre     character varying    NOT NULL,

    notas      text,
    estatus    character(1)         DEFAULT 'A'::bpchar NOT NULL
);
