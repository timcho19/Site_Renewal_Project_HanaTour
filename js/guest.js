const flightHotel = $('.radio_btn #flight-hotel');
const guestInfo = $('.guest-info-search');
const formInput = $('.guest-info-search .form-floating-custom');
const guestPhone = $('.guest_phone');
const guestEmail = $('.guest_email');


/* - - 비회원 카테고리별 조회 - - */
$('input[name="package"]').change(function () {
  const selected = $('input[id="package"]:checked').val();
  console.log(selected);
  if (selected === 'package') {
    guestInfo.show();
  } else {
    guestInfo.hide();
  }
});



$('input[name="guest"]').change(function(){
  let checked = $(this).val();
  console.log(checked);
  formInput.removeClass('active');
  if (checked === 'email') {
    guestEmail.addClass('active');
    } else {
      guestPhone.addClass('active');
    }
});



/* 조회 버튼 비활성화 */
const guestName = $('#guest_name');
const guestNum = $('#guest_number');
const searchBtn = $('.gusest_search_btn');


function searchValidate(){ 
  let guest_name = guestName.val().trim(); 
  let guest_num = guestNum.val().trim(); 
  let guest_phone = guestPhone.val().trim(); 
  let guest_email = guestEmail.val().trim(); 
 
  
  if(userid !== '' && userpw !== ''){
    loginBtn.prop('disabled', false);
  }else{
    loginBtn.prop('disabled', true);
  }
}


loginId.on('input', loginValidate);
loginPw.on('input', loginValidate);


loginBtn.prop('disabled', true);
