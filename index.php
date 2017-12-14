<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello',function()
{
    echo 'ว่าไงพวก';
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

$app->get('/room/service', function() 
    echo '/room/service'; 
});

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();

///ทดสอบ บิ๊ก