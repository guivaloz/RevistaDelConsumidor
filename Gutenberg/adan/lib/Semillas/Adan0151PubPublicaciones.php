<?php
/**
 * GenesisPHP - Semilla
 *
 * @package GenesisPHP
 */

namespace Semillas;

/**
 * Clase Adan0151PubPublicaciones
 */
class Adan0151PubPublicaciones extends \Arbol\Adan {

    // Nombre de este modulo
    public $nombre = 'PubPublicaciones';

    // Nombre de la tabla
    public $tabla_nombre = 'pub_publicaciones';

    // Datos de la tabla
    public $tabla = array(
        'id'                 => array('tipo' => 'serial'),
        'seccion'            => array('tipo' => 'relacion', 'etiqueta' => 'Sección',        'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 61),

        'fecha'              => array('tipo' => 'fecha',    'etiqueta' => 'Fecha',          'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 2, 'listado' => 11),
        'nombre'             => array('tipo' => 'nombre',   'etiqueta' => 'Nombre',         'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 12, 'orden' => 1, 'vip' => 2),
        'descripcion'        => array('tipo' => 'frase',    'etiqueta' => 'Descripción',    'validacion' => 1, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 13),
        'palabras_clave'     => array('tipo' => 'nombre',   'etiqueta' => 'Palabras clave', 'validacion' => 1, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 14),

        'autores_captura'    => array('tipo' => 'nombre',   'etiqueta' => 'Autores',        'validacion' => 1, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 21),
        'categorias_captura' => array('tipo' => 'nombre',   'etiqueta' => 'Categorías',     'validacion' => 1, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 23),
        'fuentes_captura'    => array('tipo' => 'nombre',   'etiqueta' => 'Fuentes',        'validacion' => 1, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 24),
        'regiones_captura'   => array('tipo' => 'nombre',   'etiqueta' => 'Regiones',       'validacion' => 1, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 25),

        'clase'              => array('tipo' => 'nombre',   'etiqueta' => 'Clase',          'validacion' => 1, 'agregar' => 1, 'modificar' => 1),
        'archivo'            => array('tipo' => 'nombre',   'etiqueta' => 'Archivo',        'validacion' => 1, 'agregar' => 1, 'modificar' => 1),

        'notas'              => array('tipo' => 'notas',    'etiqueta' => 'Notas',          'validacion' => 1, 'agregar' => 1, 'modificar' => 1),
        'estatus'            => array('tipo' => 'caracter', 'etiqueta' => 'Estatus',        'validacion' => 2, 'agregar' => 1, 'modificar' => 1, 'filtro' => 1, 'listado' => 99,
            'descripciones' => array('A' => 'En Uso',       'B' => 'Eliminado'),
            'etiquetas'     => array('A' => 'En Uso',       'B' => 'Eliminado'),
            'colores'       => array('A' => 'blanco',       'B' => 'gris'),
            'acciones'      => array('A' => 'listadoenuso', 'B' => 'listadoeliminados'))
    );

    // Reptil es leido por Serpiente
    static public $reptil = array(
        'etiqueta_singular'  => 'Publicación',
        'etiqueta_plural'    => 'Publicaciones',
        'nom_corto_singular' => 'publicación',
        'nom_corto_plural'   => 'publicaciones',
        'mensaje_singular'   => 'la publicación',
        'mensaje_plural'     => 'las publicaciones',
        'clave'              => 'pub_publicaciones',
        'clase_singular'     => 'PubPublicacion',
        'clase_plural'       => 'PubPublicaciones',
        'instancia_singular' => 'pub_publicacion',
        'instancia_plural'   => 'pub_publicaciones',
        'archivo_singular'   => 'pubpublicacion',
        'archivo_plural'     => 'pubpublicaciones',
        'tabla'              => 'pub_publicaciones',
        'vip'                => array(
            'nombre' => array('tipo' => 'nombre', 'etiqueta' => 'Publicación', 'filtro' => 1))
    );

    /**
     * Constructor
     */
    public function __construct() {
        // Programas a escribir
        $this->modulo_completo();
        // Obtener de serpiente
        $serpiente = new Serpiente();
        // Relaciones, cada modulo con el que está relacionado sin incluir a los hijos
        $this->relaciones['seccion']  = $serpiente->obtener_datos_del_modulo('CatSecciones');
        // Padre, el módulo que mostrará a éste como un listado debajo de aquel
        $this->padre['seccion']       = $serpiente->obtener_datos_del_modulo('CatSecciones');
        // Hijos, los módulos que se mostrarán debajo del detalle como listados
        $this->hijos['autores']       = $serpiente->obtener_datos_del_modulo('PubPublicacionesAutores');
        $this->hijos['categorias']    = $serpiente->obtener_datos_del_modulo('PubPublicacionesCategorias');
        $this->hijos['fuentes']       = $serpiente->obtener_datos_del_modulo('PubPublicacionesFuentes');
        $this->hijos['regiones']      = $serpiente->obtener_datos_del_modulo('PubPublicacionesRegiones');
        // Siempre se debe de cargar de serpiente esta informacion
        $this->sustituciones          = $serpiente->obtener_sustituciones($this->nombre);
        $this->instancia_singular     = $serpiente->obtener_instancia_singular($this->nombre);
        $this->estatus                = $serpiente->obtener_estatus($this->nombre);
    } // constructor

} // Clase Adan0151PubPublicaciones

?>
