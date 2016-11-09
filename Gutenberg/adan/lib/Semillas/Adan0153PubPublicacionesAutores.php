<?php
/**
 * GenesisPHP - Semilla
 *
 * Copyright (C) 2016 Guillermo Valdes Lozano guillermo@movimientolibre.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package Gutenberg
 */

namespace Semillas;

/**
 * Clase Adan0153PubPublicacionesAutores
 */
class Adan0153PubPublicacionesAutores extends \Arbol\Adan {

    // Nombre de este modulo
    public $nombre = 'PubPublicacionesAutores';

    // Nombre de la tabla
    public $tabla_nombre = 'pub_publicaciones_autores';

    // Datos de la tabla
    public $tabla = array(
        'id'          => array('tipo' => 'serial'),
        'publicacion' => array('tipo' => 'relacion', 'etiqueta' => 'Publicación', 'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 61),
        'autor'       => array('tipo' => 'relacion', 'etiqueta' => 'Autor',       'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 71, 'orden' => 1, 'vip' => 2),

        'estatus'     => array('tipo' => 'caracter', 'etiqueta' => 'Estatus',     'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 99,
            'descripciones' => array('A' => 'En Uso',       'B' => 'Eliminado'),
            'etiquetas'     => array('A' => 'En Uso',       'B' => 'Eliminado'),
            'colores'       => array('A' => 'blanco',       'B' => 'gris'),
            'acciones'      => array('A' => 'listadoenuso', 'B' => 'listadoeliminados'))
    );

    // Reptil es leido por Serpiente
    static public $reptil = array(
        'etiqueta_singular'  => 'Autor',
        'etiqueta_plural'    => 'Autores',
        'nom_corto_singular' => 'autor',
        'nom_corto_plural'   => 'autores',
        'mensaje_singular'   => 'el autor',
        'mensaje_plural'     => 'los autores',
        'clave'              => 'pub_publicaciones_autores',
        'clase_singular'     => 'PubPublicacionAutor',
        'clase_plural'       => 'PubPublicacionesAutores',
        'instancia_singular' => 'pub_publicacion_autor',
        'instancia_plural'   => 'pub_publicaciones_autores',
        'archivo_singular'   => 'pubpublicacionautor',
        'archivo_plural'     => 'pubpublicacionesautores',
        'tabla'              => 'pub_publicaciones_autores',
        'vip'                => array(
            'autor' => array('tipo' => 'relacion', 'etiqueta' => 'Autor', 'filtro' => 1))
    );

    /**
     * Constructor
     */
    public function __construct() {
        // Programas a escribir
        $this->modulo_sin_herederos();
        // Obtener de serpiente
        $serpiente = new Serpiente();
        // Relaciones, cada modulo con el que está relacionado sin incluir a los hijos
        $this->relaciones['seccion']     = $serpiente->obtener_datos_del_modulo('CatSecciones');
        $this->relaciones['publicacion'] = $serpiente->obtener_datos_del_modulo('PubPublicaciones');
        $this->relaciones['autor']       = $serpiente->obtener_datos_del_modulo('CatAutores');
        // Padre, el módulo que mostrará a éste como un listado debajo de aquel
        $this->padre['publicacion']      = $serpiente->obtener_datos_del_modulo('PubPublicaciones');
        $this->padre['autor']            = $serpiente->obtener_datos_del_modulo('CatAutores');
        // Siempre se debe de cargar de serpiente esta informacion
        $this->sustituciones             = $serpiente->obtener_sustituciones($this->nombre);
        $this->instancia_singular        = $serpiente->obtener_instancia_singular($this->nombre);
        $this->estatus                   = $serpiente->obtener_estatus($this->nombre);
    } // constructor

} // Clase Adan0153PubPublicacionesAutores

?>
