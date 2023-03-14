<?php
include("./dbconn.php");  // DB연결을 위한 같은 경로의 dbconn.php를 인클루드합니다.

if(isset($_SESSION['ss_mb_id']) && $_GET['mode'] == 'modify') { // 세션이 있고 회원수정 mode라면 회원 정보를 가져옴
	$mb_id = $_SESSION['ss_mb_id'];
	
	$sql = " SELECT * FROM member WHERE mb_id = '$mb_id' "; // 회원 정보를 조회
	$result = mysqli_query($conn, $sql);
	$mb = mysqli_fetch_assoc($result);
	mysqli_close($conn); // 데이터베이스 접속 종료

	$mode = "modify";
	$title = "회원수정";
	$modify_mb_info = "readonly";
} else {
	$mode = "insert";
	$title = "회원가입";
	$modify_mb_info = '';
}
?>
<html>
<head>
	<title>이마트</title>
  <link rel="shortcut icon" href="./image/e_favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/base.css" type="text/css">
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <link rel="stylesheet" href="./css/join.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="./script/prefixfree.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- 제이쿼리 ui -->
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="./script/join.js" defer></script>
  <script src="./script/common.js" defer></script>
</head>
<body>
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
            <a href="#" title="이마트 웨이">이마트 웨이</a>
          </li>

          <li>
            <a href="#" title="ESG경영">ESG경영</a>
          </li>

          <li>
            <a href="invest.html" title="투자정보">투자정보</a>
          </li>

          <li>
            <a href="career.html" title="채용정보">채용정보</a>
          </li>

          <li>
            <a href="signin.html" title="로그인">로그인</a>
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
            <li><a href="#" title="이마트 웨이">이마트 웨이</a></li>
            <li><a href="#" title="이마트 피플">이마트 피플</a></li>
            <li><a href="#" title="매장찾기">매장찾기</a></li>
          </ul>

          <ul class="sub">
            <li><a href="#" title="개요">개요</a></li>
            <li><a href="#" title="사회공헌">사회공헌</a></li>
            <li><a href="#" title="친환경 경영">친환경 경영</a></li>
            <li><a href="#" title="동반성장">동반성장</a></li>
            <li><a href="#" title="경영철학">경영철학</a></li>
            <li><a href="#" title="지속가능경영보고서">지속가능경영보고서</a></li>
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
            <li><a href="notice.html" title="공지사항">공지사항</a></li>
          </ul>
        </div> <!-- lnb_box -->
      </nav> <!-- lnb -->
    </div> <!-- h_inner2 -->
  </header>
