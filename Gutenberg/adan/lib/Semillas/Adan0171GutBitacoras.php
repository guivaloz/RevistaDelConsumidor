<?php
/**
 * GenesisPHP - Adan0171GutBitacoras
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
 * Clase Adan0171GutBitacoras
 */
class Adan0171GutBitacoras extends \Arbol\Adan {

    // Nombre de este modulo
    public $nombre = 'GutBitacoras';

    // Nombre de la tabla
    public $tabla_nombre = 'gut_bitacoras';

    // Datos de la tabla
    public $tabla = array(
        'id'          => array('tipo' => 'serial'),

        'tiempo'      => array('tipo' => 'fecha_hora', 'etiqueta' => 'Tiempo',      'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 2, 'listado' => 11, 'orden' => -1, 'vip' => 2),
        'tipo'        => array('tipo' => 'caracter',   'etiqueta' => 'Tipo',        'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 12,
            'descripciones' => array('A' => 'Alimentado', 'C' => 'Creado',   'P' => 'Procesado'),
            'etiquetas'     => array('A' => 'Alimentado', 'C' => 'Creado',   'P' => 'Procesdo'),
            'colores'       => array('A' => 'verde',      'C' => 'amarillo', 'P' => 'azul')),
        'descripcion' => array('tipo' => 'nombre',     'etiqueta' => 'Descripción', 'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 13),
        'salida'      => array('tipo' => 'notas',      'etiqueta' => 'Salida',      'validacion' => 1, 'agregar' => 1, 'modificar' => 1),

        'estatus'     => array('tipo' => 'caracter',   'etiqueta' => 'Estatus',     'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 99,
            'descripciones' => array('A' => 'En Uso',       'B' => 'Eliminado'),
            'etiquetas'     => array('A' => 'En Uso',       'B' => 'Eliminado'),
            'colores'       => array('A' => 'blanco',       'B' => 'gris'),
            'acciones'      => array('A' => 'listadoenuso', 'B' => 'listadoeliminados'))
    );

    // Reptil es leido por Serpiente
    static public $reptil = array(
        'etiqueta_singular'  => 'Bitácora',
        'etiqueta_plural'    => 'Bitácoras',
        'nom_corto_singular' => 'bitácora',
        'nom_corto_plural'   => 'bitácoras',
        'mensaje_singular'   => 'la bitpacora',
        'mensaje_plural'     => 'las bitácoras',
        'clave'              => 'gut_bitacoras',
        'clase_singular'     => 'GutBitacora',
        'clase_plural'       => 'GutBitacoras',
        'instancia_singular' => 'gut_bitacora',
        'instancia_plural'   => 'gut_bitacoras',
        'archivo_singular'   => 'gutbitacora',
        'archivo_plural'     => 'gutbitacoras',
        'tabla'              => 'gut_bitacoras',
        'vip'                => array(
            'tiempo' => array('tipo' => 'fecha_hora', 'etiqueta' => 'Tiempo', 'filtro' => 1))
    );

    /**
     * Constructor
     */
    public function __construct() {
        // Programas a escribir
        $this->modulo_solo_consulta();
        $this->modulo_sin_herederos();
        // Obtener de serpiente
        $serpiente = new Serpiente();
        // Siempre se debe de cargar de serpiente esta informacion
        $this->sustituciones      = $serpiente->obtener_sustituciones($this->nombre);
        $this->instancia_singular = $serpiente->obtener_instancia_singular($this->nombre);
        $this->estatus            = $serpiente->obtener_estatus($this->nombre);
    } // constructor

} // Clase Adan0171GutBitacoras

?>
