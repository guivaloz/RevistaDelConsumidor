--
-- 01.57-pub_publicaciones_fuentes.sql
--

CREATE TABLE pub_publicaciones_fuentes (
    id             serial          PRIMARY KEY,
    publicacion    integer         REFERENCES pub_publicaciones NOT NULL,
    fuente         integer         REFERENCES cat_fuentes       NOT NULL,

    estatus        character(1)    DEFAULT 'A'::bpchar          NOT NULL
);
