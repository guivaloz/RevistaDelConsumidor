<?php
/**
 * Gutenberg - Procesar
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

namespace GutProcesadores;

/**
 * Clase Procesar
 *
 * PROCESAR cada registro de Publicación en la base de datos para clasificarla.
 */
class Procesar {

    protected $sesion;

    /**
     * Constructor
     */
    public function __construct(\Inicio\Sesion $in_sesion) {
        $this->sesion = $in_sesion;
    } // constructor

    /**
     * Procesar
     */
    public function procesar() {
        // Consultar publicaciones
        // Bucle por las publicaciones
        // Clasificar autores
        // Clasificar categorias
        // Clasificar fuentes
        // Clasificar regiones
        // Agregar registro de trabajo hecho
    } // procesar

} // Clase Procesar

?>
