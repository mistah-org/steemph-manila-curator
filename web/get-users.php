<?php
header("Access-Control-Allow-Origin: *");

$filename = "./users/list";
$fp = fopen($filename, 'r');
$users = array();
while (!feof($fp)) {
  $line=fgets($fp);
  $line=trim($line);
  if ($line !== '') {
    $users[]=$line;
  }
}
$users[]=$user;
fclose($fp);

$unique_users = array_unique($users);
$response = array(
    'users' => array_filter($unique_users)
  );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>