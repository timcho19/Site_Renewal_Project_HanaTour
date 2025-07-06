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

console.log('버튼 disabled 상태:', document.querySelector('.login_btn').disabled);

function inputValidate(){ 
  let userid = loginId.val().trim(); 
  let userpw = loginPw.val().trim(); 
  
  
  if(userid !== '' && userpw !== ''){
    $('.login-btn').prop('disabled', false);
  }else{
    $('#login-btn').prop('disabled', true);
  }
}

/* - - - - login input validate - - - - */




