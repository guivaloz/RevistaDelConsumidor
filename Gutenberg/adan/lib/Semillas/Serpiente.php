<?php
/**
 * GenesisPHP - Serpiente
 *
 * @package RevistaDelConsumidorGutenberg
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
    } // constructor

} // Clase Serpiente

?>
