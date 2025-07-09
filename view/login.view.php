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
             <form action="login.php" method="POST">
               <div class="form-floating-custom">
                 <input type="text" class="form-control" id="name" placeholder=" " minlength="2" required>
                 <label for="name">이름</label>
                 <div class="invalid-feedback">
                  이름을 2자 이상 입력해주세요.
                </div>
               </div>
               <div class="form-floating-custom">
                 <input type="email" class="form-control" id="email" placeholder=" " required>
                 <label for="email">이메일</label>
                 <div class="invalid-feedback">
                  올바른 이메일 주소를 입력해주세요.
                </div>
               </div>
               <div class="form-floating-custom">
                 <input type="password" class="form-control" id="userpw" placeholder=" " required>
                 <label for="userpw">비밀번호</label>
                 <div class="invalid-feedback">
                  영문, 숫자 포함 8-15자리를 입력해 주세요.
                </div>
               </div>
               <div class="form-floating-custom tel-form">
                  <input type="tel"  class="form-control" id="phone" placeholder=" " required>
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
                    <span class="detail_more">더보기</span>
                  </div>
                  <dialog id="privacyModal">
                      <div class="modal_header">
                          <p class="h5 modal_title">마케팅 활용 및 광고성 정보 수신동의</p>
                          <button class="close_button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                            </svg>                          
                          </button>
                        </div>
                      
                      <div class="modal-content">
                          <div class="marketing">
                              <p class="h6">마케팅 활용 및 광고성 정보 수신동의</p>
                              <p class="haedsup">
                                  고객님은 아래 개인정보 수집·이용에 관한 동의를 거부하실 수 있습니다. <br>
                                  다만, 동의하지 않으실 경우 여행 맞춤 서비스 및 정보제공이 일부 제한될 수 있으며 여행서비스 이용에는 영향이 없습니다. <br>
                                  동의하시는 경우 상품이나 서비스 홍보 및 판매권유 등의 목적으로 개인정보를 이용하여 연락을 드릴 수 있습니다.
                              </p>
                          </div>
                          
                          <div class="info-content">
                              <p class="h6">개인정보 수집항목 | 수집 및 이용목적 | 보유 및 이용기간</p>
                              <p class="haedsup">
                                  <strong>수집항목:</strong> 성명, 휴대전화번호, 이메일<br><br>
                                  <strong>수집 및 이용목적:</strong> 하나투어/하나투어클럽/자회사/제휴사의 상품 및 혜택, 각종 이벤트 및 행사 관련 정보 안내<br><br>
                                  <strong>보유 및 이용기간:</strong> 회원탈퇴 시 또는 동의철회 시까지
                              </p>
                          </div>
                      </div>
                  </dialog>
                  <div class="marketing-terms">
                    <div>
                      <input type="checkbox" id="checkChoice" class="form-check-input">
                      <label for="checkChoice" class="form-check-label">(선택) 이벤트 및 혜택 정보 수신 동의</label>
                    </div>
                    <span class="detail-choice">더보기</span>
                  </div>
                  <dialog id="marketingModal">
                      <div class="modal-header">
                          <p class="h5 modal-title">마케팅 활용 및 광고성 정보 수신동의</p>
                          <button class="close-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                            </svg>                          
                          </button>
                        </div>
                      
                      <div class="modal-content">
                          <div class="marketing">
                              <p class="h6">마케팅 활용 및 광고성 정보 수신동의</p>
                              <p class="haedsup">
                                  고객님은 아래 개인정보 수집·이용에 관한 동의를 거부하실 수 있습니다. <br>
                                  다만, 동의하지 않으실 경우 여행 맞춤 서비스 및 정보제공이 일부 제한될 수 있으며 여행서비스 이용에는 영향이 없습니다. <br>
                                  동의하시는 경우 상품이나 서비스 홍보 및 판매권유 등의 목적으로 개인정보를 이용하여 연락을 드릴 수 있습니다.
                              </p>
                          </div>
                          
                          <div class="info-content">
                              <p class="h6">개인정보 수집항목 | 수집 및 이용목적 | 보유 및 이용기간</p>
                              <p class="haedsup">
                                  <strong>수집항목:</strong> 성명, 휴대전화번호, 이메일<br><br>
                                  <strong>수집 및 이용목적:</strong> 하나투어/하나투어클럽/자회사/제휴사의 상품 및 혜택, 각종 이벤트 및 행사 관련 정보 안내<br><br>
                                  <strong>보유 및 이용기간:</strong> 회원탈퇴 시 또는 동의철회 시까지
                              </p>
                          </div>
                      </div>
                  </dialog>
                </div>
               <button class="signup_btn">회원가입</button>
             </form>
          </div>
        </div>
      </div>
    </div>

    <div class="login mt-4">
      <p class="h5">로그인</p>
      <form action="" method="POST">
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