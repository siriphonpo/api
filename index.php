<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
//ทดสอบฮิว
$app = new \Slim\App;
$app->get('/hello',function()
{
    echo 'ilovelazada';
}
);

$app->get('/user/register', function()
{
   echo '/user/register';
}
);

$app->get('/user/post', function() 
{ 
    echo '/user/post'; 
});

$app->get('/user/service', function() 
{ 
    echo '/user/service'; 
});


$app->get('/room/product', function() {
    echo '/room/product'; 
});
//ทดสอบการใช้งาน API
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();

///<<<<<<< HEAD
///ทดสอบ บิ๊ก
///=======
//รักษ์ทดสอบ

>>>>>>> 852be12ef75a4f93218961bc07b08d09e2af8fcb
