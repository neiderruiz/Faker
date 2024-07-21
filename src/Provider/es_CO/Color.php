<?php

namespace Faker\Provider\es_CO;

class Color extends \Faker\Provider\Color
{
    protected static $safeColorNames = [
        'amarillo',
        'azul marino',
        'azul',
        'blanco',
        'celeste',
        'gris',
        'lima',
        'magenta',
        'marrón',
        'morado',
        'negro',
        'plata',
        'turquesa',
        'verde',
        'verde oliva',
        'rojo',
        'naranja',
        'rosa',
        'violeta',
        'beige',
        'azul claro',
        'ocre',
        'salmon',
        'fucsia',
        'café',
        'lavanda',
        'granate',
        'cian',
        'púrpura',
        'azul rey',
        'verde menta',
        'coral',
        'vino',
        'champán'
    ];

    public static function colorName()
    {
        return static::randomElement(static::$safeColorNames);
    }

}
