<?php
/**
 * User: @patilkrunal (patilkrunal11.kp@gmail.com)
 * Date: 21/02/22
 * Time: 3:48 PM
 */


/**
 * @package ${NAMESPACE}
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => 'root',
    'database' => 'php_mvc_basic',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->bootEloquent();