<?php

namespace Faker\Provider\es_CO;

class Person extends \Faker\Provider\Person
{
    private static $crcMap = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
    ];

    /**
     * {@link} http://www.ine.es/daco/daco42/nombyapel/nombyapel.htm
     * {@link} http://www.ine.es/dyngs/INEbase/es/operacion.htm?c=Estadistica_C&cid=1254736177009&menu=ultiDatos&idp=1254734710990
     * Manually added accent marks because the source lacks of them
     */
    protected static $firstNameMale = [
        'Juan', 'Carlos', 'Luis', 'Pedro', 'José', 'Miguel', 'Andrés', 'Jorge', 'Santiago', 'Diego',
        'Fernando', 'Alejandro', 'Ricardo', 'David', 'Sebastián', 'Gabriel', 'Mauricio', 'Javier',
        'Felipe', 'Nicolás', 'Álvaro', 'Hernán', 'Camilo', 'Rodrigo', 'César', 'Martín', 'Lucas',
        'Manuel', 'Gustavo', 'Antonio','Jaider', 'Neider', 'Daniel'
    ];

    protected static $firstNameFemale = [
        'María', 'Laura', 'Ana', 'Carmen', 'Lucía', 'Sandra', 'Carolina', 'Isabel', 'Patricia', 'Diana',
        'Claudia', 'Paola', 'Adriana', 'Catalina', 'Verónica', 'Liliana', 'Margarita', 'Rosa', 'Valentina',
        'Andrea', 'Lorena', 'Daniela', 'Beatriz', 'Gloria', 'Silvia', 'Tatiana', 'Alejandra', 'Marina',
        'Natalia', 'Elena', 'Rossy', 'Aurora', 'Michelle', 'Nancy', 'Maritza','Derly'
    ];

    protected static $lastName = [
        'García', 'Martínez', 'Rodríguez', 'López', 'González', 'Pérez', 'Hernández', 'Sánchez',
        'Ramírez', 'Torres', 'Álvarez', 'Gómez', 'Díaz', 'Jiménez', 'Moreno', 'Muñoz', 'Ortiz',
        'Ruiz', 'Vargas', 'Castro', 'Mendoza', 'Rojas', 'Guerrero', 'Vega', 'Peña', 'Cruz', 'Mora',
        'Navarro', 'Rivera', 'Reyes'
    ];

    protected static $titleMale = [
        'Sr.', 'D.', 'Dr.', 'Lic.', 'Ing.', 'Arq.', 'Profr.', 'C.P.', 'M.C.', 'M.D.'
    ];

    protected static $titleFemale = [
        'Sra.', 'Srta.', 'Dña', 'Dr.', 'Lic.', 'Ing.', 'Arq.', 'Profra.', 'C.P.', 'M.C.', 'M.D.'
    ];


    protected static $licenceCodes = [
        'AM', 'A1', 'A2', 'A', 'B', 'C1', 'C', 'D1', 'D'
    ];

    /**
     * Generate a Documento Nacional de Identidad (DNI) number
     *
     * @example '77446565E'
     *
     * @see https://es.wikibooks.org/wiki/Algoritmo_para_obtener_la_letra_del_NIF#Algoritmo
     */
    public static function dni()
    {
        $number = static::numerify('############');
        $letter = self::$crcMap[$number % 23];

        return $number . $letter;
    }

    /**
     * @see https://sede.dgt.gob.es/es/tramites-y-multas/permiso-de-conduccion/obtencion-permiso-licencia-conduccion/clases-permiso-conduccion-edad.shtml
     *
     * @return string
     */
    public function licenceCode()
    {
        return static::randomElement(static::$licenceCodes);
    }
}
