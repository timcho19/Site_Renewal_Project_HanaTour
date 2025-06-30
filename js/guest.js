const flightHotel = $('.radio_btn #flight-hotel');
const guestInfo = $('.guest-info-search');
const formInput = $('.form-floating-custom');
const guestName = $('.guest_name');
const guestEmail = $('.guest_email');



flightHotel.change(function(){
  if($(this).val() === 'on'){
    console.log($(this).val())
    guestInfo.hide();
  }else{
    guestInfo.show();
  }
});

$('input[name="guest"]').change(function(){
  $('.form-floating-custom').removeClass('active');

      if (this.id === 'guest_phone') {
      guestName.addClass('active');
    } else {
      guestEmail.addClass('active');
      guestName.css({display:'none'});
    }
});