<?php
  require_once('inc/db.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $model ?></title>
  <link rel="apple-touch-icon" sizes="57x57" href="./image/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./image/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./image/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./image/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./image/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./image/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./image/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./image/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./image/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="./image/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./image/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon/favicon-16x16.png">
  <link rel="manifest" href="./image/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="./image/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Inter:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  
  <link rel="stylesheet" href="./css/common.css">
  <?= $css1 ?>
  <?= $css2 ?>
  <?= $css3 ?>
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>
  
</head>
<body>
  <section class="main_section">
      <header class="main_header">
        <nav>
          <h1 class="main_logo"><a href="index.php">하나투어</a></h1>
          <ul class="main_menus">
            <li><a class="all_menu_btn" href="">전체메뉴</a></li>
            <li><a href="">해외여행</a></li>
            <li><a href="">국내여행</a></li>
            <li><a href="">항공</a></li>
            <li><a href="">투어/티켓</a></li>
            <li><a href="event.php">이벤트/혜택</a></li>
          </ul>
          <ul class="side-menus">
            <li>
              <a href="">
                <img src="image/search_white.png" alt="검색아이콘">
              </a>
            </li>
            <?php if (isset($_SESSION['user_id'])): ?>
              <li><a href="logout.php">로그아웃</a></li>
              <li><a href="" class="userpage_btn">마이페이지</a></li>
            <?php else: ?>
              <li><a href="login.php">로그인</a></li>
              <li><a class="sign_btn" href="signup.php">회원가입</a></li>
            <?php endif; ?>
            <li class="hamburger-menu">
              <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
              </svg>
            </li>
          </ul>
        </nav>
        <div class="all_menu_dropdown">
          <div class="big-container">
            <ul class="dropdown_icons">
              <li>
                <a href="">
                  <img src="image/ic_trip.png" alt="">
                  <p>해외여행</p>
                </a>
              </li>
              <li>
                <a href="">
                  <img src="image/ic_koreatrip.png" alt="">
                  <p>국내여행</p>
                </a>
              </li>
              <li>
                <a href="">
                  <img src="image/ic_airplane.png" alt="">
                  <p>항공권</p>
                </a>
              </li>
              <li>
                <a href="">
                  <img src="image/ic_hotel.png" alt="호텔">
                  <p>호텔</p>
                </a>
              </li>
              <li>
                <a href="">
                  <img src="image/ic_rent.png" alt="">
                  <p>렌트</p>
                </a>
              </li>
              <li>
                <a href="">
                  <img src="image/ic_zeus.png" alt="">
                  <p>제우스</p>
                </a>
              </li>
              <li>
                <a href="">
                  <img src="image/ic_ticket.png" alt="">
                  <p>티켓/투어</p>
                </a>
              </li>
              <li>
                <a href="">
                  <img src="image/ic_event.png" alt="">
                  <p>이벤트/혜택</p>
                </a>
              </li>
            </ul>
            <ul class="dropdown_lists">
              <li><span class="dropdown_title">국내여행</span> 
                <ul>
                  <li><a href="">제주도</a></li>
                  <li><a href="">내륙여행</a></li>
                  <li><a href="">울릉도/섬</a></li>
                  <li><a href="">골프투어</a></li>
                </ul>
              </li>
              <li><span class="dropdown_title">해외여행</span> 
                <ul>
                  <li><a href="">동남아</a></li>
                  <li><a href="">일본</a></li>
                  <li><a href="">유럽</a></li>
                  <li><a href="">괌/사이판/호주/뉴질랜드</a></li>
                  <li><a href="">중국/홍콩/몽골/중앙아시아</a></li>
                  <li><a href="">비주/중남미/하와이</a></li>
                </ul>
              </li>
              <li><span class="dropdown_title">호텔</span> 
                <ul>
                  <li><a href="">국내숙박</a></li>
                  <li><a href="">해외호텔</a></li>
                  <li><a href="">유럽</a></li>
                </ul>
              </li>
              <li><span class="dropdown_title">이벤트/혜택</span> </li>
              <li><span class="dropdown_title">고객센터</span> 
                <ul>
                  <li><a href="faq.php">FAQ (자주찾는질문)</a></li>
                  <li><a href="">챗봇상담</a></li>
                  <li><a href="">1:1 문의하기</a></li>
                  <li><a href="">공지사항</a></li>
                </ul>
              </li>
            </ul>
            
          </div>
        </div> <!--드롭다운 -->
        <aside>
        <div class="aside_top">
              <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php"> 
                  <img src="image/aside_login.png" alt=""> 로그아웃
                </a>
              <?php else: ?>
                <a href="login.php"> 
                  <img src="image/aside_login.png" alt=""> 로그인
                </a>
              <?php endif; ?>
              <button  aria-label="햄버거메뉴닫기버튼"   class="aside_close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
              </svg></button>
            </div>
            <form>
              <input type="search" class="aside_input" placeholder="검색어를 입력해주세요">
            </form>
            <p class="h6">베스트 여행지</p>
            <ul class="aside_best">
              <li>
                <a href=""><img src="image/ham_tokyo.png" alt="">도쿄</a>
              </li>
              <li>
                <a href=""><img src="image/ham_cota.png" alt="">홍콩</a>
              </li>
              <li> 
                <a href=""><img src="image/ham_jeju.png" alt="">제주</a>
            </li>
              <li>
                <a href=""><img src="image/ham_newyork_.png" alt="">뉴욕</a>
              </li>
              <li>
              <a href=""><img src="image/ham_danang.png" alt="">다낭</a>
              </li>
              <li>
                <a href=""><img src="image/ham_saipan.png" alt="">사이판</a>
              </li>
              <li>
                <a href=""><img src="image/ham_paris.png" alt="">파리</a>
              </li>
            </ul>
            <div class="aside_btns">
              <a href="#tab_1" class="active">하나투어</a>
              <a href="#tab_2">고객센터</a>
              <div class="underline"></div>
            </div>
            <div class="aside_tabs">
              <div class="aside_tab active" id="tab_1">
                <ul>
                  <li><a href="#">해외여행</a></li>
                  <li><a href="#">국내여행</a></li>
                  <li><a href="#">항공권</a></li>
                  <li><a href="#">호텔</a></li>
                  <li><a href="#">렌트</a></li>
                  <li><a href="#">제우스</a></li>
                  <li><a href="#">티켓/투어</a></li>
                  <li><a href="event.php">이벤트/혜택</a></li>
                </ul>
              </div>
              <div class="aside_tab" id="tab_2">
                <ul>
                  <li><a href="faq.php">FAQ(자주찾는질문)</a></li>
                  <li><a href="#">챗봇 상담</a></li>
                  <li><a href="#">1대1 문의</a></li>
                  <li><a href="#">공지사항</a></li>
                </ul>
              </div>
            </div>
          
            
        </aside>
      <!-- 960px 이하 햄버거 사이드메뉴-->
      </header>


      <div class="mslides-container">
        <div class="mslide mslide1 active" >
          <div class="main-title-area">
            <div class="main-title">
              여행을 더 특별하게<br>
              제대로 즐기자
            </div>
            <p class="main-desc">
              <a href="">
                #NO 팁
              </a>
              <a href="">
                #자유여행
              </a>
              <a href="">
                #패키지
              </a>
              <a href="">
              #5성급호텔
              </a>
            </p>
          </div>
        </div>
        <div class="mslide mslide2">
          <div class="main-title-area">
            <div class="main-title">
              한눈에 보는 오사카의 모든 것<br>
              먹고 보고 즐겨라!
            </div>
            <p class="main-desc">
              <a href="">
              #사계절 매력 가득
              </a>
              <a href="">
              #낮과 밤 언제나
              </a>
              <a href="">
              #근교 소도시 즐기기
              </a>
            </p>
          </div>
        </div>
        <div class="mslide mslide3">
          <div class="main-title-area">
            <div class="main-title">
              열심히 일하고 자, 떠나보자!<br>
              슬기로운 연차생활
            </div>
            <p class="main-desc">
              <a href="">
                연차일수 별 여행지 추천!
              </a>
            </p>
          </div>
        </div>
        <div class="mslide mslide4">
          <div class="main-title-area">
            <div class="main-title">
              섬마다 만나는 나만의 쉼<br>
              필리핀 자유여행
            </div>
            <p class="main-desc">
              <a href="">
                #주차별 할인 상품
              </a>
              <a href="">
                #웰컴키트 증정
              </a>
              <a href="">
                #할인쿠폰
              </a>
            </p>
          </div>
        </div>
        <div class="mslide mslide5">
          <div class="main-title-area">
            <div class="main-title">
              여름맞이 숙박 세일 페스타<br>
              제대로 즐기자
            </div>
            <p class="main-desc">
              <a href="">
                #문화체육관광부
              </a>
              <a href="">
                #한국관광공사
              </a>
              <a href="">
                #지역특별기획전
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="main_paginations">
        <ul>
          
        </ul>
      </div>
  </section>

  <?php 
        require("$name.view.php"); //출력할 문장
  ?>

  <footer>
        <nav class="footer_nav">
          <a href="#">회사소개</a>
          <a href="#">이용약관</a>
          <a href="#">여행약관</a>
          <a href="#">홍보센터</a>
          <a href="#">개인정보처리방침</a>
          <a href="#">마케팅제휴</a>
          <a href="#">공식인증예약센터</a>
          <a href="#">해외여행자보험</a>
        </nav>
        <div class="big-container">
          <div class="footer_top">
            <div class="footer_contacts">
              <div class="contact">
                <div class="contact_num">
                  <span class="h3">하나투어 고객센터</span>
                  <span class="h3">☎️ 1544-0802</span>
                </div>
                <p>운영시간 평일 10:00 - 18:00 (토/일/공휴일 휴무)</p>
                <p>점심시간 평일 13:00 - 14:00</p>
                <div>
                  <a href="faq.php" class="qna_btn">자주 묻는 질문</a>
                  <a href="faq.php" class="qna_btn">1대1 문의</a>
                </div>
              </div>
              <div class="contact">
                <div class="contact_num">
                  <span class="h3">해외 항공권 문의</span>
                  <span class="h3">☎️ 1899-1833</span>
                </div>
                <p>운영시간 평일 09:00 - 17:00 (토/일/공휴일 휴무)</p>
                <p>점심시간 평일 12:00 - 13:00</p>
              </div>
              <div class="contact">
                <span class="h5">하나은행 구매안전 서비스</span>
                <p>
                  고객님은 안전거래를 위해 현금으로 결제 시 (주)하나투어에서 가입한 
                  하나은행의 구매안전서비스를 이용하실 수 있습니다.
                </p>
                <a href="#" class="service_check">서비스 가입사실 확인</a>
              </div>
            </div>
          </div>
          
          <div class="footer_bottom">
            <div class="footer_info">
                <div class="show_info">
                  <span>(주)하나투어 <i class="bi bi-chevron-down chevron-animate"></i></span> 
                </div>
                <ul class="sns">
                  <li><a href="#"><img src="image/sns1.png" alt="페이스북"></a></li>
                  <li><a href="#"><img src="image/sns2.png" alt="인스타그램"></a></li>
                  <li><a href="#"><img src="image/sns3.png" alt="카카오스토리"></a></li>
                  <li><a href="#"><img src="image/sns4.png" alt="유튜브"></a></li>
                  <li><a href="#"><img src="image/sns5.png" alt="네이버블로그"></a></li>
                </ul>
                <div class="company_info">
    
                  <p>㈜하나투어 | 대표이사: 송미선 | 주소: (03161) 서울특별시 종로구 인사동 5길 41</p>
                  <p>
                    <span>사업자등록번호: </span> 102-81-39440 | 
                    <a href="#">사업자정보확인</a> | 
                    <span>통신판매업신고번호: </span>종로01-1806호 | 
                    <span>관광사업자 등록번호: </span>제1993-000006호 | 
                    <span>등록관청: </span>서울특별시 종로구청
                  </p>
                  <p>
                    개인정보 보호 책임자: 전준형 | 
                    영업보증공제 15억 1천만원 가입 | 
                    기획여행보증공제 7억원 가입 | 
                    팩스: 02-734-0392 | 
                    이메일: <a href="#">15771233@hanatour.com</a>
                  </p>
                </div>
            </div>
            <ul class="footer_emblem">
              <li><img src="image/emblem1.png" alt="한국소비자원"></li>
              <li><img src="image/emblem2.png" alt="한국능률협회"></li>
              <li><img src="image/emblem3.png" alt="KCSI 인증"></li>
              <li><img src="image/emblem4.png" alt="KS-SQI 인증"></li>
              <li><img src="image/emblem5.png" alt="NCSI 인증"></li>
              <li><img src="image/emblem6.png" alt="ISMS 인증"></li>
            </ul>
            <div class="footer_copy">
              <p>COPYRIGHT&copy; HANATOUR SERVICE INC. ALL RIGHTS RESERVED.</p>
            </div>
          </div>
      
        </div>
  </footer>

  <div class="side_bar">
    <button class="history">
      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
        <circle cx="19" cy="19" r="19" fill="#AFAFAF" fill-opacity="0.7"/>
        <g clip-path="url(#clip0_524_3195)">
        <path d="M29.3564 26.4902C29.0813 26.8345 28.7901 27.165 28.4775 27.4775C27.4005 28.5546 26.1343 29.4091 24.6797 30.042C23.2253 30.6748 21.6655 30.9922 20 30.9922C19.1645 30.9922 18.3589 30.9127 17.582 30.7617L20.0029 28.3408C22.6038 28.3401 24.8101 27.4341 26.6221 25.6221C26.9411 25.3031 27.2313 24.9714 27.4941 24.6279L29.3564 26.4902ZM10.793 20.3418C11.1055 22.6516 12.1338 24.5624 13.8779 26.0732C15.6217 27.5837 17.6597 28.3389 19.9912 28.3408L17.5723 30.7598C15.5035 30.3558 13.6423 29.419 11.9893 27.9434C9.71535 25.9135 8.41094 23.38 8.07617 20.3418H10.793ZM20 7.00781C21.6655 7.00781 23.2253 7.32519 24.6797 7.95801C26.1343 8.59095 27.4005 9.44545 28.4775 10.5225C29.5546 11.5995 30.4091 12.8657 31.042 14.3203C31.6748 15.7747 31.9922 17.3345 31.9922 19C31.9922 20.6655 31.6748 22.2253 31.042 23.6797C30.5939 24.7096 30.032 25.6428 29.3613 26.4834L27.499 24.6211C28.7265 23.0143 29.3418 21.1413 29.3418 19C29.3418 16.3978 28.4348 14.1906 26.6221 12.3779C24.8094 10.5652 22.6022 9.6582 20 9.6582C18.4655 9.6582 17.0307 10.0139 15.6963 10.7256C14.3618 11.4373 13.239 12.4167 12.3271 13.6621L12.3174 13.6748H15.9922V16.3252H8.00781V8.3418H10.6582V11.4902L10.6729 11.4717C11.8054 10.0504 13.1881 8.95106 14.8203 8.17383C16.4525 7.39664 18.1791 7.00781 20 7.00781ZM21.3252 12.3418V18.4668H21.3213L25.5879 22.7334L23.7334 24.5879L18.6748 19.5293V12.3418H21.3252Z" fill="#EFEFF2" stroke="#666666" stroke-width="0.0165217"/>
        </g>
        <defs>
        <clipPath id="cli p0_524_3195">
        <rect width="24" height="24" fill="white" transform="translate(8 7)"/>
        </clipPath>
        </defs>
        </svg>
    </button>
    <button class="likes">
      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
        <circle cx="19" cy="19" r="19" fill="#AFAFAF" fill-opacity="0.7"/>
        <path d="M19 33L17.5999 31.6254C15.5163 29.551 13.7938 27.7614 12.4324 26.2568C11.0708 24.7523 9.9867 23.4054 9.1801 22.2163C8.3733 21.0272 7.8083 19.9455 7.4851 18.9711C7.1617 17.9964 7 17.0073 7 16.0037C7 14.0086 7.6133 12.3426 8.8399 11.0055C10.0667 9.66851 11.5867 9 13.3999 9C14.5067 9 15.5401 9.27633 16.5001 9.82899C17.4601 10.3819 18.2934 11.1746 19 12.2073C19.7866 11.131 20.6499 10.3273 21.5899 9.79626C22.5299 9.26542 23.5333 9 24.6001 9C26.4133 9 27.9333 9.66851 29.1601 11.0055C30.3867 12.3426 31 14.0086 31 16.0037C31 17.0073 30.8383 17.9964 30.5149 18.9711C30.1917 19.9455 29.6267 21.0272 28.8199 22.2163C28.0133 23.4054 26.9292 24.7523 25.5676 26.2568C24.2062 27.7614 22.4837 29.551 20.4001 31.6254L19 33ZM19 30.0984C20.9898 28.1201 22.6273 26.4238 23.9125 25.0093C25.1975 23.5946 26.2167 22.3581 26.9701 21.2999C27.7233 20.2418 28.2499 19.299 28.5499 18.4716C28.8499 17.6443 28.9999 16.8227 28.9999 16.0069C28.9999 14.6084 28.5866 13.4545 27.76 12.5454C26.9334 11.6364 25.8816 11.1819 24.6046 11.1819C23.6042 11.1819 22.6783 11.5074 21.8269 12.1582C20.9757 12.809 20.3201 13.6981 19.8601 14.8255H18.1201C17.6733 13.7127 17.0243 12.8273 16.1731 12.169C15.3217 11.511 14.3958 11.1819 13.3954 11.1819C12.1184 11.1819 11.0666 11.6364 10.24 12.5454C9.4134 13.4545 9.0001 14.6096 9.0001 16.0105C9.0001 16.8279 9.1501 17.6528 9.4501 18.4854C9.7501 19.3182 10.2767 20.2673 11.0299 21.3327C11.7833 22.3983 12.8067 23.6347 14.1001 25.042C15.3933 26.4493 17.0266 28.1347 19 30.0984Z" fill="#EFEFF2"/>
        </svg>
        <div class="likes_ct"></div>
    </button>
    <button class="tell">
      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
        <circle cx="19" cy="19" r="19" fill="#AFAFAF" fill-opacity="0.7"/>
        <path d="M26.4467 11.3835C24.4176 10.4612 21.0972 10 18.7913 10C16.2088 10 13.4418 10.3689 11.1359 11.3835C9.84467 11.8447 8 13.1359 8 14.7961C8 15.3495 8.64563 16.733 8.92234 17.3787C9.1068 17.8399 9.6602 18.2088 10.1214 18.0243L13.0728 17.1942C13.6262 17.0097 13.9952 16.3641 13.9029 15.9029L13.8107 15.6262C13.6262 14.6117 14.2719 13.5971 15.1942 13.3204C15.2865 13.3204 15.3787 13.3204 15.4709 13.2282C17.6845 12.8592 19.8981 12.8592 22.1117 13.2282C23.1263 13.4126 23.8642 14.335 23.6797 15.2573C23.6797 15.3495 23.6797 15.4418 23.5875 15.534L23.4952 15.8107C23.3108 16.3641 23.6797 17.0097 24.3253 17.102L27.2768 17.9321C27.369 17.9321 27.4613 17.9321 27.6457 17.9321C28.1069 17.9321 28.4758 17.6554 28.6603 17.2865C28.937 16.8253 29.5827 15.3495 29.5827 14.7039C29.5827 13.1359 27.738 11.9369 26.4467 11.3835Z" fill="#EFEFF2"/>
        <path d="M28.5685 23.0048C29.1219 23.3737 29.3063 23.9271 29.3063 24.4805V27.7087C29.3063 28.4465 28.6607 28.9999 28.0151 28.9999H9.38389C8.64602 28.9999 8.09262 28.3543 8.09262 27.7087V24.4805C8.09262 23.8349 8.27709 23.3737 8.83049 23.0048L16.2092 18.3931V16.4562C16.2092 16.0872 16.4859 15.8105 16.8548 15.8105H20.8209C21.1898 15.8105 21.4665 16.0872 21.4665 16.4562V18.3931L28.5685 23.0048ZM18.6995 25.5873C19.8985 25.5873 20.9131 24.665 20.9131 23.3737C20.9131 22.0824 19.9907 21.1601 18.6995 21.1601C17.4082 21.1601 16.4859 22.0824 16.4859 23.3737C16.4859 24.665 17.5004 25.5873 18.6995 25.5873Z" fill="#EFEFF2"/>
        </svg>
    </button>
    <button class="sidebar_menu">
      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
        <circle cx="19" cy="19" r="19" fill="#AFAFAF" fill-opacity="0.7"/>
        <path d="M12.5 21.25C11.9033 21.25 11.331 21.0129 10.909 20.591C10.4871 20.169 10.25 19.5967 10.25 19C10.25 18.4033 10.4871 17.831 10.909 17.409C11.331 16.9871 11.9033 16.75 12.5 16.75C13.0967 16.75 13.669 16.9871 14.091 17.409C14.5129 17.831 14.75 18.4033 14.75 19C14.75 19.5967 14.5129 20.169 14.091 20.591C13.669 21.0129 13.0967 21.25 12.5 21.25ZM20 21.25C19.4033 21.25 18.831 21.0129 18.409 20.591C17.9871 20.169 17.75 19.5967 17.75 19C17.75 18.4033 17.9871 17.831 18.409 17.409C18.831 16.9871 19.4033 16.75 20 16.75C20.5967 16.75 21.169 16.9871 21.591 17.409C22.0129 17.831 22.25 18.4033 22.25 19C22.25 19.5967 22.0129 20.169 21.591 20.591C21.169 21.0129 20.5967 21.25 20 21.25ZM27.5 21.25C26.9033 21.25 26.331 21.0129 25.909 20.591C25.4871 20.169 25.25 19.5967 25.25 19C25.25 18.4033 25.4871 17.831 25.909 17.409C26.331 16.9871 26.9033 16.75 27.5 16.75C28.0967 16.75 28.669 16.9871 29.091 17.409C29.5129 17.831 29.75 18.4033 29.75 19C29.75 19.5967 29.5129 20.169 29.091 20.591C28.669 21.0129 28.0967 21.25 27.5 21.25Z" fill="#EFEFF2"/>
        </svg>
    </button>
    <button class="top_btn">
      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
        <circle cx="19" cy="19" r="19" fill="#AFAFAF" fill-opacity="0.7"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.78 14.7275C18.8273 14.6801 18.8834 14.6425 18.9452 14.6169C19.0071 14.5912 19.0733 14.578 19.1402 14.578C19.2072 14.578 19.2734 14.5912 19.3352 14.6169C19.397 14.6425 19.4532 14.6801 19.5004 14.7275L25.6056 20.8327C25.7012 20.9282 25.7548 21.0578 25.7548 21.1929C25.7548 21.328 25.7012 21.4575 25.6056 21.5531C25.5101 21.6486 25.3805 21.7023 25.2454 21.7023C25.1103 21.7023 24.9807 21.6486 24.8852 21.5531L19.1402 15.8071L13.3953 21.5531C13.2997 21.6486 13.1702 21.7023 13.0351 21.7023C12.9 21.7023 12.7704 21.6486 12.6749 21.5531C12.5793 21.4575 12.5257 21.328 12.5257 21.1929C12.5257 21.0578 12.5793 20.9282 12.6749 20.8327L18.78 14.7275Z" fill="#EFEFF2"/>
        </svg>
    </button>
  </div>

  <script src="js/common.js"></script>
  <?= $script1 ?>
  <?= $script2 ?>
  <?= $script3 ?>
</body>
</html>