<?php
header("Access-Control-Allow-Origin: *");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user = strtolower(urldecode($_POST["user"]));

  $filename = "./users/list";
  $fp = fopen($filename, 'r');
  $users = array();
  while (!feof($fp)) {
    $line=fgets($fp);
    $line=trim($line);
    if (!($line === '' || $line === $user)) {
      $users[]=$line;
    }
  }
  fclose($fp);

  $unique_users = array_unique($users);
  $fp = fopen($filename, 'w') or die("Unable to open file!");
  foreach ($unique_users as $username) {
    fwrite($fp, $username . PHP_EOL);
  }
  fclose($fp);

  $response = array(
      'user' => $user,
      'userlist' => $unique_users
    );
  header('Content-type:application/json;charset=utf-8');
  echo json_encode($response);

} else {
  http_response_code(405);
}

?>