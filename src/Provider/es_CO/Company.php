<?php

namespace Faker\Provider\es_CO;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}}-{{lastName}}',
        '{{lastName}}-{{lastName}} {{companySuffix}}',
        '{{lastName}} y {{lastName}} {{companySuffix}}',
        '{{lastName}} de {{lastName}} {{companySuffix}}',
        '{{lastName}}, {{lastName}} y {{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}} y {{lastName}}',
        '{{lastName}} de {{lastName}}',
    ];

    protected static $catchPhraseWords = [
        ['Innovadora', 'Avanzada', 'Automatizada', 'Balanceada', 'Centrada en el cliente', 'Configurable', 'Descentralizada', 'Digitalizada', 'Diversa', 'Optimizada', 'Personalizada', 'Proactiva', 'Responsiva', 'Sincronizada', 'Sostenible', 'Vertical'],
        ['24/7', 'de última generación', 'orientada a resultados', 'a medida', 'flexible', 'global', 'integrada', 'interactiva', 'multicanal', 'robusta', 'transparente', 'virtual'],
        ['soluciones', 'servicios', 'tecnologías', 'plataformas', 'redes', 'sistemas', 'infraestructuras', 'portales', 'estrategias', 'modelos', 'procesos', 'métricas', 'sinergias']
    ];

    protected static $bsWords = [
        ['implementar', 'utilizar', 'integrar', 'optimizar', 'transformar', 'habilitar', 'orquestar', 'impulsar', 'sinergizar', 'desplegar', 'monetizar'],
        ['proactivo', 'robusto', 'escalable', 'innovador', 'estratégico', 'global', 'virtual', 'dinámico', 'interactivo', 'eficiente', 'distribuido', 'extensible'],
        ['soluciones', 'plataformas', 'infraestructuras', 'tecnologías', 'modelos', 'estrategias', 'sistemas', 'redes', 'métricas', 'procesos']
    ];

    protected static $companyPrefix = [
        'Asociación', 'Corporación', 'Empresa', 'Fundación', 'Grupo', 'Instituto', 'Organización', 'Servicios', 'Soluciones', 'Tecnologías', 'Viajes'
    ];

    protected static $companySuffix = [
        'S.A.S.', 'S.A.', 'Ltda.', 'E.U.', 'Coop.', 'S. en C.', 'S.C.A.', 'S. de R.L.', 'S. en C. por A.', 'Cía.', 'Fundación'
    ];

    /**
     * @example 'Grupo'
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * @example 'S.A.S.'
     */
    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }

    /**
     * @example 'Innovadora plataforma de soluciones'
     */
    public function catchPhrase()
    {
        $result = [];

        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * @example 'implementar soluciones escalables'
     */
    public function bs()
    {
        $result = [];

        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

        return implode(' ', $result);
    }

    /**
     * @example 'Asociación García S.A.S.'
     */
    public function company()
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }
}
