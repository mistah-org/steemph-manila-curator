<?php
header("Access-Control-Allow-Origin: *");

$user = strtolower(urldecode($_GET["user"]));

// write to device log
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

$unique_users = array_unique($users);
$fp = fopen($filename, 'w') or die("Unable to open file!");
foreach ($unique_users as $username) {
  file_put_contents($filename, $username . PHP_EOL, FILE_APPEND | LOCK_EX));
  fwrite($fp, $username);
}
fclose($fp);

$response = array(
    'user' => $user,
    'userlist' => $userArray
  );
header('Content-type:application/json;charset=utf-8');
echo json_encode($response);

?>