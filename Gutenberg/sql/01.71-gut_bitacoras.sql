--
-- 01.71-gut_bitacoras.sql
--

CREATE TABLE gut_bitacoras (
    id             serial                         PRIMARY KEY,

    tiempo         timestamp without time zone    DEFAULT ('now'::text)::timestamp without time zone NOT NULL,
    tipo           character(1)                   DEFAULT 'A'::bpchar                                NOT NULL,
    descripcion    character varying                                                                 NOT NULL,
    salida         text,

    estatus        character(1)                   DEFAULT 'A'::bpchar                                NOT NULL
);

-- Tipo
--   A - Alimentar
--   C - Crear
--   P - Procesar
