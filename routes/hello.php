<?php


$app->get('/hello',function()
{
    $data = (object) array(
        'message' => 'ว่าไง',
        'date' => '14/12/2017'
    );
    echo json_encode ($data);
}
);

?>