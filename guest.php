<?php include 'sub_header.php'; ?>

<div class="guestsearch-container">
  <div class="logo">
    <img src="/image/logo_slogun.png" alt="로고 이미지">
  </div>
  <div class="mt-4">
    <p class="h5">비회원 조회</p>
    <div class="radio_btn">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="package" id="package" value="package" checked>
        <label class="form-check-label" for="package">
          패키지
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="package" id="flight-hotel" value="flight-hotel">
        <label class="form-check-label" for="flight-hotel">
          호텔/항공
        </label>
      </div>
    </div>
    <form action="" method="POST">
      <div class="form-floating-custom">
        <input type="text" class="form-control" id="guest_name" placeholder=" " minlength="2" required>
        <label for="guest_name">이름</label>
        <div class="invalid-feedback">
          이름을 2자 이상 입력해주세요.
        </div>
      </div>
      <div class="form-floating-custom">
        <input type="text" class="form-control" id="guest_number" placeholder=" " required>
        <label for="guest_number">예약번호</label>
        <div class="invalid-feedback">
          H 또는 C로 시작하는 12자리 번호를 입력해주세요.
        </div>
      </div>
      <p class="input_desc">
        <span>📢 유의사항</span>
        <br>
        예약번호는 H 또는 C로 시작하는 12자리 번호를 입력해주세요.
      </p>
      <div class="guest-info-search">
        <div class="radio_btn">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="guest" id="search_phone" value="phone" checked>
            <label class="form-check-label" for="search_phone">
              연락처로 조회
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="guest" id="search_email" value="email">
            <label class="form-check-label" for="search_email">
              이메일로 조회
            </label>
          </div>
        </div>
        <form action="" method="POST">
          <div class="form-floating-custom guest_phone active">
            <input type="tel" class="form-control" id="guest_phone" placeholder=" " pattern="[0-9]{10,11}" required>
            <label for="guest_name">연락처</label>
            <div class="invalid-feedback">
              (예 : 01012341234) , ‘-’ 제외 입력
            </div>
          </div>
          <div class="form-floating-custom guest_email">
              <input type="email" class="form-control" id="guest_email" placeholder=" " required>
              <label for="guest_email">이메일</label>
              <div class="invalid-feedback">
                올바른 이메일 주소를 입력해주세요.
              </div>
          </div>
        </form> 
        <button class="gusest_search_btn">조회</button>
      </div>
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>