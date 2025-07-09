<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>하나투어</title>
  <link rel="apple-touch-icon" sizes="57x57" href="image/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="image/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="image/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="image/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="image/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="image/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="image/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="image/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="image/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="image/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
  <link rel="manifest" href="/image/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="image/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Inter:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/main.css">
  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>
  
</head>

<body>
  <section class="main_section">
    <header class="main_header">
      <nav>
        <h1 class="main_logo"><a href="index.html">하나투어</a></h1>
        <ul class="main_menus">
          <li><a class="all_menu_btn" href="">전체메뉴</a></li>
          <li><a href="">해외여행</a></li>
          <li><a href="">국내여행</a></li>
          <li><a href="">항공</a></li>
          <li><a href="">투어/티켓</a></li>
          <li><a href="event.html">이벤트/혜택</a></li>
        </ul>
        <ul class="side-menus">
          <li>
            <a href="">
              <img src="image/search_white.png">
            </a>
          </li>
          <li><a href="login.html">로그인</a></li>
          <li><a class="sign_btn" href="login.html">회원가입</a></li>
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
                <img src="image/ic_trip.png" alt="해외여행">
                <p>해외여행</p>
              </a>
            </li>
            <li>
              <a href="">
                <img src="image/ic_koreatrip.png" alt="국내여행">
                <p>국내여행</p>
              </a>
            </li>
            <li>
              <a href="">
                <img src="image/ic_airplane.png" alt="항공권">
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
                <img src="image/ic_rent.png" alt="렌트">
                <p>렌트</p>
              </a>
            </li>
            <li>
              <a href="">
                <img src="image/ic_zeus.png" alt="제우스">
                <p>제우스</p>
              </a>
            </li>
            <li>
              <a href="">
                <img src="image/ic_ticket.png" alt="티켓투어">
                <p>티켓/투어</p>
              </a>
            </li>
            <li>
              <a href="">
                <img src="image/ic_event.png" alt="이벤트 혜택">
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
                <li><a href="">FAQ (자주찾는질문)</a></li>
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
          <a href=""> <img src="image/aside_login.png" alt="로그인"> 로그인</a>
          <button class="aside_close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
          </svg></button>
        </div>
        <form>
          <input type="search" class="aside_input" placeholder="검색어를 입력해주세요">
        </form>
        <p class="h6">베스트 여행지</p>
        <ul class="aside_best">
          <li>
            <a href=""><img src="image/ham_tokyo.png" alt="도쿄">도쿄</a>
          </li>
          <li>
            <a href=""><img src="image/ham_cota.png" alt="홍콩">홍콩</a>
          </li>
          <li> 
            <a href=""><img src="image/ham_jeju.png" alt="제주">제주</a>
         </li>
          <li>
            <a href=""><img src="image/ham_newyork_.png" alt="뉴욕">뉴욕</a>
          </li>
          <li>
           <a href=""><img src="image/ham_danang.png" alt="다낭">다낭</a>
          </li>
          <li>
            <a href=""><img src="image/ham_danang.png" alt="다낭">다낭</a>
           </li>
           <li>
            <a href=""><img src="image/ham_danang.png" alt="다낭">다낭</a>
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
              <li><a href="#">이벤트/혜택</a></li>
            </ul>
          </div>
          <div class="aside_tab" id="tab_2">
            <ul>
              <li><a href="#">FAQ(자주찾는질문)</a></li>
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