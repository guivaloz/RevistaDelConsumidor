<?php
/**
 * GenesisPHP - Serpiente
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
 * Clase Serpiente
 */
class Serpiente extends \Arbol\Serpiente {

    // protected $sistema_nombre;
    // protected $sistema_siglas;
    // protected $reptil;

    /**
     * Constructor
     */
    public function __construct() {
        // Definir nombre y siglas del sistema
        $this->sistema_nombre = 'Gutenberg';
        $this->sistema_siglas = 'RDC';
        // Cargar reptiles de las semillas
        $this->reptil['CatSecciones']               = Adan0111CatSecciones::$reptil;
        $this->reptil['CatAutores']                 = Adan0113CatAutores::$reptil;
        $this->reptil['CatCategorias']              = Adan0115CatCategorias::$reptil;
        $this->reptil['CatFuentes']                 = Adan0117CatFuentes::$reptil;
        $this->reptil['CatRegiones']                = Adan0119CatRegiones::$reptil;
        $this->reptil['PubPublicaciones']           = Adan0151PubPublicaciones::$reptil;
        $this->reptil['PubPublicacionesAutores']    = Adan0153PubPublicacionesAutores::$reptil;
        $this->reptil['PubPublicacionesCategorias'] = Adan0155PubPublicacionesCategorias::$reptil;
        $this->reptil['PubPublicacionesFuentes']    = Adan0157PubPublicacionesFuentes::$reptil;
        $this->reptil['PubPublicacionesRegiones']   = Adan0159PubPublicacionesRegiones::$reptil;
        $this->reptil['GutBitacoras']               = Adan0171GutBitacoras::$reptil;
    } // constructor

} // Clase Serpiente

?>
