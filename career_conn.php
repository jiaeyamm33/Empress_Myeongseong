<?php 

$mysql_host = 'localhost';
$mysql_user = 'jiaeyammas';
$mysql_password = 'wldo0326!!';
$mysql_db = 'jiaeyammas';

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if(!$conn){
  die('연결실패 : ' . mysqli_connect_error());
}

session_start();

?>