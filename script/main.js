

// 원페이지 스크롤
window.addEventListener('wheel', function(e){
	e.preventDefault();
}, {passive : false});

let $html = $('html');
let page = 1;
let lastPage = $('section').length;

$html.animate({scrollTop:0},10);

$(window).on('wheel', function(e){

  if($html.is(':animated')) return;

  if(e.originalEvent.deltaY > 0){
    if(page == lastPage) return;

    page++;
  }else if(e.originalEvent.deltaY < 0){
    if(page == 1) return;

    page--;
  }

  let posTop = (page-1) * $(window).height();

  $html.animate({scrollTop : posTop}, 500);

  $('.m_nav a').each(function(i){
    if(i==page-1){
      $('.m_nav a').removeClass('mn_on');
      $(this).addClass('mn_on');
    }
  });

});


// 메인 내비 이동
let mn = $('.m_nav a');
mn.click(function(){
  $('.m_nav a').removeClass('mn_on');
  $(this).addClass('mn_on');

  let id_name = $(this).attr('href');
  console.log(id_name);

  let secOffset = $(id_name).offset().top;
  console.log(secOffset);

  $('html, body').animate({scrollTop:secOffset}, 500, 'easeOutQuint');

  return false;
});


// 메인 로고 애니메이션
const m_f = document.querySelector('.card');
const heartBeat = m_f
.animate([
  {transform: 'scale(1)'},
  {transform: 'scale(1.001)', offset: 0.2 },
  {transform: 'scale(0.99)', offset: 0.4 },
  {transform: 'scale(1.004)', offset: 0.6 },
  {transform: 'scale(0.995)', offset: 0.8 },
  {transform: 'scale(1)'}
], {
  duration: 1000,
  iterations: Infinity
});
const stopheartBeat = ()=>{heartBeat.pause();}
const startheartBeat = ()=>{heartBeat.play();}
m_f.addEventListener('mouseover', stopheartBeat, false);
m_f.addEventListener('mouseout', startheartBeat, false);


// 스크롤 이벤트
$(window).scroll(function() {
  let ws = $(this).scrollTop();
  let pb = $('#pb').offset().top;
  let esg = $('#esg').offset().top;

  // pb 아래에서 위로
  if (pb==ws) {
    $('.pb_list li').css('top','0');
  } else {
    $('.pb_list li').css('top','1000px');
  }

  // esg 나타나기
  if (esg==ws) {
    $('#esg h2').css('transform','translateX(0)');
    $('#esg .inner > p').css('transform','translateX(0)');
    $($('#esg .esg_list')).fadeIn(1000);
  } else {
    $('#esg h2').css('transform','translateX(-100%)');
    $('#esg .inner > p').css('transform','translateX(-100%)');
    $($('#esg .esg_list')).fadeOut();
  }
});


// 매장찾기
$('.store_info li img').hover(function(){
  let src = $(this).attr('src').replace('png','gif');
  $(this).attr('src', src);
});

$('.store_info li img').mouseleave(function(){
  let src = $(this).attr('src').replace('gif','png');
  $(this).attr('src', src);
});

const optionValue = (target) => {
  const value = target.value;
  console.log(value);
}