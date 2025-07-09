const flightHotel = $('.radio_btn #flight-hotel');
const guestInfo = $('.guest-info-search');
const formInput = $('.guest-info-search .form-floating-custom');
const guestPhone = $('.guest_phone');
const guestEmail = $('.guest_email');


/* - - 비회원 카테고리별 조회 - - */
$('input[name="package"]').change(function () {
  const selected = $('input[id="package"]:checked').val();
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
/*
const packageCheck = $('input[id="package"]').is(':checked');
const hfCheck = $('input[id="flight-hotel"]').is(':checked');

let guestPhone = searchPhone.val().trim(); 
let guestEmail = searchEmail.val().trim(); 
*/
const packageCheck = $('input[id="package"]:checked');
const hfCheck = $('input[id="flight-hotel"]:checked');

const searchName = $('#guest_name');
const searchNum = $('#guest_number');
const searchPhone = $('#search_phone');
const searchEmail = $('#search_email');
const searchBtn = $('.gusest_search_btn');




function searchValidate() {
  const htCheck = $('#flight-hotel').is(':checked');
  const guestName = $('#guest_name').val().trim();
  const guestNum = $('#guest_number').val().trim();

  const infoVal = guestName !== '' && guestNum !== '';

  if (htCheck && infoVal) {
    $('.gusest_search_btn').prop('disabled', false);
  } else {
    $('.gusest_search_btn').prop('disabled', true);
  }
}