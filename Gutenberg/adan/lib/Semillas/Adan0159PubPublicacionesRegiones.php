<?php
/**
 * GenesisPHP - Semilla
 *
 * @package GenesisPHP
 */

namespace Semillas;

/**
 * Clase Adan0159PubPublicacionesRegiones
 */
class Adan0159PubPublicacionesRegiones extends \Arbol\Adan {

    // Nombre de este modulo
    public $nombre = 'PubPublicacionesRegiones';

    // Nombre de la tabla
    public $tabla_nombre = 'pub_publicaciones_regiones';

    // Datos de la tabla
    public $tabla = array(
        'id'          => array('tipo' => 'serial'),
        'publicacion' => array('tipo' => 'relacion', 'etiqueta' => 'Publicación', 'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 61),
        'region'      => array('tipo' => 'relacion', 'etiqueta' => 'Categoría',   'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 71, 'orden' => 1, 'vip' => 2),

        'estatus'     => array('tipo' => 'caracter', 'etiqueta' => 'Estatus',     'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 99,
            'descripciones' => array('A' => 'En Uso',       'B' => 'Eliminado'),
            'etiquetas'     => array('A' => 'En Uso',       'B' => 'Eliminado'),
            'colores'       => array('A' => 'blanco',       'B' => 'gris'),
            'acciones'      => array('A' => 'listadoenuso', 'B' => 'listadoeliminados'))
    );

    // Reptil es leido por Serpiente
    static public $reptil = array(
        'etiqueta_singular'  => 'Región',
        'etiqueta_plural'    => 'Regiones',
        'nom_corto_singular' => 'región',
        'nom_corto_plural'   => 'regiones',
        'mensaje_singular'   => 'la región',
        'mensaje_plural'     => 'las regiones',
        'clave'              => 'pub_publicaciones_regiones',
        'clase_singular'     => 'PubPublicacionRegion',
        'clase_plural'       => 'PubPublicacionesRegiones',
        'instancia_singular' => 'pub_publicacion_region',
        'instancia_plural'   => 'pub_publicaciones_regiones',
        'archivo_singular'   => 'pubpublicacionregion',
        'archivo_plural'     => 'pubpublicacionesregiones',
        'tabla'              => 'pub_publicaciones_regiones',
        'vip'                => array(
            'region' => array('tipo' => 'relacion', 'etiqueta' => 'Región', 'filtro' => 1))
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
        // Relaciones, cada modulo con el que está relacionado sin incluir a los hijos
        $this->relaciones['seccion']     = $serpiente->obtener_datos_del_modulo('CatSecciones');
        $this->relaciones['publicacion'] = $serpiente->obtener_datos_del_modulo('PubPublicaciones');
        $this->relaciones['region']      = $serpiente->obtener_datos_del_modulo('CatRegiones');
        // Padre, el módulo que mostrará a éste como un listado debajo de aquel
        $this->padre['publicacion']      = $serpiente->obtener_datos_del_modulo('PubPublicaciones');
        $this->padre['region']           = $serpiente->obtener_datos_del_modulo('CatRegiones');
        // Hijos, los módulos que se mostrarán debajo del detalle como listados
    //~ $this->hijos['identificador']    = $serpiente->obtener_datos_del_modulo('XxxModuloNombre');
        // Siempre se debe de cargar de serpiente esta informacion
        $this->sustituciones             = $serpiente->obtener_sustituciones($this->nombre);
        $this->instancia_singular        = $serpiente->obtener_instancia_singular($this->nombre);
        $this->estatus                   = $serpiente->obtener_estatus($this->nombre);
    } // constructor

} // Clase Adan0159PubPublicacionesRegiones

?>
