/* - - - header - - - - */
$('.all_menu_btn').on('click', function(e) {
  e.preventDefault();
  $('.all_menu_dropdown').toggleClass('active');
});

/* - - - - login input validate - - - - */
const loginId = $('#login_id');
const loginPw = $('#login_pw');
const loginBtn = $('.login_btn');

function loginCheck(){
  if(loginId.val() && loginPw.val()){
    loginBtn.prop('disabled', false);
  }else{
    loginBtn.prop('disabled', true);
  }
};