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
const loginBtn = $('.login_btn');

const signName = $('#name');
const signEmail = $('#email');
const signPw = $('#userpw');
const signPhone = $('#phone');
const signupBtn = $('.signup_btn');

console.log('버튼 disabled 상태:', document.querySelector('.login_btn').disabled);

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
  
  
  if(signName !== '' && signEmail !== '' && signPw !== '' && signPhone !== ''){
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



loginBtn.prop('disabled', true);
signupBtn.prop('disabled', true);



/* - - - - login input validate - - - - */




