$(function(){


let gnbli = $('.gnb #gnblist li a');

 gnbli.click(function() {
  $(this).next().slideToggle();
  $(this).toggleClass('gnbdeco').parent().siblings().find('a').removeClass('gnbdeco');
  $(this).find('i.fa-angle-down').toggleClass('subro');
  $(this).parent().siblings().find('i.fa-angle-down').removeClass('subro');
  $(this).parent().siblings().find('.sub').slideUp();
 })

 let tb = $('#toggle');

 tb.click(function() {
  $('#toggle span:first-child').toggleClass('first');
  $('#toggle span:nth-child(2)').toggleClass('none');
  $('#toggle span:nth-child(3)').toggleClass('three');

  $('.gnb').toggleClass('block');
  $('body').toggleClass('b-over');



 })

 

})

