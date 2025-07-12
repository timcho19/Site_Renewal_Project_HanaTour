/* - - - header - - - - */
$('.all_menu_btn').on('click', function(e) {
  e.preventDefault();
  $('.all_menu_dropdown').toggleClass('active');
});



/* - - - - accordian 클릭 시 login display none */
$('.accordion .accordion-button').click(function(){
  $('.login').toggleClass('active');
});


/* - - - - 자세히 보기 클릭 시 - - - - */
$('.right').click(function(e){
  e.preventDefault();

  const $target = $('.sub-terms');

  if ($target.hasClass('open')) {
    $target.removeClass('open');
    $target.css('max-height', '0');
  } else {
    const scrollHeight = $target.prop('scrollHeight'); // 실제 크기 구하기!!!
    $target.addClass('open');
    $target.css('max-height', scrollHeight + 'px');
  }

  $(this).toggleClass('active');
});



/* - - - - 이용약관 세부 모달 - - - - - */
$('.detail_more').on('click', function () {
  document.getElementById('privacyModal').showModal();
});

$('.close_button').on('click', function () {
  document.getElementById('privacyModal').close();
});

$('#privacyModal').on('click', function (e) {
  if (e.target === this) this.close();
});


/* 이용약관 체크박스 */
  const $all   = $('#checkDefault');   // 전체 동의
  const $required  = $('#checkDetail');    // 필수
  const $choice   = $('#checkChoice');    // 선택
  
  $all.on('change', function () {
    const checked = this.checked;
    $required.prop('checked', checked);
    $choice .prop('checked', checked);

    setTimeout(signupValidate, 0);
  });

  $required.add($choice).on('change', function () {
    const allChecked = $required.prop('checked') && $choice.prop('checked');
    $all.prop('checked', allChecked);

    signupValidate();
  });






/* - - - - 로그인/회원가입 비활성화 - - - - */
const loginId = $('#login_id');
const loginPw = $('#login_pw');
const loginBtn = $('.login_btn');

const signName = $('#name');
const signEmail = $('#email');
const signPw = $('#passwd');
const signPhone = $('#phone');
const signupBtn = $('.signup_btn');

function loginValidate(){ 
  let userid = loginId.val().trim(); 
  let userpw = loginPw.val().trim(); 
  
  
  if(userid !== '' && userpw !== ''){
    loginBtn.prop('disabled', false);
  }else{
    loginBtn.prop('disabled', true);
  }
}

function signupValidate(){ 
  let name = signName.val().trim(); 
  let email = signEmail.val().trim(); 
  let pw = signPw.val().trim(); 
  let phone = signPhone.val().trim(); 
  let detailChecked = $('#checkDetail').prop('checked');
  let choiceChecked = $('#checkChoice').prop('checked');

  if(name !== '' && email !== '' && pw !== '' && phone !== '' && detailChecked){
    signupBtn.prop('disabled', false);
  }else{
    signupBtn.prop('disabled', true);
  }
}

loginId.on('input', loginValidate);
loginPw.on('input', loginValidate);


signName.on('input', signupValidate);
signEmail.on('input', signupValidate);
signPw.on('input', signupValidate);
signPhone.on('input', signupValidate);
$('#checkDetail, #checkChoice').on('change', signupValidate);


loginBtn.prop('disabled', true);
signupBtn.prop('disabled', true);



/* - - - - signup input validate - - - - */


$('#name').on('input',function(){
  const val = $(this).val().trim();
  const nameText = /^[가-힣a-zA-Z]{2,}$/;;

  if(!nameText.test(val)){
    $(this).addClass('is-invalid');
  }else{
    $(this).removeClass('is-invalid');
  }
});

$('#email').on('input',function(){
  const val = $(this).val().trim();
  const emailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if(!emailValid.test(val)){
    $(this).addClass('is-invalid');
  }else{
    $(this).removeClass('is-invalid');
  }
});

$('#passwd').on('input', function () {
  const val = $(this).val().trim();
  const pwValid = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,15}$/;

  if (!pwValid.test(val)) {
    $(this).addClass('is-invalid');
  } else {
    $(this).removeClass('is-invalid');
  }
});

$('#phone').on('input', function () {
  const val = $(this).val().trim();
  const phoneValid = /^01[0-9]{9}$/;
  
  if (!phoneValid.test(val)) {
    console.log(phoneValid.test(val));
    
    $(this).addClass('is-invalid');
    $('.tel-form').css({
      paddingBottom : '4px'
    })
    $('.terms-wrapper').css({
      paddingTop : '20px'
    })
  } else {
    $(this).removeClass('is-invalid');
  }
});


