$(function () {
  $('[data-toggle="tooltip"]').tooltip();

})

function closeT(){
  $('[data-toggle="tooltip"]').tooltip('hide');
}

function validate(){
  $('form#main-form input[required]').each(function(){
    if(!$(this).val() || $(this).val() == ''){
      $(this).addClass('is-invalid');//Сделаем бордер красным
    }else{
      $(this).removeClass('is-invalid');
    }
  });
}

function validate2(){
  $('form#modal-form input, form#modal-form textarea').each(function(){
    if(!$(this).val() || $(this).val() == ''){
      $(this).addClass('is-invalid');//Сделаем бордер красным
    }else{
      $(this).removeClass('is-invalid');
    }
  });
}

function mainc() {
      var names = $.getJSON('js/names.json', function (data){
      return data;
    });

  $.getJSON('https://ipinfo.io/', function (data){})
      .done(function( data ) {
        console.log(123);
        var CC = data.country;
        var CN = names.responseJSON;

        for(var PP in CN){
          if(CC == PP){
            $('select[name="region"]').append('<option value="' + CN[CC] + '">' + CN[CC] +'</option>');
          }
        }
        for(var PP in CN){
          if(CC !== PP){
            $('select[name="region"]').append('<option value="' + CN[PP] + '">' + CN[PP] +'</option>');
          }
        }
      })
      .fail(function( data ) {

        console.log( "Request Failed: " );
        var CN = data;
        for(var CC in data){
            $('select[name="region"]').append('<option class="font-weight-bold" value="' + CN[CC] + '">' + CN[CC] +'</option>');
        }
    });

}

function counter(){

	$('.m-counter-wrap').empty();

	var number1 = '15732';
  var number2 = '81026';
	var numArray1 = number1.split("");
  var numArray2 = number2.split("");

	for(var i=0; i<numArray1.length; i++) {
		numArray1[i] = parseInt(numArray1[i], 10);
		$(".m-counter-wrap1").append('<span class="digit-con"><span class="digit'+i+'">0<br>1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br></span></span>');
	}
  for(var i=0; i<numArray2.length; i++) {
    numArray2[i] = parseInt(numArray2[i], 10);
    $(".m-counter-wrap2").append('<span class="digit-con"><span class="digit'+i+'">0<br>1<br>2<br>3<br>4<br>5<br>6<br>7<br>8<br>9<br></span></span>');
  }

	var increment1 = $('.m-counter-wrap1 .digit-con').outerHeight();
  var increment2 = $('.m-counter-wrap2 .digit-con').outerHeight();
	var speed = 1000;

	for(var i=0; i<numArray1.length; i++) {
		$('.m-counter-wrap1 .digit'+i).animate({top: -(increment1 * numArray1[i])}, speed);
	}
  for(var i=0; i<numArray2.length; i++) {
    $('.m-counter-wrap2 .digit'+i).animate({top: -(increment2 * numArray2[i])}, speed);
  }

	$(".digit-con:nth-last-child(3n+4)").after("<span class='comma'> </a>");
}


$(document).ready(function(){
  $('.js-basic-single').select2({
    width: 'resolve'
  });
  $('.main-logo').get(0).play();

  mainc();
  counter();

  $("form").submit(function () {
  var formID = $(this).attr('id');
  var formNm = $('#' + formID);
  var formBtn = $('#' + formID + ' .submit-btn');

  $.ajax({
  type: "POST",
  url: '_post.php',
  data: formNm.serialize(),
  success: function () {
  // ?????? ????? ????

  $(formBtn).html('<div id="wave"><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>');
  setTimeout(function(){ $(formBtn).html('SUCCESS'); }, 2500);
  setTimeout(function(){  $(formBtn).html('SUBMIT'); formNm.get(0).reset();}, 3500);
  if(formID == 'main-form'){
    setTimeout(function(){$('#main-form').fadeOut(); $('.alert').fadeIn();}, 2500);
    setTimeout(function(){ $(formBtn).html('BECOME A PARTNER');  formNm.get(0).reset(); $('input').blur(); }, 3500);
  }
  },
  error: function (jqXHR, text, error) {
  // ?????? ??? ????

  $(formNm).html(error);

  }
  });
  return false;
  });

});


$('.alert').on('closed.bs.alert', function () {
  $('#main-form, .idcustomer-wrap, .url-wrap').fadeIn();

})

$('input').on('focus', function() {
  $(this).next('label').addClass('translate-placeholder');
	$(this).next().next('label').fadeOut('fast');
})

$('input').on('focusout', function() {
	if(!$(this).val()){
    $(this).next('label').removeClass('translate-placeholder');
    $(this).next().next('label').fadeIn('fast');
  }
})

$(".check-account input").on("change", function(){

  if ($("input.freelancer").prop("checked")) {
    $(".idcustomer-wrap, .url-wrap").fadeOut();
  } else {
    $(".idcustomer-wrap, .url-wrap").fadeIn();
  }

});
