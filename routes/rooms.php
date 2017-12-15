<?php
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/rooms', function (Request $request, Response $response) {
    $db = $this->db;
    try {

        $statement = $db->prepare("SELECT * FROM room");
        $statement->execute();
        $results = $statement->fetchAll();
        echo json_encode($results);

        //echo var_dump($results);
    } catch (PDOException $e) {
        echo var_dump($e);
    }
    //echo '/room ok';
});

$app->post('/rooms/news', function (Request $request, Response $respons) {
    $data = $request->getParsedBody();
    $roomName = $data['roomName'];

//INSERT
    $db = $this->db;
    $statement = $db->prepare('INSERT INTO reseve.room(name) VALUES (:roomName)');
    $statement->execute(array(':roomName' => $roomName));

    if ($statement->rowCount() > 0) {
        $result = (object) array(
            "message" => "Insert nothing",
            "insert_status" => 1
        );
        // $results != $result
        echo json_encode($result);
        // echo 1;
    } else {
        $result = (object) array(
            "message" => "Insert nothing",
            "insert_status" => 0

        );

        echo json_encode($result);
        // echo 0;
    }

});
