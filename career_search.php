<?php

  include('./dbconn.php');

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이마트</title>
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/base.css" type="text/css">
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <link rel="stylesheet" href="./css/main.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="./script/prefixfree.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="./script/main.js" defer></script>
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