<?php
/**
 * Created by PhpStorm.
 * User: DamienSchool
 * Date: 3-9-2018
 * Time: 13:40
 */

require __DIR__ . '/vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

echo $e;