<?php
/**
 * GenesisPHP - Semilla
 *
 * @package GenesisPHP
 */

namespace Semillas;

/**
 * Clase Adan0155PubPublicacionesCategorias
 */
class Adan0155PubPublicacionesCategorias extends \Arbol\Adan {

    // Nombre de este modulo
    public $nombre = 'PubPublicacionesCategorias';

    // Nombre de la tabla
    public $tabla_nombre = 'pub_publicaciones_categorias';

    // Datos de la tabla
    public $tabla = array(
        'id'          => array('tipo' => 'serial'),
        'publicacion' => array('tipo' => 'relacion', 'etiqueta' => 'Publicación', 'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 61),
        'categoria'   => array('tipo' => 'relacion', 'etiqueta' => 'Categoría',   'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 71, 'orden' => 1, 'vip' => 2),

        'estatus'     => array('tipo' => 'caracter', 'etiqueta' => 'Estatus',     'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 99,
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
        'clave'              => 'pub_publicaciones_categorias',
        'clase_singular'     => 'PubPublicacionCategoria',
        'clase_plural'       => 'PubPublicacionesCategorias',
        'instancia_singular' => 'pub_publicacion_categoria',
        'instancia_plural'   => 'pub_publicaciones_categorias',
        'archivo_singular'   => 'pubpublicacioncategoria',
        'archivo_plural'     => 'pubpublicacionescategorias',
        'tabla'              => 'pub_publicaciones_categorias',
        'vip'                => array(
            'categoria' => array('tipo' => 'relacion', 'etiqueta' => 'Categoría', 'filtro' => 1))
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
        $this->relaciones['categoria']   = $serpiente->obtener_datos_del_modulo('CatCategorias');
        // Padre, el módulo que mostrará a éste como un listado debajo de aquel
        $this->padre['publicacion']      = $serpiente->obtener_datos_del_modulo('PubPublicaciones');
        $this->padre['categoria']        = $serpiente->obtener_datos_del_modulo('CatCategorias');
        // Siempre se debe de cargar de serpiente esta informacion
        $this->sustituciones             = $serpiente->obtener_sustituciones($this->nombre);
        $this->instancia_singular        = $serpiente->obtener_instancia_singular($this->nombre);
        $this->estatus                   = $serpiente->obtener_estatus($this->nombre);
    } // constructor

} // Clase Adan0155PubPublicacionesCategorias

?>
