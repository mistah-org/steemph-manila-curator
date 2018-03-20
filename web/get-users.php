<?php
header("Access-Control-Allow-Origin: *");

// write to device log
$userList = file("./users/list", FILE_IGNORE_NEW_LINES);

$response = array(
    'users' => $userList
  );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>