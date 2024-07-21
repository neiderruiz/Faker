<?php

namespace Faker\Provider\es_CO;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = [
        'gmail.com', 'hotmail.com', 'yahoo.com', 'live.com', 'outlook.com', 'icloud.com', 'terra.com', 'etb.net.co', 'une.net.co'
    ];

    protected static $tld = [
        'com', 'com', 'com', 'net', 'org', 'co', 'com.co', 'gov.co', 'edu.co'
    ];
}
