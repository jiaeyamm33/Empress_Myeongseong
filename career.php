<?php
include('career_conn.php');


$data = [
  'name' => '',
  'email' => '',
  'phone' => '',
  'subject' => '',
  'education' => '',
  'experience' => '',
  'certificate' => '',
  'file' => ''
];

$id = $_GET['id'];
$id = mysqli_real_escape_string($conn, $id);
$query = "SELECT * FROM notice WHERE id = '$id'";
// $result = mysqli_query($conn, $query);
// $data = mysql_fetch_array($result);

?>
<style>
  table {
    border-collapse:collapse;
    border:1px solid #333;
    width:800px;
    margin:0px auto;
  }
  th, td{border:1px solid #333;;}
  table caption {
    line-height:60px;font-weight:bold;
  }
</style>

<form name="write" method="post" action="career_sub.php">
  <input type="hidden" name="id" value="<?=$id?>">
  <colgroup>
    <col width="100">
    <col width="700">
  </colgroup>
  <table>
    <tr>
      <th>이름</th>
      <td><input type="text" name="name" value="<?php $data['name']?>"></td>
    </tr>
    <tr>
      <th>이메일</th>
      <td><input type="text" name="email" value="<?=$data['email']?>"></td>
    </tr>
    <tr>
      <th>전화번호</th>
      <td><input type="text" name="phone" value="<?=$data['phone']?>"></td>
    </tr>
    <tr>
      <th>공고명</th>
      <td><input type="text" name="subject" value="<?=$data['subject']?>"></td>
    </tr>
    <tr>
      <th>학력사항</th>
      <td><input type="text" name="education" value="<?=$data['education']?>"></td>
    </tr>
    <tr>
      <th>경력사항</th>
      <td><input type="text" name="experience" value="<?=$data['experience']?>"></td>
    </tr>
    <tr>
      <th>자격증</th>
      <td><input type="text" name="certificate" value="<?=$data['certificate']?>"></td>
    </tr>
    <tr>
      <th>자기소개서</th>
      <td><input type="input" name="file"></td>
    </tr>
    <tr>
      <th>
        <p><input type="submit" value="지원하기"></p>
      </th>
    </tr>
  </table>
</form>