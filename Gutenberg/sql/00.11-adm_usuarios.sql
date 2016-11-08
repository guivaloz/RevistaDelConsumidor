--
-- GenesisPHP Usuarios
--

CREATE TABLE adm_usuarios (
    id                      serial                  PRIMARY KEY,

    nom_corto               character varying(64)   UNIQUE NOT NULL,
    nombre                  character varying(128)  NOT NULL,
    puesto                  character varying(128),
    tipo                    character(1)            NOT NULL,
    email                   character varying(128),
    contrasena              character varying(64),
    contrasena_encriptada   character varying,
    contrasena_fallas       smallint                DEFAULT 0,
    contrasena_expira       date                    DEFAULT ((('now'::text)::date + '90 days'::interval))::date NOT NULL,
    sesiones_maximas        smallint                DEFAULT 10 NOT NULL,
    sesiones_contador       smallint                DEFAULT 0,
    sesiones_ultima         timestamp,
    listado_renglones       smallint                DEFAULT 25 NOT NULL,

    notas                   text,
    estatus                 character(1)            DEFAULT 'A'::bpchar NOT NULL
);

-- Desarrollo de Sistemas
INSERT INTO adm_usuarios (nom_corto, nombre, tipo, contrasena, contrasena_expira) VALUES ('sistema',  'Sistema',          'A', 'ieho8Vee8aeh9AeB', '2020-12-31'); -- 1
INSERT INTO adm_usuarios (nom_corto, nombre, tipo, contrasena)                    VALUES ('guivaloz', 'Guillermo Valdés', 'A', 'datacat'); -- 2

-- Editorialistas
INSERT INTO adm_usuarios (nom_corto, nombre, tipo, contrasena)                    VALUES ('editor',   'Editor',           'A', 'qwerty'); -- 3
