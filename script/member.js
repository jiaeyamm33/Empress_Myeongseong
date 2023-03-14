$(function(){
  let t_mnu = $('.join2 > li');

  t_mnu.click(function(){

    //a태그 자손 i.fas에 적용되는 서식
    $(this).siblings().find('.arrow').removeClass('a_on');
    $(this).find('.arrow').toggleClass('a_on');

    //a태그의 자손 .cont에 적용되는 서식
    $(this).find('.ser_box').slideToggle().parent().siblings().find('.ser_box').slideUp();

    return false;
  });

  var chEck=$("#cb2");
  let inPut = $('.join3 input');
  $(inPut).prop("disabled", true);

  
  chEck.click(function(){
    if(this.checked){
      $(inPut).prop("disabled", false);
      $('.agree').css("display","none")
    }else{
      $(inPut).prop("disabled", true);
      $('.agree').css("display","inline")
    }
  })

  
  $("select[id=email]").on("change", function(){
    var $addr = $(this).closest(".join3").find("input[id=email01]");
    if ($(this).val() == "etc") {
        $addr.val('');
        $addr.prop("readonly",false);

    } else {
        $addr.val($(this).val());
        $addr.prop("readonly",true);
    }
  });
})