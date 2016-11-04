--
-- 01.15-cat_categorias.sql
--

CREATE TABLE cat_categorias (
    id         serial               PRIMARY KEY,

    nombre     character varying    NOT NULL,

    notas      text,
    estatus    character(1)         DEFAULT 'A'::bpchar NOT NULL
);
