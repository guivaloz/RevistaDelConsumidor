--
-- 01.55-pub_publicaciones_categorias.sql
--

CREATE TABLE pub_publicaciones_categorias (
    id             serial          PRIMARY KEY,
    publicacion    integer         REFERENCES pub_publicaciones NOT NULL,
    categoria      integer         REFERENCES cat_categorias    NOT NULL,

    estatus        character(1)    DEFAULT 'A'::bpchar          NOT NULL
);
