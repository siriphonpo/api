<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello',function()
{
    echo 'insertthai';
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


//ทดสอบการใช้งาน API
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();

//รักษ์ทดสอบ

