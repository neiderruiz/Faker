<?php

namespace Faker\Provider\es_CO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+57 3## ## ####',
        '+57 3## ######',
        '+57 3########',
        '+57 3##-##-####',
        '+57 3##-######',
        '3## ## ####',
        '3## ######',
        '3########',
        '3##-##-####',
        '3##-######',
    ];

    protected static $mobileFormats = [
        '+57 3## ## ####',
        '+57 3## ######',
        '+57 3########',
        '+57 3##-##-####',
        '+57 3##-######',
        '3## ## ####',
        '3## ######',
        '3########',
        '3##-##-####',
        '3##-######',
    ];

    protected static $tollFreeFormats = [
        '01800 ### ###',
        '01800 ### ####',
        '01800 ## ## ##',
    ];

    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::$tollFreeFormats));
    }
}
