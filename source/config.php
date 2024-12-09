<?php


if ( ! file_exists(__DIR__ . '/../.env')) 
{
    die('Geen .env bestand gevonden');
}

$envSettings = parse_ini_file(__DIR__ . '/../.env');

define('DB_HOST', (isset($envSettings['DB_HOST'])) ? $envSettings['DB_HOST'] : '127.0.0.1');
define('DB_USERNAME', (isset($envSettings['DB_USERNAME'])) ? $envSettings['DB_USERNAME'] : 'username');
define('DB_PASSWORD', (isset($envSettings['DB_PASSWORD'])) ? $envSettings['DB_PASSWORD'] : 'pass');
define('DB_SCHEMA', (isset($envSettings['DB_SCHEMA'])) ? $envSettings['DB_SCHEMA'] : 'mijndatabase');
define('HOSTNAME', (isset($envSettings['HOSTNAME'])) ? $envSettings['HOSTNAME'] : 'http://38208.hosts2.ma-cloud.nl');
define('SOURCE_ROOT', (isset($envSettings['SOURCE_ROOT'])) ? $envSettings['SOURCE_ROOT'] : '/web');