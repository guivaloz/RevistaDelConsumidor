--
-- GenesisPHP Departamentos
--

CREATE TABLE adm_departamentos (
    id       serial                 PRIMARY KEY,

    nombre   character varying      NOT NULL,
    clave    character varying(16)  UNIQUE NOT NULL,

    notas    text,
    estatus  character(1)           DEFAULT 'A'::bpchar NOT NULL
);

-- Departamentos
INSERT INTO adm_departamentos (nombre, clave) VALUES ('Desarrollo de Sistemas', 'SIS'); -- 1
INSERT INTO adm_departamentos (nombre, clave) VALUES ('Editorialistas',         'EDI'); -- 2
