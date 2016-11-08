--
-- Modulos Roles Insertar
--

INSERT INTO adm_modulos (orden, clave, nombre, icono, pagina, padre) VALUES (101, 'pub_nulo',                     '-Editorial',    'folder.png', 'catsecciones.php',             NULL); -- 10
INSERT INTO adm_modulos (orden, clave, nombre, icono, pagina, padre) VALUES (111, 'cat_secciones',                'Secciones',     'folder.png', 'catsecciones.php',               10); -- 11
INSERT INTO adm_modulos (orden, clave, nombre, icono, pagina, padre) VALUES (151, 'pub_publicaciones',            'Publicaciones', 'folder.png', 'pubpublicaciones.php',           10); -- 12
INSERT INTO adm_modulos (orden, clave, nombre, icono, pagina, padre) VALUES (153, 'pub_publicaciones_autores',    'P. Autores',    'folder.png', 'pubpublicacionesautores.php',    10); -- 13
INSERT INTO adm_modulos (orden, clave, nombre, icono, pagina, padre) VALUES (155, 'pub_publicaciones_categorias', 'P. Categorías', 'folder.png', 'pubpublicacionescategorias.php', 10); -- 14
INSERT INTO adm_modulos (orden, clave, nombre, icono, pagina, padre) VALUES (157, 'pub_publicaciones_fuentes',    'P. Fuentes',    'folder.png', 'pubpublicacionesfuentes.php',    10); -- 15
INSERT INTO adm_modulos (orden, clave, nombre, icono, pagina, padre) VALUES (159, 'pub_publicaciones_regiones',   'P. Regiones',   'folder.png', 'pubpublicacionesregiones.php',   10); -- 16

INSERT INTO adm_modulos (orden, clave, nombre, icono, pagina, padre) VALUES (801, 'cat_nulo',                     '-Catálogos',    'folder.png', 'catareas.php',                 NULL); -- 17
INSERT INTO adm_modulos (orden, clave, nombre, icono, pagina, padre) VALUES (813, 'cat_autores',                  'Autores',       'folder.png', 'catautores.php',                 17); -- 18
INSERT INTO adm_modulos (orden, clave, nombre, icono, pagina, padre) VALUES (815, 'cat_categorias',               'Categorías',    'folder.png', 'catcategorias.php',              17); -- 19
INSERT INTO adm_modulos (orden, clave, nombre, icono, pagina, padre) VALUES (817, 'cat_fuentes',                  'Fuentes',       'folder.png', 'catfuentes.php',                 17); -- 20
INSERT INTO adm_modulos (orden, clave, nombre, icono, pagina, padre) VALUES (819, 'cat_regiones',                 'Regiones',      'folder.png', 'catregiones.php',                17); -- 21

--
-- Desarrollo de Sistemas(1)
--

INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (1, 10, 1); -- Editorial
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (1, 11, 5); --   Secciones
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (1, 12, 5); --   Publicaciones
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (1, 13, 1); --   P. Autores
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (1, 14, 1); --   P. Categorías
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (1, 15, 1); --   P. Fuentes
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (1, 16, 1); --   P. Regiones

INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (1, 17, 1); -- Catálogos
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (1, 18, 5); --   Autores
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (1, 19, 5); --   Categorías
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (1, 20, 5); --   Fuentes
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (1, 21, 5); --   Regiones

--
-- Editorialistas(2)
--

INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (2, 10, 1); -- Editorial
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (2, 11, 1); --   Secciones
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (2, 12, 5); --   Publicaciones
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (2, 13, 1); --   P. Autores
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (2, 14, 1); --   P. Categorías
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (2, 15, 1); --   P. Fuentes
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (2, 16, 1); --   P. Regiones

INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (2, 17, 1); -- Catálogos
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (2, 18, 1); --   Autores
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (2, 19, 1); --   Categorías
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (2, 20, 1); --   Fuentes
INSERT INTO adm_roles (departamento, modulo, permiso_maximo) VALUES (2, 21, 1); --   Regiones
