<?php 

include 'career_conn.php';

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이마트 지원현황</title>
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/base.css" type="text/css">
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <link rel="stylesheet" href="./css/career.css" type="text/css">
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
            <li><a href="career.html" title="나의 지원 현황">나의 지원 현황</a></li>
          </ul>

          <ul class="sub">
            <li><a href="join.html" title="">회원가입</a></li>
            <li><a href="notice.html" title="공지사항">공지사항</a></li>
          </ul>
        </div> <!-- lnb_box -->
      </nav> <!-- lnb -->
    </div> <!-- h_inner2 -->

  </header>
  <main>
    <article id="c_list">
      <h2>나의 지원현황</h2>
      <p>나의 지원현황을 확인하세요.</p>
      <a href="career.html" title="채용공고 보러가기" class="c_btn01">채용공고 보러가기 <i class="fas fa-arrow-circle-right"></i></a>
      <ul class="c_tab">
        <li class="c_on">지원현황</li>
        <li>관심공고</li>
      </ul>
      <form name="search" method="post" action="career_list.php">
        <table>
          <colgroup>
            <col width="50">
            <col width="100">
            <col width="100">
            <col width="650">
            <col width="150">
            <col width="150">
          </colgroup>
          <tr class="title">
            <th>No</th>
            <th>지원일</th>
            <th>이름</th>
            <th>공고명/지원분야</th>
            <th>경력사항</th>
            <th>상태</th>
          </tr>
          <?php
            $query = 'select * from career order by num desc';
            $result = mysqli_query($conn, $query);
            while($data = mysqli_fetch_array($result)){?>

            <tr>
              <td><?=$data['num']?></td>
              <td><?=$data['cdate']?></td>
              <td><?=$data['name']?></td>
              <td><?=$data['subject']?></td>
              <td><?=$data['experience']?></td>
              <td><?=$data['status']?></td>
            </tr>
            <?php } ?>
        </table>
        <input type="text" id="search_txt" name="search_txt">
        <input type="submit" value="검색">
      </form>
    </article>
  </main>
  <!-- 푸터 영역 -->
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
          <option value="https://www.premiumoutlets.co.kr">신세계사이먼</option>
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
  </body>
</html>