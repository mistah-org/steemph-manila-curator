<?php
header("Access-Control-Allow-Origin: *");

exec("echo '' > " . "./users/list");
// write to device log
$userList = file("./users/list");

$response = array(
    'users' => $userList
  );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>