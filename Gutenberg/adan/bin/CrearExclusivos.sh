#!/bin/bash

#
# GenesisPHP - Crear Exclusivos
#
# Copyright 2016 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
# MA 02110-1301, USA.
#

# Yo soy
SOY="[Crear Exclusivos]"

# Constantes que definen los tipos de errores
EXITO=0
E_FATAL=99

# Constantes
SITIO_WEB_DIR="${HOME}/Documentos/GitHub/MovimientoLibre/revistadelconsumidor"

# Validar que exista el directorio Eva
if [ ! -d ../Eva ]; then
    echo "$SOY ERROR: No existe el directorio Eva."
    echo "  Debe ejecutar este script en el directorio del sistema."
    echo "  O mejor con Dios.sh que se encarga de ésto."
    exit $E_FATAL
fi

#
# Escriba aquí los comandos exclusivos para este sistema
#

echo "$SOY Creando enlace de Base del sitio web..."
ln -s $SITIO_WEB_DIR/lib/Base                htdocs/lib/
echo "$SOY Creando enlace de EstudiosDeCalidad del sitio web..."
ln -s $SITIO_WEB_DIR/lib/EstudiosDeCalidad   htdocs/lib/
echo "$SOY Creando enlace de PlatilloSabio del sitio web..."
ln -s $SITIO_WEB_DIR/lib/PlatilloSabio       htdocs/lib/
echo "$SOY Creando enlace de TecnologiaDomestica del sitio web..."
ln -s $SITIO_WEB_DIR/lib/TecnologiaDomestica htdocs/lib/

echo "$SOY Creando enlace de PublicacionConfig.php del sitio web..."
ln -s $SITIO_WEB_DIR/lib/Configuracion/PublicacionConfig.php htdocs/lib/Configuracion/

echo "$SOY Script terminado."
exit $EXITO