<!-- <h1><?php echo $title ?></h1> -->



	<section class="join1">
    <h2>회원가입영역</h2>
    <article>
      <form action="./register_update.php" onsubmit="return fregisterform_submit(this);" method="post">
	<input type="hidden" name="mode" value="<?php echo $mode ?>">
        <fieldset>
				<legend class="big1">회원가입</legend>
          <legend class="txt1">이용약관</legend>
          <ul class="join2">
            <li>
              <a href="#" title=""><label for="cb1"><span class="txt2">서비스 이용약관</span><div class="arrow a_on"></div></a>
              <div class="ser_box">
                <p>
                  제 1 장 총칙
                </p>
                <br>
                <p>
                  제 1조 (목적)
                </p>
                <br>
                <p>
                  이 약관은 ㈜이마트(이하 “회사”라 한다)에서 제공하는 인터넷 관련 서비스(이하 "서비스"라 한다)를 이용함에 있어 회사와 회원의 권리, 의무 및 책임 사항을 규정함을 목적으로 합니다.
                </p>
                <br>
                <p>
                  제 2조 (정의)
                </p>
                <br>
                <p>
                  ① 사이트란 회사의 재화 또는 용역(이하 "재화 등"이라 함)을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신 설비를 이용하여 재화 등을 거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 사이트를 운영하는 사업자의 의미로도 사용합니다.
                </p>
                <br>
                <p>
                  ②서비스란 이용 고객 또는 회원이 PC, 이동전화, 휴대용 단말기 등 각종 유무선 기기 또는 프로그램을 통하여 이용할 수 있도록 회사가 제공하는 모든 서비스를 말합니다.
                </p>
                <br>
                <p>
                  ③ '회원'이란 회사 사이트에 이용계약을 체결한 개인이나 법인 또는 법인에 준하는 단체를 말합니다.
                </p>
                <br>
                <p>
                  ④ 이 약관에서 사용하는 용어의 정의는 이 조항에서 정하는 것을 제외하고는 관계 법령 및 서비스별 안내에서 정하는 바에 의합니다.
                </p>
                <input type="checkbox" id="cb1">
                <label for="cb1"></label>
                <label for="cb1">필수</label>
              </div>
            </li>
            <li>
              <a href="#" title=""><label for="cb1"><span class="txt2">개인정보 수집・이용 동의서</span><div class="arrow2 a_on"></div></a>
              <div class="ser_box">
                  <p>
                    수집하는 개인정보 항목 및 방법
                  </p>
                  <br>
                  <p>
                    1. 당사는 고객에게 본인확인, 포인트 적립 및 결제 서비스, 다양하고 편리한 서비스를 제공하기 위해 아래의 방법을 통해 개인정보를 수집하고 있습니다.
                  </p>
                  <br>
                  <p>
                    ① 개인정보 수집항목
                  </p>
                  <p>
                    ㅁ 신세계포인트 : 신세계포인트 개인정보처리방침에 의해 이루어지며, shinsegaepoint.com에서 확인 가능합니다
                  </p>
                  <br>
                  <p>
                    1) 회원가입 시
                  </p>
                  <p>
                    [선택항목] : 전화번호, 성별, 생년월일, 직장정보(직장명, 주소, 연락처), 클럽가입 여부, 자녀정보(맘키즈클럽 시 자녀명, 생년월일, 성별), 차량번호, 마케팅 수신 동의여부 (선택항목은 입력하지 않아도 회원가입이 가능합니다.)
                  </p>
                  <br>
                  <p>
                    2) 통합회원/인증회원 가입 본인확인 필요 시<br>
                    - CI, DI, 이름, 생년월일, 성별, 아이핀번호(아이핀 본인인증시), 마이핀번호(마이핀 본인인증시) 등 본인확인에 필요한 정보
                  </p>
                  <br>
                  <p>
                    3) 외국인회원 가입시 : 국적
                  </p>
                  <br>
                  <p>
                    4) 법정대리인 동의 필요 시 : 법정대리인 정보(성명, 생년월일, 주소, 연락처, 관계)
                  </p>
                  <br>
                  <p>
                    5) 법인회원 가입시 <br>
                    [필수항목] : 사업자등록번호, 법인명, 아이디, 비밀번호, 사업자주소, 전자우편주소, 담당자명, 휴대전화번호
                  </p>
              </div>
              </p>
            </li>
          </ul>
          <input type="checkbox" id="cb2" required>
          <label for="cb2"></label>
          <label for="cb2">동의함</label>
          <span class="agree">*회원정보 동의하기를 눌러주세요</span>
        </fieldset>
      <fieldset class="join3">
				<legend class="txt3">정보입력<span>*필수입력</span></legend>
				<p class="name_box"><label for="cb3">이름</label>
				<input type="text" name="mb_name" value="<?php echo $mb['mb_name'] ?>" <?php echo $modify_mb_info ?>>
        </p>
				<p class="email_box">
            <label for="cb4">이메일</label>
						<input class="email" type="text" name="mb_email" value="<?php echo $mb['mb_email'] ?>">
          <select id="email">
            <option value="">직접입력하기</option>
            <option value="naver.com">naver.com</option>
            <option value="kakao.com">kakao.com</option>
            <option value="apple.com">apple.com</option>
            <option value="ssg.com">ssg.com</option>
          </select>
          </p>
					<p class="pass_box">
            <label for="cb5">비밀번호</label>
            <input type="password" name="mb_password">
          </p>
					<p class="repass_box">
            <label for="cb6">비밀번호 확인</label>
            <input type="password" name="mb_password_re">
          </p>
					<p class="tel_box">
            <label for="cb7">아이디</label>
            <input type="text" name="mb_id" value="<?php echo $mb['mb_id'] ?>" <?php echo $modify_mb_info ?>>
          </p>
				<!-- <tr>
					<th>성별</th>
					<td>
						<label><input type="radio" name="mb_gender" value="남자" <?php echo ($mb['mb_gender'] == "남자") ? "checked" : "";?> >남자</label>
						<label><input type="radio" name="mb_gender" value="여자" <?php echo ($mb['mb_gender'] == "여자") ? "checked" : "";?> >여자</label>
					</td>
				</tr> -->
				<!-- <tr>
					<th>직업</th>
					<td>
						<select name="mb_job">
							<option value="">선택하세요</option>
							<option value="학생" <?php echo ($mb['mb_job'] == "학생") ? "selected" : "";?> >학생</option>
							<option value="회사원" <?php echo ($mb['mb_job'] == "회사원") ? "selected" : "";?> >회사원</option>
							<option value="공무원" <?php echo ($mb['mb_job'] == "공무원") ? "selected" : "";?> >공무원</option>
							<option value="주부" <?php echo ($mb['mb_job'] == "주부") ? "selected" : "";?> >주부</option>
							<option value="무직" <?php echo ($mb['mb_job'] == "무직") ? "selected" : "";?> >무직</option>
						</select>
					</td>
				</tr> -->
				<!-- <tr>
					<th>관심언어</th>
					<td>
						<label><input type="checkbox" name="mb_language[]" value="HTML" <?php echo strpos($mb['mb_language'], 'HTML') !== false ? 'checked' : '' ?>>HTML</label>
						<label><input type="checkbox" name="mb_language[]" value="CSS" <?php echo strpos($mb['mb_language'], 'CSS') !== false ? 'checked' : '' ?>>CSS</label>
						<label><input type="checkbox" name="mb_language[]" value="PHP" <?php echo strpos($mb['mb_language'], 'PHP') !== false ? 'checked' : '' ?>>PHP</label>
						<label><input type="checkbox" name="mb_language[]" value="MySQL" <?php echo strpos($mb['mb_language'], 'MySQL') !== false ? 'checked' : '' ?>>MySQL</label>
					</td>
				</tr> -->
				<div class="btn_box">
						<span>
						<a href="./login.php">취소</a>
						</span>
            <input type="submit" value="<?php echo $title ?>">
          </div>
			</fieldset>
      </form>
    </article>
    </section>
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
<script>
function fregisterform_submit(f) { // submit 최종 폼체크

	if (f.mb_id.value.length < 1) { // 회원아이디 검사
		alert("아이디를 입력하십시오.");
		f.mb_id.focus();
		return false;
	}

	if (f.mb_name.value.length < 1) { // 이름 검사
		alert("이름을 입력하십시오.");
		f.mb_name.focus();
		return false;
	}

	if (f.mb_password.value.length < 3) {
		alert("비밀번호를 3글자 이상 입력하십시오.");
		f.mb_password.focus();
		return false;
	}

	if (f.mb_password.value != f.mb_password_re.value) {
		alert("비밀번호가 같지 않습니다.");
		f.mb_password_re.focus();
		return false;
	}

	if (f.mb_password.value.length > 0) {
		if (f.mb_password_re.value.length < 3) {
			alert("비밀번호를 3글자 이상 입력하십시오.");
			f.mb_password_re.focus();
			return false;
		}
	}

	if (f.mb_email.value.length < 1) { // 이메일 검사
		alert("이메일을 입력하십시오.");
		f.mb_email.focus();
		return false;
	}

	if (f.mb_email.value.length > 0) { // 이메일 형식 검사
		var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
		if (f.mb_email.value.match(regExp) == null) {
			alert("이메일 주소가 형식에 맞지 않습니다.");
			f.mb_email.focus();
			return false;
		}		
	}

	return true;

}
</script>
</body>
</html>