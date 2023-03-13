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
  <link rel="stylesheet" href="./css/m_common.css" type="text/css">
  <link rel="stylesheet" href="./css/m_career.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="./script/prefixfree.min.js"></script>
  <script src="./script/m_common.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body>
  <!-- 헤더 영역 -->
  <header>
    <div class="h_inner">
      <h1>
        <a href="m_index.html" title="상단 바로가기">
          <img src="./image/logo.png" alt="상단로고">
        </a>
      </h1>
      <div class="toggle" id="toggle">
       <span>&nbsp;</span>
       <span>&nbsp;</span>
       <span>&nbsp;</span>
      </div>
      <nav class="gnb">
        <ul id="gnblist">
          <li>
            <a href="#none" title="기업개요">기업개요<i class="fa-solid fa-angle-down"></i></a>
            <ul class="sub">
              <li><a href="m_about.html" title="비전">기업개요</a></li>
              <li><a href="m_about.html#vsci" title="비전">비전</a></li>
              <li><a href="m_about.html#vsci" title="CI소개">CI소개</a></li>
              <li><a href="m_about.html#history" title="연혁">연혁</a></li>
              <li><a href="m_about.html#relc" title="사업구조">관계사 현황</a></li>
              <li><a href="m_about.html#news" title="홍보센터">홍보센터</a></li>
              <li><a href="m_about.html#comeway" title="오시는 길">오시는 길</a></li>
              </ul>
          </li>
    
          <li class="mainm">
            <a href="#none" title="이마트 웨이">이마트 웨이<i class="fa-solid fa-angle-down"></i></a>
            <ul class="sub">
              <li><a href="#" title="이마트 웨이">이마트 웨이</a></li>
              <li><a href="#" title="이마트 피플">이마트 피플</a></li>
              <li><a href="#" title="매장찾기">매장찾기</a></li>
            </ul>
          </li>
    
          <li class="mainm">
            <a href="#none" title="ESG경영">ESG경영<i class="fa-solid fa-angle-down"></i></a>
            <ul class="sub">
              <li><a href="#" title="개요">ESG경영</a></li>
              <li><a href="#" title="개요">개요</a></li>
              <li><a href="#" title="사회공헌">사회공헌</a></li>
              <li><a href="#" title="친환경 경영">친환경 경영</a></li>
              <li><a href="#" title="동반성장">동반성장</a></li>
              <li><a href="#" title="경영철학">경영철학</a></li>
              <li><a href="#" title="지속가능경영보고서">지속가능경영보고서</a></li>
            </ul>
          </li>
    
          <li class="mainm">
            <a href="#none" title="투자정보">투자정보<i class="fa-solid fa-angle-down"></i></a>
            <ul class="sub">
              <li><a href="m_invest.html" title="투자정보">투자정보</a></li>
              <li><a href="m_invest.html" title="경영정보">경영정보</a></li>
              <li><a href="m_invest.html" title="공시정보">공시정보</a></li>
              <li><a href="m_invest.html" title="주식정보">주식정보</a></li>
              <li><a href="m_invest.html" title="채무정보">채무정보</a></li>
              <li><a href="m_invest.html" title="IR자료실">IR자료실</a></li>
            </ul>
          </li>
    
          <li class="mainm">
            <a href="#none" title="채용정보">채용정보<i class="fa-solid fa-angle-down"></i></a>
            <ul class="sub">
              <li><a href="m_career.html" title="채용정보">채용정보</a></li>
              <li><a href="m_career.html#c_process" title="채용프로세스">채용프로세스</a></li>
              <li><a href="m_career.html" title="채용">채용</a></li>
              <li><a href="m_career_list.php" title="나의 지원 현황">나의 지원 현황</a></li>
            </ul>
          </li>
        </ul>
    
        <ul class="m_lnb">
          <li><a href="m_signin.html" title="로그인"><i class="fa-solid fa-user"></i> 로그인</a>
            <a href="m_join.html" title="회원가입">| 회원가입</a></li>
          <li>
            <a href="#" title="공지사항"><i class="fa-solid fa-bell"></i> 공지사항</a>
          </li>
          <li>
            <a href="#" title="고객센터"><i class="fa-solid fa-phone"></i> 고객센터</a>
          </li>
          <li>
            <a href="#" title="이용약관"><i class="fa-solid fa-circle-question"></i> 이용약관</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <article id="c_list">
      <h2>나의 지원현황</h2>
      <p>나의 지원현황을 확인하세요.</p>
      <a href="m_career.html" title="채용공고 보러가기" class="c_btn01">채용공고 보러가기 <i class="fas fa-arrow-circle-right"></i></a>
      <ul class="c_tab">
        <li class="c_on">지원현황</li>
        <li>관심공고</li>
      </ul>
      <form name="search" method="post" action="m_career_search.php">
        <table>
          <colgroup>
            <col width="5%">
            <col width="15%">
            <col width="10%">
            <col width="40%">
            <col width="20%">
            <col width="10%">
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
            $search_box = $_POST['search_box'];
            $query = "select * from career where subject='$search_box'";
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
      
        <select id="search_box" name="search_box">
          <option value="[노브랜드]전략 경력 구성원 채용 (~03.02)" <?if($search_box=="[노브랜드]전략 경력 구성원 채용 (~03.02)"){echo "selected";}?>>[노브랜드]전략 경력 구성원 채용 (~03.02)</option>
          <option value="[Digital Transform]Back-end Engineer 채용 경력직 (~03.10)" <?if($search_box=="[Digital Transform]Back-end Engineer 채용 경력직 (~03.10)"){echo "selected";}?>>[Digital Transform]Back-end Engineer 채용 경력직 (~03.10)</option>
          <option value="[Digital Transform]Fornt-end Engineer 채용 신입 (~03.10)" <?if($search_box=="[Digital Transform]Fornt-end Engineer 채용 신입 (~03.10)"){echo "selected";}?>>[Digital Transform]Fornt-end Engineer 채용 신입 (~03.10)</option>
          <option value="[이마트 에브리데이]와인전문 판매 전문직 채용 신입 (~03.20)" <?if($search_box=="[이마트 에브리데이]와인전문 판매 전문직 채용 신입 (~03.20)"){echo "selected";}?>>[이마트 에브리데이]와인전문 판매 전문직 채용 신입 (~03.20)</option>
          <option value="[스타벅스]바리스타 채용 신입 (~04.10)" <?if($search_box=="[스타벅스]바리스타 채용 신입 (~04.10)"){echo "selected";}?>>[스타벅스]바리스타 채용 신입 (~04.10)</option>
          <option value="[조선호텔앤리조트]마케팅 전략 채용 경력 (~04.20)" <?if($search_box=="[조선호텔앤리조트]마케팅 전략 채용 경력 (~04.20)"){echo "selected";}?>>[조선호텔앤리조트]마케팅 전략 채용 경력 (~04.20)</option>
        </select>
        <input type="submit" value="검색">
      </form>
    </article>
  </main>

  <!-- 푸터 영역 -->
  <footer>
    <div class="f_inner">
      <div class="flnb_top">
      <h2><a href="m_index.html" title="메인페이지로 바로가기"><img src="./image/f_logo.png" alt="하단로고"></a></h2>
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
      </div>
    </div>
    <a href="#" title="맨 위로 가기" class="top_btn">
      <i class="fa-solid fa-arrow-up-to-line"></i></a>
      <div class="version">
        <a href="http://jiaeyammas.dothome.co.kr/empress_myeongseong/index.html?move_pc_screen=1" title="PC버전보기">PC버전보기</a>
        <!-- 모바일 사용자가 주소창에 ?move_pc_screen=1값을 지우면 다시 pc화면을 볼 수 있음. -->
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