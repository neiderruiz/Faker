<?php

namespace Faker\Provider\es_CO;

class Payment extends \Faker\Provider\Payment
{
    private static $vatMap = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

    /**
     * Generate a random bank account number for Colombia.
     *
     * @param string $prefix
     * @param string $countryCode
     * @param int    $length
     *
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'CO', $length = 10)
    {
        return $prefix . static::numerify(str_repeat('#', $length));
    }

    /**
     * Número de Identificación Tributaria (NIT)
     *
     * @example '9001234567'
     *
     * @see https://es.wikipedia.org/wiki/N%C3%BAmero_de_identificaci%C3%B3n_tributaria
     *
     * @return string NIT Number
     */
    public static function vat()
    {
        $number = static::numerify('#########');
        $checkDigit = static::randomElement(self::$vatMap);

        return $number . $checkDigit;
    }
}
