/* - - - header - - - - */
$('.all_menu_btn').on('click', function(e) {
  e.preventDefault();
  $('.all_menu_dropdown').toggleClass('active');
});

/* - - - - login input validate - - - - */
const id = $('#login_id').val();
const pw = $('#login_pw').val();
const loginBtn = $('.login_btn');

function loginCheck(){
  if(!loginId == '' && !loginPw == ''){
    loginBtn.prop('disabled', false);
  }else{
    loginBtn.prop('disabled', true);
  }

  $('#login_id, #login_pw').on('input', loginCheck);
};