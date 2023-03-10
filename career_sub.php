<?php

include('career_conn.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$education = $_POST['education'];
$experience = $_POST['experience'];
$certificate = $_POST['certificate'];
$file = $_FILES['file'];
$cdate = date("Y-m-d");

//입력한 데이터의 보안성을 위해 한번더 저장
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$phone = mysqli_real_escape_string($conn, $phone);
$subject = mysqli_real_escape_string($conn, $subject);
$education = mysqli_real_escape_string($conn, $education);
$experience = mysqli_real_escape_string($conn, $experience);
$certificate = mysqli_real_escape_string($conn, $certificate);

$query = "INSERT INTO career(name, email, phone, subject, education, experience, certificate, file) VALUES('$name', '$email', '$phone', '$subject', '$education', '$experience', '$certificate', '$file')";

mysqli_query($conn, $query);

?>

<script>
  location.href="career_list.php";
</script>