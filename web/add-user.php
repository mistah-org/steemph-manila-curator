<?php
header("Access-Control-Allow-Origin: *");

$user = strtolower(urldecode($_GET["user"]));

// write to device log
$userList = fopen("./users/list" , "a") or die("Unable to open file!");
fputcsv($userList, $user);
fclose($userList);

$response = array(
    'user' => $user,
    'userList' => $userList
    );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>