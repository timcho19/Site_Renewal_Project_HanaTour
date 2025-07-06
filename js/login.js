/* - - - header - - - - */
$('.all_menu_btn').on('click', function(e) {
  e.preventDefault();
  $('.all_menu_dropdown').toggleClass('active');
});



/* - - - - accordian 클릭 시 login display none */
$('.accordion button').click(function(){
  $('.login').toggleClass('active');
});


/* - - - - 자세히 보기 클릭 시 - - - - */
$('.right').click(function(){
  $(this).toggleClass('active');
  $('.sub-terms').toggleClass('open');
});


/* - - - - 이용약관 모달 - - - - */
$('.detail-more').click(()=>{
  $('#marketingModal').attr('open', 'opnen');
});

$('.close-button').click(()=>{
  $('#marketingModal').removeAttr('open');
});



/* - - - - 로그인/회원가입 비활성화 - - - - */
const loginId = $('#login_id');
const loginPw = $('#login_pw');
const loginBtn = $('login_btn');

console.log('버튼 disabled 상태:', document.querySelector('.login_btn').disabled);

function loginValidate(){
  let loginIdVal = loginId.val().trim();
  let loginPwVal = loginPw.val().trim();

  if(loginIdVal === '' && loginPwVal === ''){
    loginBtn.disabled = true;
  }else{
    loginBtn.disabled = false;
  }
}


/* - - - - login input validate - - - - */




