<?php
  include("./dbconn.php"); //DB연결을 위한 같은 경로의 dbconn.php를 인클루드합니다.

  $mode = $_POST['mode']; //post방식으로 가져옴.

  if($mode != 'insert' && $mode != 'modify'){
    echo "<script>alert('mode값이 제대로 넘어조지 않았습니다.');<script>";
    echo "<script>location.replace('./register.php');<script>";
    exit;
  }

  switch ($mode){
    case 'insert' : 
      $mb_id = trim($_POST['mb_id']);
      $title = '회원가입';
      break;
    case 'modify' : 
      $mb_id = trim($_SESSION['ss_mb_id']);
      $title = "회원수정";
      break;
  }

//사용자가 입력한 양식에 해당하는 값을 변수에 담아서 값이 있는지의 여부를 판단한다.  
$mb_password = trim($_POST['mb_password']); //첫번째 패스워드
$mb_id = trim($_POST['mb_id']); //첫번째 패스워드
$mb_name = trim($_POST['mb_name']); //이름
$mb_email = trim($_POST['mb_email']); //이메일
// $mb_gender = $_POST['mb_gender']; //성별
// $mb_job = $_POST['mb_job']; //직업
$mb_ip = $_SERVER['REMOTE_ADDR']; //접속 아이피
// $mb_language = implode(",", $_POST['mb_language']); //관심언어(,) 구분으로 저장
$mb_datetime = date('Y-m-d H:i:s', time()); //가입일
$mb_modify_datetime = date('Y-m-d H:i:s', time()); //수정일

//사용자가 입력한 데이터에 대해 입력여부를 판단하는 if문 작성
if(!$mb_id){
  echo "<script>alert('아이디가 넘어오지 않았습니다.')</script>";
  echo "<script>location.replace('./register.php')</script>";
  exit; //자바스크립트 return문과 같은 역할
}
if(!$mb_password){
  echo "<script>alert('패스워드가 넘어오지 않았습니다.')</script>";
  echo "<script>location.replace('./register.php')</script>";
  exit;
}
if(!$mb_name){
  echo "<script>alert('이름이 넘어오지 않았습니다.')</script>";
  echo "<script>location.replace('./register.php')</script>";
  exit;
}
if(!$mb_email){
  echo "<script>alert('이메일이 넘어오지 않았습니다.')</script>";
  echo "<script>location.replace('./register.php')</script>";
  exit;
}
// if(!$mb_gender){
//   echo "<script>alert('성별이 넘어오지 않았습니다.')</script>";
//   echo "<script>location.replace('./register.php')</script>";
//   exit;
// }
// if(!$mb_job){
//   echo "<script>alert('직업이 넘어오지 않았습니다.')</script>";
//   echo "<script>location.replace('./register.php')</script>";
//   exit;
// }

//데이터베이스
$hased_PW = password_hash($mb_password, PASSWORD_DEFAULT); //입력한 비밀번호를 mysql password()함수를 이용하여 암호화해서 가져옴.

// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
$mb_password = $hased_PW;

if($mode == "insert"){ //신규 등록 상태

  //회원가입을 시도하는 아이디가 사용중
  $sql = "SELECT * FROM member WHERE mb_id = '$mb_id'";

  $result = mysqli_query($conn, $sql); //결과값을 다시 저장한다.

  if(mysqli_num_rows($result)>0){ //사용중인 아이디 값이 있는 행이 있다면
    echo("<script>alert('이미 사용중인 아이디가 있습니다.');</script>");
    echo("<script>location.replace('./register.php');</script>");
    exit; //return과 같은 역할
  }
  //최종 검사결과가 끝났으니 데이터베이스에 자료를 하나씩 입력한다.
  $sql = "insert into member
  set mb_id = '$mb_id',
  mb_password = '$mb_password',
  mb_name = '$mb_name',
  mb_email = '$mb_email',
  mb_gender = '$mb_gender',
  mb_job = '$mb_job',
  mb_ip = '$mb_ip',
  mb_language = '$mb_language',
  mb_datetime = '$mb_datetime'"; //신규가입한 날짜

  $result = mysqli_query($conn, $sql); //입력실행

}else if($mode == 'modify'){
  $sql = "update member
  set mb_id = '$mb_id',
  mb_password = '$mb_password',
  mb_name = '$mb_name',
  mb_email = '$mb_email',
  mb_gender = '$mb_gender',
  mb_job = '$mb_job',
  mb_ip = '$mb_ip',
  mb_language = '$mb_language',
  mb_modify_datetime = '$mb_modify_datetime'
  where mb_id = '$mb_id'";

  $result = mysqli_query($conn, $sql); //입력실행
}
if($result){
  echo "<script>alert('".$title."이 완료되었습니다.');</script>";
  echo "<script>location.replace('./login.php')</script>";
  exit;
}else{
  echo "가입실패 : ".mysqli_error($conn);
  mysqli_close($conn); //데이터베이스 접속 종료
}

?>