<?php

include('career_conn.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$education = $_POST['education'];
$experience = $_POST['experience'];
$certificate = $_POST['certificate'];
$file = $_POST['file'];

//입력한 데이터의 보안성을 위해 한번더 저장
$name = mysqli_real_escape_string($conn, $name);
$subject = mysqli_real_escape_string($conn, $subject);
$memo = mysqli_real_escape_string($conn, $memo);
$pwd = mysqli_real_escape_string($conn, $pwd);

$ip = $_SERVER['REMOTE_ADDR'];

$query = "INSERT INTO notice(name, email, phone, subject, education, experience, certificate, file) VALUES('$name', '$email', '$phone', '$subject', '$education', '$experience', '$certificate', '$file')";

mysqli_query($conn, $query);

?>