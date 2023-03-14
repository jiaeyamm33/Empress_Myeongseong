<?php
  include('./dbconn.php'); // DB연결을 위한 같은 경로의 dbconn.php를 인클루드합니다.
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인</title>
  <link rel="shortcut icon" href="./image/e_favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/base.css" type="text/css">
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <link rel="stylesheet" href="./css/member.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="./script/prefixfree.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body>
  <!-- 헤더 영역 -->
  <header>
    <div class="h_inner">
      <h1>
        <a href="index.html" title="상단 바로가기">
          <img src="./image/logo.png" alt="상단로고">
        </a>
      </h1>

      <nav class="gnb">
        <ul>
          <li>
            <a href="about.html" title="기업개요">기업개요</a>
          </li>

          <li>
            <a href="#none" title="이마트 웨이">이마트 웨이</a>
          </li>

          <li>
            <a href="#none" title="ESG경영">ESG경영</a>
          </li>

          <li>
            <a href="invest.html" title="투자정보">투자정보</a>
          </li>

          <li>
            <a href="career.html" title="채용정보">채용정보</a>
          </li>

          <li>
            <a href="login.php" title="로그인">로그인</a>
          </li>
        </ul>
      </nav>
    </div> <!-- h_inner -->
    
    <div class="h_inner2">
      <nav class="lnb">
        <div class="lnb_box">
          <ul class="sub">
            <li><a href="about.html" title="기업개요">기업개요</a></li>
            <li><a href="about.html#vsci" title="비전">비전</a></li>
            <li><a href="about.html#vsci" title="CI소개">CI소개</a></li>
            <li><a href="about.html#history" title="연혁">연혁</a></li>
            <li><a href="about.html#relc" title="사업구조">관계사 현황</a></li>
            <li><a href="about.html#news" title="홍보센터">홍보센터</a></li>
            <li><a href="about.html#comeway" title="오시는 길">오시는 길</a></li>
          </ul>
          <ul class="sub">
            <li><a href="#none" title="이마트 웨이">이마트 웨이</a></li>
            <li><a href="#none" title="이마트 피플">이마트 피플</a></li>
            <li><a href="#none" title="매장찾기">매장찾기</a></li>
          </ul>

          <ul class="sub">
            <li><a href="#none" title="개요">개요</a></li>
            <li><a href="#none" title="사회공헌">사회공헌</a></li>
            <li><a href="#none" title="친환경 경영">친환경 경영</a></li>
            <li><a href="#none" title="동반성장">동반성장</a></li>
            <li><a href="#none" title="경영철학">경영철학</a></li>
            <li><a href="#none" title="지속가능경영보고서">지속가능경영보고서</a></li>
          </ul>

          <ul class="sub">
            <li><a href="invest.html" title="경영정보">경영정보</a></li>
            <li><a href="invest.html" title="공시정보">공시정보</a></li>
            <li><a href="invest.html" title="주식정보">주식정보</a></li>
            <li><a href="invest.html" title="채무정보">채무정보</a></li>
            <li><a href="invest.html" title="IR자료실">IR자료실</a></li>
          </ul>

          <ul class="sub">
            <li><a href="career.html" title="채용프로세스">채용프로세스</a></li>
            <li><a href="career.html" title="채용">채용</a></li>
            <li><a href="career_list.php" title="나의 지원 현황">나의 지원 현황</a></li>
          </ul>

          <ul class="sub">
            <li><a href="register.php" title="">회원가입</a></li>
            <li><a href="#none" title="공지사항">공지사항</a></li>
          </ul>
        </div> <!-- lnb_box -->
      </nav> <!-- lnb -->
    </div> <!-- h_inner2 -->
  </header>

