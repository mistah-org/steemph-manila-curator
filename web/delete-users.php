<?php
header("Access-Control-Allow-Origin: *");

$filename = "./users/list";
exec("echo '' > " . $filename);
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

$response = array(
    'users' => array_filter($users)
  );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>