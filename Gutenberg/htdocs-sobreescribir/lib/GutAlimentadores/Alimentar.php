<?php
/**
 * Gutenberg - Alimentar
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

namespace GutAlimentadores;

/**
 * Clase Alimentar
 *
 * Obtener los archivos PHP de las Publicaciones para ALIMENTAR la Base de Datos.
 */
class Alimentar {

    protected $sesion;

    /**
     * Constructor
     */
    public function __construct(\Inicio\Sesion $in_sesion) {
        $this->sesion = $in_sesion;
    } // constructor

    /**
     * Recolectar archivos
     *
     * @param  string Nombre del directorio (namespace)
     * @return array  Arreglo con textos de la forma \Namespace\Clase
     */
    protected function recolectar_archivos($directorio) {
        // Definir la ruta
        $ruta = "lib/$directorio";
        // Si no existe el directorio
        if (!is_dir($ruta)) {
            throw new \Exception("Aviso: No existe la ruta $ruta");
        }
        // Obtener el listado con los archivos PHP
        $globo = glob("$ruta/*.php");
        if ($globo === false) {
            throw new \Exception("Aviso: Falló la obtención de archivos PHP en $ruta");
        }
        if (count($globo) == 0) {
            throw new \Exception("Aviso: No hay archivos PHP en $ruta");
        }
        // Bucle en los archivos encontrados
        $a = array();
        foreach ($globo as $archivo) {
            // Definir la ruta a la clase
            $a[] = '\\'.$directorio.'\\'.basename($archivo, '.php');
        }
        // Entregar
        return $a;
    } // recolectar_archivos

    /**
     * Alimentar
     */
    public function alimentar() {
        // Acumularemos mensajes en esta variable
        $mensajes = array();
        // Consultar secciones
        $secciones          = new \CatSecciones\Listado($this->sesion);
        $secciones->estatus = 'A';
        try {
            $secciones->consultar();
        } catch (\Base2\ListadoExceptionVacio $e) {
            throw $e;
        }
        // Bucle por las secciones
        foreach ($secciones->listado as $s) {
            // Consultar la seccion en turno
            $seccion          = new \CatSecciones\Registro($this->sesion);
            $seccion->id      = $s['id'];
            $seccion->estatus = 'A';
            $seccion->consultar();
            // Recolectar archivos de la seccion
            $mensajes[] = "  Directorio: {$seccion->directorio}";
            try {
                $archivos = $this->recolectar_archivos($seccion->directorio);
            } catch (\Exception $e) {
                throw $e;
            }
            // Bucle por los archivos de la seccion
            foreach ($archivos as $archivo) {
                $mensajes[] = "    Archivo: $archivo";
                // Cargar publicacion
                $publicacion = new $archivo($this->sesion);
                if ($publicacion instanceof \Base\Publicacion) {
                    $mensajes[] = "      Publicación.";
                    // Si NO se encuentra, agregar publicacion a la base de datos
                    // Si se ha modificado, actualizar publicacion en la base de datos
                } else {
                    $mensajes[] = "      NO es Publicación.";
                }
            }
        }
        // Agregar registro de trabajo hecho
        // Entregar mensajes
        return implode("\n", $mensajes);
    } // alimentar

} // Clase Alimentar

?>
