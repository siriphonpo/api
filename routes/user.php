<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/user/register', function()
{
    $data = (object) array(
        'message' => 'สมัครสมาชิกเรียบร้อย',
    );
    echo json_encode ($data);
}
);
$app->post('/user/register', function(Request $request, Response $response)
{
    $data = $request->getParsedbody();
    //echo json_encode($data);
echo 'post Product'.' '. $data['idcard'].' '.$data['password'].' '.$data['name'].' '.$data['lastname'].' '.$data['tel'];
});

$app->get('/user/login', function() 
{
    $data = (object) array(
        'message' => 'ยินดีต้อนรับ',
    );
    echo json_encode ($data);
}
);

$app->get('/user/editprofile', function() 
{ echo '/user/editprofile'; });

$app->get('/user/post', function() 
{
    $data = (object) array(
        'message' => 'ขอบคุณสำหรับข้อมูล',
    );
    echo json_encode ($data);
}
);
$app->post('/user/post', function(Request $request, Response $response)
{
    $data = $request->getParsedbody();
    //echo json_encode($data);
echo 'post Product'.' '. $data['header'].' '.$data['comment'].' '.$data['picture'];
});

$app->get('/user/service', function() 
{ echo '/user/service'; });

$app->get('/user/search', function()
{ echo 'user/search';});

?>