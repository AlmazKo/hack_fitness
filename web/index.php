<?php
/**
 * Created by PhpStorm.
 * User: almazko
 * Date: 25/10/14
 * Time: 12:34
 */

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();


$app['debug'] = true;

$app->get('/', function () use ($app) {
    return '<h1>HackFitness</h1>';
});

$app->run();