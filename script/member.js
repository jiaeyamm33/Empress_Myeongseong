$(function(){
  let t_mnu = $('.join2 > li > a');

  t_mnu.click(function(){

    //a태그 자손 i.fas에 적용되는 서식
    $(this).find('.arrow').toggleClass('a_on').toggleClass('a_off').parents().siblings().find('.a_off').removeClass('a_off').addClass('a_on');

    $(this).find('.arrow2').toggleClass('a_on').toggleClass('a_off').parents().siblings().find('.a_off').removeClass('a_off').addClass('a_on');

    //a태그의 자손 .cont에 적용되는 서식
    $(this).next().slideToggle().parent().siblings().find('.ser_box').slideUp();
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
  
})