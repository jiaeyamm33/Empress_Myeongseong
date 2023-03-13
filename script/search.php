<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>현대자동차 시승 신청 조회</title>
  <!-- 초기화 -->
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <!-- 기본서식, 공통서식 -->
  <link rel="stylesheet" href="./css/base.css" type="text/css">
  <!-- 레이아웃서식 -->
  <link rel="stylesheet" href="./css/layout.css" type="text/css">
  <!-- 폰트어썸 주소 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!-- 폰트어썸 주소 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <style>
    header{background: #000; }
    main{
      padding: 140px 0 50px 0;
      width: 100%;
      margin: 0 auto;
    }
    .car_reverse caption{
      color: var(--bg-color01);
      text-align: center;
      font-size: 24px;
      margin-bottom: 40px;
    }
    .car_reverse{
      border: 1px solid #ccc;
      width: 1000px;
      margin: 0 auto;
    }
    .car_reverse caption{
      font-weight:bold;
      font-size:20px;
      padding:20px 0px;
    }
    .car_reverse th{
      background: var(--bg-color01);
      color: #fff;
    }
    .car_reverse td, .car_reverse th{
      border:1px solid #ccc;
      line-height:34px;
      text-align:center;
    }
    .t_drive_btn{text-align: center;}
    .t_drive_btn a{
      background: var(--bg-color01);
      color: #fff;
      border-radius: 50px;
      width: 180px;
      line-height: 40px;
      cursor: pointer;
      margin: 50px 0;
      display: inline-block;
      text-align: center;
    }
    .search_box{
      width:1000px;
      border:1px solid #ccc;
      padding:12px 0px;
      margin:20px auto;
      text-align:center;
      background:#ccc;
    }
    .search_box legend{display:none;}
    .search_box input[type=text]{
      width:300px;height:20px;
    }
    .search_box input[type=submit]{
      padding:2px 10px;
      background:#000;color:#fff;
      transform:translateY(2px);
    }
  </style>
</head>
<body>
  <!-- 헤더 영역 -->
  <header>
    <h1>
      <a href="index.html" title="메인페이지로 바로가기">
        <img src="./images/logo-casper_white.png" alt="상단로고">
      </a>
    </h1>
    <!-- 상단 스크롤시 고정 내비게이션 -->
    <nav>
      <ul class="gnb">
        <li><a href="#" title="소개">소개</a></li>
        <li><a href="#" title="체험">체험</a></li>
        <li><a href="#" title="이벤트">이벤트</a></li>
        <li><a href="#" title="구매안내">구매안내</a></li>
        <li><a href="#" title="고객지원">고객지원</a></li>
      </ul>
    </nav>

    <i class="fas fa-user"></i>
    <i class="fas fa-bell"></i> <!-- 알림아이콘 -->
  </header>

  <main>

  <?php
  
    $mysql_host = 'localhost';
    $mysql_user = 'xnclxud9';
    $mysql_password = 'tmddkdi811!';
    $mysql_db = 'xnclxud9';
    //데이터베이스 계정 연결하기
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

    $search_txt = $_POST['search_txt'];

    if(mysqli_connect_errno()){
      printf("%s \n", mysqli_connect_error());
      exit;
    }
    //데이터베이스 noodle 테이블 데이터 모두 조회하여 변수에 대입
    $query = "select * from test_drive where name='$search_txt'";
    $result = mysqli_query($conn, $query); //변수에 결과값을 저장한다
    print "<table><caption>현대자동차 시승신청 예약조회 결과</caption><tr>" . 
          "<th>번호</th>" .
          "<th>성명</th>" . 
          "<th>전화번호</th>" . 
          "<th>SMS수신여부</th>" .
          "<th>이메일주소</th>" .
          "<th>희망지점</th>" .
          "<th>시승차</th>" .
          "<th>보유차</th>" .
          "<th>예약날짜</th></tr>";

      while($row = mysqli_fetch_row($result)) {
          print "<tr><td>" . $row[0] . "</td>" .
          "<td>" . $row[1] . "</td>" .
          "<td>" . $row[2] . "</td>" . 
          "<td>" . $row[3] . "</td>" . 
          "<td>" . $row[4] . "</td>" .
          "<td>" . $row[5] . "</td>" .
          "<td>" . $row[6] . "</td>" .
          "<td>" . $row[7] . "</td>" .
          "<td>" . $row[8] . "</td></tr>";
      }
      
      print"</table>";
      mysqli_free_result($result);
      mysqli_close($conn);
      ?>

    <br>
    <p class="t_drive_btn"><a href="test_drive.html" title="데이터 입력하기">시승 신청하기</a></p>

  </main>

  <!-- 푸터 영역 -->
  <footer>
    <div class="f_wrap">
      <h2><img src="./images/logo-hyundai.a9ebdc6.png" alt="하단로고"></h2>
      <nav>
        <ul class="f_nav">
          <li><a href="#" title="이용약관">이용약관</a></li>
          <li><a href="#" title="개인정보 처리방침">개인정보 처리방침</a></li>
          <li><a href="#" title="저작권안내">저작권안내</a></li>
          <li><a href="#" title="공동인증서 안내">공동인증서 안내</a></li>
          <li><a href="#" title="현대자동차 홈페이지">현대자동차 홈페이지</a></li>
        </ul>
      </nav>
      <dl>
        <dt>사업자등록번호 : </dt>
        <dd>101-81-09147</dd>
        <dt>통신판매업신고번호 : </dt>
        <dd>2002-01546</dd>
        <dt>대표이사 : </dt>
        <dd>장재훈 <a href="#" title="사업자정보확인">사업자정보확인 ></a></dd>
        <dt>캐스퍼 고객센터 : </dt>
        <dd>080-500-6000</dd>
        <dt>주소 : </dt>
        <dd>서울시 서초구 헌릉로 12</dd>
        <dt>호스팅서비스 제공 : </dt>
        <dd>현대오토에버(주)</dd>
      </dl>
      <address>
        COPYRIGHT &copy; HYUNDAI MOTOR COMPANY, ALL RIGHTS RESERVED.
      </address>
    </div>
  </footer>
</body>
</html>