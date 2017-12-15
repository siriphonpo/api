<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/hello', function () {
    $data = (object) array(
        'message' => 'ว่าไง',
        'date' => '14/12/2017',
    );
    echo json_encode($data);
}
);

$app->post('/register', function (Request $request, Response $response) {
    $data = $request->getParsedbody();
    echo json_encode($data);
//echo 'post register'.' '. $data['username'].' '.$data['password'];
});
