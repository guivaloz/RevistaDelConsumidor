--
-- 01.19-cat_regiones.sql
--

CREATE TABLE cat_regiones (
    id         serial               PRIMARY KEY,

    nombre     character varying    NOT NULL,

    notas      text,
    estatus    character(1)         DEFAULT 'A'::bpchar NOT NULL
);
