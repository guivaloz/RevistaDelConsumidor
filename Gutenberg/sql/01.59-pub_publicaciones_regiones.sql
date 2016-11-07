--
-- 01.59-pub_publicaciones_regiones.sql
--

CREATE TABLE pub_publicaciones_regiones (
    id             serial          PRIMARY KEY,
    publicacion    integer         REFERENCES pub_publicaciones NOT NULL,
    regiones       integer         REFERENCES cat_regiones      NOT NULL,

    estatus        character(1)    DEFAULT 'A'::bpchar          NOT NULL
);
