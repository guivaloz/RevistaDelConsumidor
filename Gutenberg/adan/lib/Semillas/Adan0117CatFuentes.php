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
 * Clase Adan0117CatFuentes
 */
class Adan0117CatFuentes extends \Arbol\Adan {

    // Nombre de este modulo
    public $nombre = 'CatFuentes';

    // Nombre de la tabla
    public $tabla_nombre = 'cat_fuentes';

    // Datos de la tabla
    public $tabla = array(
        'id'        => array('tipo' => 'serial'),

        'nombre'    => array('tipo' => 'nombre',   'etiqueta' => 'Nombre',    'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 11, 'orden' => 1, 'vip' => 2),
        'sitio_web' => array('tipo' => 'nombre',   'etiqueta' => 'Sitio Web', 'validacion' => 1, 'agregar' => 1, 'modificar' => 1,                'listado' => 12),

        'notas'     => array('tipo' => 'notas',    'etiqueta' => 'Notas',     'validacion' => 1, 'agregar' => 1, 'modificar' => 1),
        'estatus'   => array('tipo' => 'caracter', 'etiqueta' => 'Estatus',   'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 99,
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
        'clave'              => 'cat_fuentes',
        'clase_singular'     => 'CatFuente',
        'clase_plural'       => 'CatFuentes',
        'instancia_singular' => 'cat_fuente',
        'instancia_plural'   => 'cat_fuentes',
        'archivo_singular'   => 'catfuente',
        'archivo_plural'     => 'catfuentes',
        'tabla'              => 'cat_fuentes',
        'vip'                => array(
            'nombre' => array('tipo' => 'nombre', 'etiqueta' => 'Fuente', 'filtro' => 1))
    );

    /**
     * Constructor
     */
    public function __construct() {
        // Programas a escribir
        $this->modulo_completo();
        // Obtener de serpiente
        $serpiente = new Serpiente();
        // Hijos, los módulos que se mostrarán debajo del detalle como listados
        $this->hijos['publicaciones'] = $serpiente->obtener_datos_del_modulo('PubPublicacionesFuentes');
        // Siempre se debe de cargar de serpiente esta informacion
        $this->sustituciones          = $serpiente->obtener_sustituciones($this->nombre);
        $this->instancia_singular     = $serpiente->obtener_instancia_singular($this->nombre);
        $this->estatus                = $serpiente->obtener_estatus($this->nombre);
    } // constructor

} // Clase Adan0117CatFuentes

?>
