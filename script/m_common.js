$(function(){

 $('.top_btn').click(function() {
  $('html, body').animate({scrollTop:'0px'}, 700);
});


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
  $('header').toggleClass('back');

 })

 $('header .gnb li .sub li a').click(function(){
  $('.gnb').removeClass('block');
  $('body').removeClass('b-over');
  $('#toggle span:first-child').removeClass('first');
  $('#toggle span:nth-child(2)').removeClass('none');
  $('#toggle span:nth-child(3)').removeClass('three');
 })

 

})


