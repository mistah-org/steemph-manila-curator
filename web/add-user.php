<?php
header("Access-Control-Allow-Origin: *");

$user = strtolower(urldecode($_GET["user"]));

$response = array(
    'user' => $user
  );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>