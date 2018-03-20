<?php
header("Access-Control-Allow-Origin: *");

$user = strtolower(urldecode($_GET["user"]));

// write to device log
$filename = "./users/list";
$fp = fopen($filename, 'r');
$users = array();
while (!feof($fp))
  $line=fgets($fp);
  $line=trim($line);
  $users[]=$line;
}
fclose($fp);

$uniqueUsers = array_unique($users);
file_put_contents('./users/list', implode(PHP_EOL, $uniqueUsers));

$response = array(
    'user' => $user,
    'userlist' => $userArray
  );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>