<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

//Connect ฐานข้อมูล
require 'setting.php';
$app = new \Slim\App(["settings" => $config]);

//สร้าง container เชื่อมต่อกับ PDO ไว้ต่อฐานข้อมูล
$container = $app->getContainer();
require 'pdo.php';

require 'routes/hello.php';
require 'routes/user.php';
require 'routes/rooms.php';


$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();



