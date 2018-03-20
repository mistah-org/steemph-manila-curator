<?php
header("Access-Control-Allow-Origin: *");

$filename = "./users/list";
$fp = fopen($filename, 'r');
$users = array();
while (!feof($fp)) {
  $line=fgets($fp);
  $line=trim($line);
  $users[]=$line;
}
$users[]=$user;
fclose($fp);

$response = array(
    'users' => $users
  );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>