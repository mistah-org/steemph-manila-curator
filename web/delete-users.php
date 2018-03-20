<?php
header("Access-Control-Allow-Origin: *");

exec("echo '' > " . "./users/list");
$userList = file("./users/list");

$response = array(
    'users' => array_filter($userList)
  );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>