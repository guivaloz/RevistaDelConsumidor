--
-- 01.53-pub_publicaciones_autores.sql
--

CREATE TABLE pub_publicaciones_autores (
    id             serial          PRIMARY KEY,
    publicacion    integer         REFERENCES pub_publicaciones NOT NULL,
    autor          integer         REFERENCES cat_autores       NOT NULL,

    estatus        character(1)    DEFAULT 'A'::bpchar          NOT NULL
);
