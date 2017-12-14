<?php


$app->get('/user/register', function()
{
    $data = (object) array(
        'message' => 'สมัครสมาชิกเรียบร้อย',
    );
    echo json_encode ($data);
}
);

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
{ echo '/user/post'; });

$app->get('/user/service', function() 
{ echo '/user/service'; });

$app->get('/user/search', function()
{ echo 'user/search';});

?>