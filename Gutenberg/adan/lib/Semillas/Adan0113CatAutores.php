<?php
/**
 * GenesisPHP - Semilla
 *
 * @package GenesisPHP
 */

namespace Semillas;

/**
 * Clase Adan0113CatAutores
 */
class Adan0113CatAutores extends \Arbol\Adan {

    // Nombre de este modulo
    public $nombre = 'CatAutores';

    // Nombre de la tabla
    public $tabla_nombre = 'cat_autores';

    // Datos de la tabla
    public $tabla = array(
        'id'      => array('tipo' => 'serial'),

        'nombre'  => array('tipo' => 'nombre',   'etiqueta' => 'Nombre',  'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 11, 'orden' => 1, 'vip' => 2),
        'puesto'  => array('tipo' => 'nombre',   'etiqueta' => 'Puesto',  'validacion' => 1, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 12),
        'area'    => array('tipo' => 'nombre',   'etiqueta' => 'Área',    'validacion' => 1, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 13),

        'notas'   => array('tipo' => 'notas',    'etiqueta' => 'Notas',   'validacion' => 1, 'agregar' => 1, 'modificar' => 1),
        'estatus' => array('tipo' => 'caracter', 'etiqueta' => 'Estatus', 'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 99,
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
        'clave'              => 'cat_autores',
        'clase_singular'     => 'CatAutor',
        'clase_plural'       => 'CatAutores',
        'instancia_singular' => 'cat_autor',
        'instancia_plural'   => 'cat_autores',
        'archivo_singular'   => 'catautor',
        'archivo_plural'     => 'catautores',
        'tabla'              => 'cat_autores',
        'vip'                => array(
            'nombre' => array('tipo' => 'nombre', 'etiqueta' => 'Autor', 'filtro' => 1))
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
        $this->hijos['publicaciones'] = $serpiente->obtener_datos_del_modulo('PubPublicacionesAutores');
        // Siempre se debe de cargar de serpiente esta informacion
        $this->sustituciones          = $serpiente->obtener_sustituciones($this->nombre);
        $this->instancia_singular     = $serpiente->obtener_instancia_singular($this->nombre);
        $this->estatus                = $serpiente->obtener_estatus($this->nombre);
    } // constructor

} // Clase Adan0113CatAutores

?>
