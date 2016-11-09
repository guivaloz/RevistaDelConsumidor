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
 * Clase Adan0157PubPublicacionesFuentes
 */
class Adan0157PubPublicacionesFuentes extends \Arbol\Adan {

    // Nombre de este modulo
    public $nombre = 'PubPublicacionesFuentes';

    // Nombre de la tabla
    public $tabla_nombre = 'pub_publicaciones_fuentes';

    // Datos de la tabla
    public $tabla = array(
        'id'          => array('tipo' => 'serial'),
        'publicacion' => array('tipo' => 'relacion', 'etiqueta' => 'Publicación', 'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 61),
        'fuente'      => array('tipo' => 'relacion', 'etiqueta' => 'Categoría',   'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 71, 'orden' => 1, 'vip' => 2),

        'estatus'     => array('tipo' => 'caracter', 'etiqueta' => 'Estatus',     'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 99,
            'descripciones' => array('A' => 'En Uso',       'B' => 'Eliminado'),
            'etiquetas'     => array('A' => 'En Uso',       'B' => 'Eliminado'),
            'colores'       => array('A' => 'blanco',       'B' => 'gris'),
            'acciones'      => array('A' => 'listadoenuso', 'B' => 'listadoeliminados'))
    );

    // Reptil es leido por Serpiente
    static public $reptil = array(
        'etiqueta_singular'  => 'Fuente',
        'etiqueta_plural'    => 'Fuentes',
        'nom_corto_singular' => 'fuente',
        'nom_corto_plural'   => 'fuentes',
        'mensaje_singular'   => 'la fuente',
        'mensaje_plural'     => 'las fuentes',
        'clave'              => 'pub_publicaciones_fuentes',
        'clase_singular'     => 'PubPublicacionFuente',
        'clase_plural'       => 'PubPublicacionesFuentes',
        'instancia_singular' => 'pub_publicacion_fuente',
        'instancia_plural'   => 'pub_publicaciones_fuentes',
        'archivo_singular'   => 'pubpublicacionfuente',
        'archivo_plural'     => 'pubpublicacionesfuentes',
        'tabla'              => 'pub_publicaciones_fuentes',
        'vip'                => array(
            'fuente' => array('tipo' => 'relacion', 'etiqueta' => 'Fuente', 'filtro' => 1))
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
        $this->relaciones['fuente']      = $serpiente->obtener_datos_del_modulo('CatFuentes');
        // Padre, el módulo que mostrará a éste como un listado debajo de aquel
        $this->padre['publicacion']      = $serpiente->obtener_datos_del_modulo('PubPublicaciones');
        $this->padre['fuente']           = $serpiente->obtener_datos_del_modulo('CatFuentes');
        // Siempre se debe de cargar de serpiente esta informacion
        $this->sustituciones             = $serpiente->obtener_sustituciones($this->nombre);
        $this->instancia_singular        = $serpiente->obtener_instancia_singular($this->nombre);
        $this->estatus                   = $serpiente->obtener_estatus($this->nombre);
    } // constructor

} // Clase Adan0157PubPublicacionesFuentes

?>
