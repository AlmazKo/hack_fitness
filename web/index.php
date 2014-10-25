<?php
/**
 * Created by PhpStorm.
 * User: almazko
 * Date: 25/10/14
 * Time: 12:34
 */

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/views',
));


$app['debug'] = true;

$app->get('/', function () use ($app) {

    return $app['twig']->render('index.html.twig', array(
        'name' => 1,
    ));
});


$app->get('/gyms', function () use ($app) {

    $id = 0;
    $gyms[] = ['id' => $id++, 'name' => "Dr.Lodder", 'logo' => 'i/gyms/stub.png'];
    $gyms[] = ['id' => $id++, 'name' => "Gold Fitness", 'logo' => 'i/gyms/stub.png'];
    $gyms[] = ['id' => $id++, 'name' => "iGym", 'logo' => 'i/gyms/iGym.png'];
    $gyms[] = ['id' => $id++, 'name' => "Alex Fitness", 'logo' => 'i/gyms/AlexFitness.png'];
    $gyms[] = ['id' => $id++, 'name' => "Ledi Fitness", 'logo' => 'i/gyms/stub.png'];
    $gyms[] = ['id' => $id++, 'name' => "FitFashion", 'logo' => 'i/gyms/stub.png'];
    $gyms[] = ['id' => $id++, 'name' => "Grand Imperial Wellness", 'logo' => 'i/gyms/stub.png'];
    $gyms[] = ['id' => $id++, 'name' => "World Gym", 'logo' => 'i/gyms/stub.png'];
    $gyms[] = ['id' => $id++, 'name' => "Zaryadka", 'logo' => 'i/gyms/stub.png'];
    $gyms[] = ['id' => $id++, 'name' => "DanceVille", 'logo' => 'i/gyms/stub.png'];
    $gyms[] = ['id' => $id++, 'name' => "AlfaFitness", 'logo' => 'i/gyms/stub.png'];
    $gyms[] = ['id' => $id++, 'name' => "Зебра", 'logo' => 'i/gyms/stub.png'];

    return $app->json($gyms);
});
$app->get('/gym_addresses/{gym_id}', function ($gymId=0) use ($app) {

    $id = 0;
    $gyms[] = ['id' => $id++, 'subway' => "Бирюлево", 'address' => 'ул. Михневская, д.4'];
    $gyms[] = ['id' => $id++, 'subway' => 'Тульская', 'address' => 'ул. Большая Тульская, д.13'];
    $gyms[] = ['id' => $id++, 'subway' => 'Коломенское', 'address' => 'ул.Андропова, д.22'];
    $gyms[] = ['id' => $id++, 'subway' => 'Тушино', 'address' => 'ул.Тушинская, д.17'];
    $gyms[] = ['id' => $id++, 'subway' => 'Юго-западная', 'address' => 'ул.26-ти Бакинских Комиссаров'];
    $gyms[] = ['id' => $id++, 'subway' => 'Ясенево', 'address' => 'ул.Рокотова, д.5'];
    
    return $app->json($gyms);
});
$app->run();