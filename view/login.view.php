<div class="login-container">
    <div class="logo">
      <img src="image/logo_slogun.png">
    </div>

    <button class="kakao_btn"><img src="image/kakao_logo.png">카카오로 시작하기</button>
    <button class="naver_btn"><img src="image/naver_logo.png">네이버로 시작하기</button>

    <div class="accordion" id="signupAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed btn btn-outline-primary btn-custom" type="button" data-bs-toggle="collapse" data-bs-target="#signupForm" aria-expanded="false">
            이메일로 가입하기
          </button>
        </h2>
        <div id="signupForm" class="accordion-collapse collapse">
          <div class="accordion-body">
            <p class="h5">회원가입</p>
             <form action="signup.php" method="POST">
               <div class="form-floating-custom">
                 <input type="text" class="form-control" id="name" name="name" placeholder=" " required>
                 <label for="name">이름</label>
                 <div class="invalid-feedback">
                  이름을 2자 이상 입력해주세요.
                </div>
               </div>
               <div class="form-floating-custom">
                 <input type="email" class="form-control" id="email" name="email" placeholder=" " required>
                 <label for="email">이메일</label>
                 <div class="invalid-feedback">
                  올바른 이메일 주소를 입력해주세요.
                </div>
               </div>
               <div class="form-floating-custom">
                 <input type="password" class="form-control" id="passwd" name="passwd" placeholder=" " required>
                 <label for="passwd">비밀번호</label>
                 <div class="invalid-feedback">
                  영문, 숫자 포함 8-15자리를 입력해 주세요.
                </div>
               </div>
               <div class="form-floating-custom tel-form">
                  <input type="tel"  class="form-control" id="phone" name="phone" placeholder=" " required>
                  <label for="phone">핸드폰 번호</label>
                  <div class="invalid-feedback phone-error">
                    (예 : 01012341234) , ‘-’ 제외 입력
                  </div>
                  <!--<button>인증 번호 요청</button>-->
                  <button class="input-group-text" id="validationTooltipUsernamePrepend">인증 번호 요청</ㅠ>
                </div>
                <div class="terms-wrapper">
                  <div class="left">
                    <input type="checkbox" id="checkDefault" class="form-check-input">
                    <label for="checkDefault" class="form-check-label">이용약관 전체 동의</label>
                  </div>
                  <div class="right">
                    <span class="more">자세히 보기</span>
                    <button class="arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="sub-terms">
                  <div class="privacy-terms">
                    <div>
                        <input type="checkbox" id="checkDetail" class="form-check-input">
                        <label for="checkDetail" class="form-check-label">(필수) 이용약관과 개인정보 처리방침 동의</label>
                    </div>
                    <span class="detail_more" data-bs-toggle="modal" data-bs-target="#privacyModal">더보기</span>
                  </div>
                  <div class="modal fade" id="privacyModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h6">이용약관과 개인정보 처리방침 동의 안내</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="닫기"></button>
                        </div>
                        <div class="modal-body">
                            <p class="h7">제1조 (목적)</p>
                            <p class="haedsup">
                              본 약관은 주식회사 하나투어(이하 “회사”라 한다)가 운영하는 사이버몰과 하나투어 마일리지클럽(이하 “몰”이라 한다)에서 제공하는 서비스(이하 "서비스"라 한다)를 통합 운영하고 제공함에 있어 이용자(이하 “이용자”)와의 이용조건 및 권리 의무와 절차 및 책임사항을 규정함을 목적으로 합니다.
                            </p>
                            <p class="h7">제2조 (정의)</p>
                            <p class="haedsup">
                              1."몰"이란 ”회사”가 이용자에게 재화 또는 용역(이하 "재화"이라 함)과 서비스를 컴퓨터 등 정보통신 설비를 이용하여 사용하고 거래할 수 있도록 설정한 가상의 영업장(www.hanatour.com 등 회사가 운영하는 웹사이트 및 모바일 웹, 앱 등을 모두 포함)을 의미합니다.<br>
                              2."이용자"란 "몰"에 접속하여 이 약관에 따라 "몰"이 제공하는 재화 및 서비스를 이용하는 회원 및 비회원을 말합니다.<br>
                              3.“회원”이라 함은 "몰"에 본 약관과 개인정보 제공에 동의하여 회원등록을 한 자로서, "몰"의 정보를 지속적으로 제공받으며, "몰"이 제공하는 재화와 서비스를 계속적으로 이용할 수 있는 개인 및 법인을 말합니다.<br>
                              4.“비회원”이라 함은 회원에 가입하지 않고 "몰"이 제공하는 재화와 서비스를 이용하는 자를 말합니다.<br>
                              5."이용자아이디(이하 “ID”)"라 함은 “몰”의 이용을 위하여 등록한 이메일 주소 체계로 표기된 인식문자를 말합니다.<br>
                              6."비밀번호"라 함은 “ID”회원임을 확인하고, 서비스 보안을 위해 회원이 설정하여 “몰”에 통보한 8자리 이상 16자리 이하의 영문과 숫자, 특수문자를 혼용하여 표기한 암호문자를 말합니다. 회원의 안전한 서비스를 이용을 위해 비밀번호 구성 중 유출이 쉬운 비밀번호의 이용에 관해서는 “몰”에서 일부 제한할 수 있습니다.<br>
                              7."본인인증수단"이라 함은 휴대폰 본인인증, 실명인증+휴대폰인증, 실명인증+이메일인증 등 “몰”에서 회원 가입, 로그인, 아이디 찾기, 비밀번호 등 변경에 필요한 서비스 보안을 위하여 “몰”이 정한 인증수단을 말합니다.<br>
                              8."인증정보"란 “ID”, 비밀번호 설정에 필요한 정보를 말합니다.<br>
                              9."생체정보"란 지문, 홍채, 정맥, 안면, 음성 등 개인을 식별할 수 있는 신체적 또는 행동적 특징에 관한 정보를 의미 합니다.<br>
                              10.“영업일”이란 회사가 정상적으로 서비스를 제공한 날로서 대한민국 기준, 토요일, 일요일 및 법정 공휴일을 제외한 날을 말합니다.<br>
                              11.“구매안전서비스”란 회사가 구매자가 결제한 결제대금을 보호하기 위하여 일정기간 결제대금을 예치하는 서비스를 말합니다.<br>
                              12.“안전거래센터”란 서비스 이용 중 거래의 안전과 관련하여 발생할 수 있는 문제를 조정하기 위한 기구를 말합니다.<br>
                              13.“분쟁조정센터”란 “몰”을 통한 거래에서 분쟁이 발생하면 판매자와 구매자가 자율적으로 해결하는 것이 원칙이지만, 분쟁의 합리적이고 원활한 조정을 위하여 예외적으로 회사가 설치 운영하는 분쟁조정기구를 말합니다.<br>
                              14.“전자결제대행수수료”란 구매자가 신용카드, 실시간계좌이체를 통해 상품을 구매 시 PG사에 지불해야 하는 수수료를 말합니다.<br>
                              15.“하나투어 마일리지클럽”(이하 “하나투어클럽”)은 “몰”이 회원에게 제공하는 멤버십서비스로 서비스의 개요는 본 약관 제4조와 같습니다.<br>
                              16."제휴가맹점"은 “회사”와 제휴 계약을 체결하여 “하나투어클럽” 서비스를 운영하기로 합의한 개인 또는 법인 등을 말합니다.<br>
                              17.“하나투어마일리지” (이하 “마일리지”)란 회원이 “몰”과 “제휴가맹점”에서 재화 및 서비스 구매 시 제공되는 것으로써 회원이 본 약관에 따라 하나투어클럽 서비스를 이용하기 위하여 취득하는 것으로 세부사항은 본 약관 제8조와 같습니다.<br>
                              18.“하나투어마일리지 비밀번호”란 “하나투어클럽”을 이용하고 정보확인 및 서비스 보안을 위해 이용자가 설정한 8자리 이상 16자리 이하의 영문과 숫자, 특수문자를 혼용하여 표기한 암호문자를 말합니다. 회원의 안전한 서비스의 이용을 위해 비밀번호 구성 중 유출이 쉬운 비밀번호의 이용에 관해서는 회사에서 일부 제한할 수 있습니다.<br>
                              19.“접근매체”라 함은 전자금융거래에 있어서 거래 지시를 하거나 회원 및 거래 내용의 진실성과 정확성을 확보하기 위하여 사용되는 “회원번호”, “ID”, “비밀번호”, “전자식카드”, “인증서” 등을 말합니다.<br>
                              20.“하나투어클럽 제휴카드”(이하 “제휴카드”)는 하나투어클럽의 기본적인 멤버십, 마일리지 서비스와 카드사 혹은 제휴사의 추가 서비스가 탑재된 신용카드, 멤버십 카드등을 말합니다.<br>
                              21.회원의 회원가입신청이 승낙되지 않으면 가입대기중 (이하 “신청중 회원”) 상태로 분류하고 개인정보 처리방침에 따라 보관/운영합니다.<br>
                            </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="marketing-terms">
                    <div>
                      <input type="checkbox" id="checkChoice" class="form-check-input">
                      <label for="checkChoice" class="form-check-label">(선택) 이벤트 및 혜택 정보 수신 동의</label>
                    </div>
                    <span class="detail-choice" data-bs-toggle="modal" data-bs-target="#marketingModal">더보기</span>
                  </div>
                  <div class="modal fade" id="marketingModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h6">마케팅 활용 및 광고성 정보 수신동의</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="닫기"></button>
                        </div>
                        <div class="modal-body">
                            <p class="h7">마케팅 활용 및 광고성 정보 수신동의</p>
                            <p class="haedsup">
                                  고객님은 아래 개인정보 수집·이용에 관한 동의를 거부하실 수 있습니다. <br>
                                  다만, 동의하지 않으실 경우 여행 맞춤 서비스 및 정보제공이 일부 제한될 수 있으며 여행서비스 이용에는 영향이 없습니다. <br>
                                  동의하시는 경우 상품이나 서비스 홍보 및 판매권유 등의 목적으로 개인정보를 이용하여 연락을 드릴 수 있습니다.
                              </p>
                            <p class="h7">개인정보 수집항목 | 수집 및 이용목적 | 보유 및 이용기간</p>
                            <p class="haedsup">
                                  <strong>◾ 수집항목:</strong><br> 성명, 휴대전화번호, 이메일<br>
                                  <strong>◾ 수집 및 이용목적:</strong><br> 하나투어/하나투어클럽/자회사/제휴사의 상품 및 혜택, 각종 이벤트 및 행사 관련 정보 안내<br>
                                  <strong>◾ 보유 및 이용기간:</strong><br> 회원탈퇴 시 또는 동의철회 시까지
                              </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               <button class="signup_btn">회원가입</button>
             </form>
          </div>
        </div>
      </div>
    </div>

    <div class="login mt-4">
      <p class="h5">로그인</p>
      <form action="login.ok.php" method="POST">
        <div class="form-floating-custom">
          <input type="text" id="login_id" name="login_id" placeholder=" " required>
          <label for="login_id">이메일</label>
        </div>
        <div class="form-floating-custom">
          <input type="password" id="login_pw" name="login_pw" placeholder=" " required>
          <label for="login_pw">비밀번호</label>
        </div>
        <button class="login_btn">로그인</button>
      </form>
      <div class="findInfo">
        <a href="">아이디 찾기</a>
        <span>/</span>
        <a href="">비밀번호 찾기</a>
        <span>/</span>
        <a href="guest.php">비회원 조회</a>
      </div>
    </div>
</div>