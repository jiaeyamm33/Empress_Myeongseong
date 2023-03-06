$(function(){


 let tab_mnu = $('#relc .logis li .tab');

 console.log(tab_mnu);
 tab_mnu.click(function() {
  $(this).addClass('on').parent().siblings().find('a').removeClass('on');
  $(this).next().show();
  $(this).parent().siblings().find('.tab').next().hide();

  })

})