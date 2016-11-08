<?php
/**
 * GenesisPHP - Semilla
 *
 * @package GenesisPHP
 */

namespace Semillas;

/**
 * Clase Adan0115CatCategorias
 */
class Adan0115CatCategorias extends \Arbol\Adan {

    // Nombre de este modulo
    public $nombre = 'CatCategorias';

    // Nombre de la tabla
    public $tabla_nombre = 'cat_categorias';

    // Datos de la tabla
    public $tabla = array(
        'id'      => array('tipo' => 'serial'),

        'nombre'  => array('tipo' => 'nombre',   'etiqueta' => 'Nombre',  'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 11, 'orden' => 1, 'vip' => 2),

        'notas'   => array('tipo' => 'notas',    'etiqueta' => 'Notas',   'validacion' => 1, 'agregar' => 1, 'modificar' => 1),
        'estatus' => array('tipo' => 'caracter', 'etiqueta' => 'Estatus', 'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 99,
            'descripciones' => array('A' => 'En Uso',       'B' => 'Eliminado'),
            'etiquetas'     => array('A' => 'En Uso',       'B' => 'Eliminado'),
            'colores'       => array('A' => 'blanco',       'B' => 'gris'),
            'acciones'      => array('A' => 'listadoenuso', 'B' => 'listadoeliminados'))
    );

    // Reptil es leido por Serpiente
    static public $reptil = array(
        'etiqueta_singular'  => 'Categoría',
        'etiqueta_plural'    => 'Categorías',
        'nom_corto_singular' => 'categoría',
        'nom_corto_plural'   => 'categorías',
        'mensaje_singular'   => 'la categoría',
        'mensaje_plural'     => 'las categorías',
        'clave'              => 'cat_categorias',
        'clase_singular'     => 'CatCategoria',
        'clase_plural'       => 'CatCategorias',
        'instancia_singular' => 'cat_categoria',
        'instancia_plural'   => 'cat_categorias',
        'archivo_singular'   => 'catcategoria',
        'archivo_plural'     => 'catcategorias',
        'tabla'              => 'cat_categorias',
        'vip'                => array(
            'nombre' => array('tipo' => 'nombre', 'etiqueta' => 'Categoría', 'filtro' => 1))
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
        $this->hijos['publicaciones'] = $serpiente->obtener_datos_del_modulo('PubPublicacionesCategorias');
        // Siempre se debe de cargar de serpiente esta informacion
        $this->sustituciones          = $serpiente->obtener_sustituciones($this->nombre);
        $this->instancia_singular     = $serpiente->obtener_instancia_singular($this->nombre);
        $this->estatus                = $serpiente->obtener_estatus($this->nombre);
    } // constructor

} // Clase Adan0115CatCategorias

?>