<?php if(!isset($_SESSION['ss_mb_id'])) { // 로그인 세션이 없을 경우 로그인 화면 ?>
<section class="login1">
<h2>로그인</h2>
<article class="log_art1">
  <h3 class="txt1">로그인</h3>
  <form name="login" method="post" action="./login_check.php">
    <table>
      <tr>
        <th>아이디</th>
        <th><input type="text" name="mb_id" placeholder="아이디 입력" maxlength="16"></th>
      </tr>
      <tr>
        <th>비밀번호</th>
        <th><input type="password" name="mb_password" placeholder="패스워드 입력" maxlength="16"></th>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="로그인" class="login_btn" id="btn1">
        </td>
      </tr>
    </table>
    <div class="login2">
      <input type="checkbox" id="cb1">
      <label for="cb1"></label>
      <label for="cb1"><span class="txt2">아이디 저장</span></label>
      <a href="#none"><span class="txt3">ID/PW 찾기</span></a>
      <a href="./register.php" title="회원가입하기" class="txt4">회원가입</a>
    </div>
    <ul>
      <li>
        <a href="#none" title="네이버 로그인">
          <img src="./image/sign_icon01.png" alt="카카오로그인">
          <span class=btn2>네이버 로그인</span>
        </a>
      </li>
      <li>
        <a href="#none" title="카카오 로그인">
          <img src="./image/sign_icon02.png" alt="카카오로그인">
          <span class="btn2">카카오 로그인</span>
        </a>
      </li>
      <li>
        <a href="#none" title="카카오 로그인">
          <img src="./image/sign_icon03.png" alt="카카오로그인">
          <span class="btn2">애플 로그인</span>
        </a>
      </li>
      <li>
        <a href="#none" title="카카오 로그인">
          <img src="./image/sign_icon04.png" alt="카카오로그인">
          <span class="btn2">SSG 로그인</span>
        </a>
      </li>
    </ul>
  </form>
</article>

      <article class="log_art2">
        <h3>배너</h3>
        <a href="#" title="인턴사원 모집">
          <img src="./image/sign_banner.jpg" alt="배너">
        </a>
      </article>
</section>
<footer>
    <div class="f_inner">
      <h2><a href="index.html" title="메인페이지로 바로가기"><img src="./image/f_logo.png" alt="하단로고"></a></h2>
      <div class="f_info">
        <ul class="f_link">
          <li><a href="#" title="고객센터">고객센터</a></li>
          <li><a href="#" title="이용약관">이용약관</a></li>
          <li><a href="#" title="공정거래자율준수">공정거래자율준수</a></li>
          <li><a href="#" title="윤리신고센터">윤리신고센터</a></li>
          <li><a href="#" title="개인정보처리방침"><span class="color_y">개인정보처리방침</span></a></li>
          <li><a href="#" title="영상정보운영방침"><span class="color_y">영상정보운영방침</span></a></li>
        </ul>
        <address>
          <dl>
            <dt>상호 : </dt>
            <dd>이마트(주)</dd>
            <dt>주소 : </dt>
            <dd>서울특별시 성동구 뚝섬로 377(성수동2가)</dd>
            <dt>대표자 : </dt>
            <dd>강희석</dd>
            <dt>사업자등록번호 : </dt>
            <dd>206-86-50913</dd>
            <dt>통신판매업 신고번호 : </dt>
            <dd>제 2011-서울성동-0345호</dd>
            <dt>이마트대표전화 : </dt>
            <dd>02-380-5678</dd>
            <dt>㈜에스에스지닷컴 : </dt>
            <dd>1577-3419</dd>
          </dl>
        </address>
        <select onchange="siteUrl(this)">
          <option value="">FAMILY SITE</option>
          <option value="https://store.emart.com/main/main.do">이마트 매장안내</option>
          <option value="https://www.shinsegaepoint.com/">신세계포인트</option>
          <option value="https://emart.ssg.com/">이마트몰</option>
          <option value="http://culture.emart.com/main">문화센터</option>
          <option value="http://store.traders.co.kr/index.jsp">이마트 트레이더스</option>
          <option value="http://www.emarteveryday.co.kr">이마트 에브리데이</option>
          <option value="https://www.emart24.co.kr">이마트24</option>
          <option value="https://www.shinsegaegroupinside.com">신세계그룹</option>
          <option value="http://www.shinsegae.com/">신세계백화점</option>
          <option value="http://www.sikorea.co.kr/">신세계인터내셔날</option>
          <option value="http://www.shinsegaefood.com/main.sf">신세계푸드</option>
          <option value="http://www.shinsegae-con.co.kr">신세계건설</option>
          <option value="http://www.sinc.co.kr">신세계아이앤씨</option>
          <option value="http://www.istarbucks.co.kr/">스타벅스커피코리아</option>
          <option value="https://www.josunhotel.com/">조선호텔앤리조트</option>
          <option value="https://www.google.co.kr">신세계사이먼</option>
          <option value="http://www.ssg.com">SSG.COM</option>
        </select>
      </div>
    </div>
  </footer>
  <script>
    // 푸터 패밀리 사이트 스크립트
    function siteUrl(select) { //사용자가 선택목록을 선택하면 siteUrl함수가 호출됨
      if(select.value!='none') { //옵션을 선택하면
        window.open(select.value); //선택한 사이트가 열리게 하고
        select.value='none'; //기존값을 지운다
      }else { //선택을 하지 않으면
        return; //프로그램을 종료한다
      }
    }
  </script>

<?php } else { // 로그인 세션이 있을 경우 로그인 완료 화면 ?>

<h2 class="come">이마트에 오신것을 환영합니다!</h2>

<?php
	$mb_id = $_SESSION['ss_mb_id'];

  $sql = "select * from member where mb_id = TRIM('$mb_id')"; //데이터 조회
  $result = mysqli_query($conn, $sql); //조회한 결과를 변수에 담고
  $mb = mysqli_fetch_assoc($result); //회원정보를 반복문을 통해 변수에 담는다.

  mysqli_close($conn); //데이터 가져왔으니 더이상 필요없어서 종료함.
?>
<div class="d1"><img src="./image/devil_hyun.png" alt="회원사진"></div>
<p class="name"><?php echo $mb['mb_name'] ?>님</p>
<div class="login_win">
    <p>아이디</p>
    <p class="last"><?php echo $mb['mb_id'] ?></p>
    <!-- <tr>
			<th>이름</th>
			<td class="name">님</td>  
		</tr> -->
			<p>이메일</p>
			<p><?php echo $mb['mb_email'] ?></p>
			<!-- <th>성별</th>
			<td></td>
		</tr>
		<tr>
			<th>직업</th>
			<td></td>
		</tr>
		<tr>
			<th>관심언어</th>
			<td></td>
		</tr>
    <tr> -->
			<p>회원가입일</p>
			<p class="last"><?php echo $mb['mb_datetime'] ?></p>
			<p>회원정보 수정일</p>
			<p class="last"><?php echo $mb['mb_modify_datetime'] ?></p>
      <p class="btn_01">
        <a href="./register.php?mode=modify" title="회원정보수정">회원정보수정</a>
        <a href="./logout.php" title="로그아웃">로그아웃</a>
      </p>
</div>
<?php } ?>
</body>
</html>