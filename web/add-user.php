<?php
header("Access-Control-Allow-Origin: *");

$user = strtolower(urldecode($_GET["user"]));

// write to device log
$userList = file("./users/list");
$userList = array_unique($userList);
file_put_contents('./users/list', print_r($userList, true));

$response = array(
    'user' => $user,
    'userlist' => file("./users/list")
  );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>