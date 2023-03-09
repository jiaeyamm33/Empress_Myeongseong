$(function(){


let gnbli = $('.gnb #gnblist li a');

 gnbli.click(function() {
  $('bo')
  $(this).next().slideToggle();
  $(this).toggleClass('gnbdeco').parent().siblings().find('a').removeClass('gnbdeco');
  $(this).find('i.fa-angle-down').addClass('subro');
  $(this).parent().siblings().find('i.fa-angle-down').removeClass('subro');
  $(this).parent().siblings().find('.sub').hide();
 })

 let tb = $('#toggle');

 tb.click(function() {
  $('#toggle span:first-child').toggleClass('first');
  $('#toggle span:nth-child(2)').toggleClass('none');
  $('#toggle span:nth-child(3)').toggleClass('three');
 })
})

let tb = document.getElementById('toggle');
console.log(tb);
tb.addEventListener('click', function() {
 let mn = document.querySelector('.gnb').style.display = 'block';
})