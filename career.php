  <?php

  $date = date('y-m-d');
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $title = $_POST['title'];
  $education = $_POST['education'];
  $experience = $_POST['experience'];
  $certificate = $_POST['certificate'];
  $file = $_FILES[''];
  $status = $_POST['status'];

  $mysql_host = 'localhost';
  $mysql_user = '';
  $mysql_password = '';
  $mysql_db = '';

  $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

  if(!$conn) {
    die('연결실패:' .mysqli_connect_error());
  }

  $query = "INSERT INTO test_drive VALUES (0, '".$name."', '".$phone."', '".$sms."' ,'".$email."', '".$region."', '".$s_car."', '".$my_car."', '".$s_date."')";

  $result = mysqli_query($conn, $query);

  echo '입력완료';
  ?>