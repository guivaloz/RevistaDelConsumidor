--
-- 01.17-cat_fuentes.sql
--

CREATE TABLE cat_fuentes (
    id         serial               PRIMARY KEY,

    nombre     character varying    NOT NULL,
    sitio_web  character varying,

    notas      text,
    estatus    character(1)         DEFAULT 'A'::bpchar NOT NULL
);
