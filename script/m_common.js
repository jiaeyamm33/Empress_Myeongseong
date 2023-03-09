$(function(){


let gnbli = $('.gnb #gnblist li a');

 gnbli.click(function() {
  $(this).next().slideToggle();
  $(this).toggleClass('gnbdeco').parent().siblings().find('a').removeClass('gnbdeco');
  $(this).find('i.fa-angle-down').addClass('subro');
  $(this).parent().siblings().find('i.fa-angle-down').removeClass('subro');
  $(this).parent().siblings().find('.sub').hide();
 })
})