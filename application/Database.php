<?php
use Illuminate\Database\Capsule\Manager as Database;

$database = new Database;

$database->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'veternianaria',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci'
]);

date_default_timezone_set('America/Argentina/Buenos_Aires');

$database->setAsGlobal();
$database->bootEloquent();