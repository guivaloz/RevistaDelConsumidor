--
-- 01.51-pub_publicaciones.sql
--

CREATE TABLE pub_publicaciones (
    id                    serial                         PRIMARY KEY,
    seccion               integer                        REFERENCES cat_secciones NOT NULL,

    fecha                 timestamp without time zone    NOT NULL,
    nombre                character varying              NOT NULL,
    descripcion           text,
    palabras_clave        character varying,

    autores_captura       character varying,
    categorias_captura    character varying,
    fuentes_captura       character varying,
    regiones_captura      character varying,

    clase                 character varying,
    archivo               character varying,

    notas                 text,
    creado                timestamp without time zone    DEFAULT ('now'::text)::timestamp without time zone,
    modificado            timestamp without time zone    DEFAULT ('now'::text)::timestamp without time zone,
    estatus               character(1)                   DEFAULT 'A'::bpchar NOT NULL
);

--
-- Que al modificar ponga a modificado con el tiempo actual
--

CREATE OR REPLACE FUNCTION pub_publicaciones_modificar() RETURNS TRIGGER AS $nulo$
    BEGIN
        NEW.modificado = now();
        RETURN NEW;
    END;
$nulo$ LANGUAGE plpgsql;

CREATE TRIGGER pub_publicaciones_modificar_trigger
    AFTER UPDATE ON pub_publicaciones
    FOR EACH ROW EXECUTE PROCEDURE pub_publicaciones_modificar();
