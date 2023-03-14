// 메인 내비 이동


// 원페이지 스크롤
window.addEventListener('wheel', function(e){
  e.preventDefault();
}, {passive : false});

let $html = $('html');
let page = 1;
let lastPage = $('section').length+1;

$html.animate({scrollTop:0},10);

$(window).on('wheel', function(e){

  if($html.is(':animated')) return;

  if(e.originalEvent.deltaY > 0){
    if(page == lastPage) return;
    console.log(page);


    console.log($('.m_nav a').eq(page));

    page++;
    $('.m_nav a').removeClass('mn_on');
    $('.m_nav a').eq(page-1).addClass('mn_on');
  }else if(e.originalEvent.deltaY < 0){
    if(page == 1) return;

    page--;
    $('.m_nav a').removeClass('mn_on');
    $('.m_nav a').eq(page-1).addClass('mn_on');

  }

  let posTop = (page-1) * $(window).height();

  $html.animate({scrollTop : posTop}, 500);

  let mn = $('.m_nav li');
  mn.click(function(){
    $('.m_nav li a').removeClass('mn_on');
    $(this).find('a').addClass('mn_on');
  
    let id_name = $(this).find('a').length();
    console.log(id_name);
  
    // let page = id_name.index();
    // console.log(page);
    // let posTop = (page-1) * $(window).height();

    // $html.animate({scrollTop : posTop}, 500);
  
    // return false;
  });

  return false;
});



// 스크롤 이벤트
$(window).scroll(function() {
  let ws = $(this).scrollTop();
  let pb = $('#pb').offset().top;
  let esg = $('#esg').offset().top;

  // 헤더 색상 변경
  if (pb<=ws) {
    $('header').css('background','#fff');
    $('header .h_inner2').css('background','#fff');
    $('header .gnb > ul > li > a').css('color','#333');
  } else {
    $('header').css('background','#ffffff30');
    $('header .h_inner2').css('background','#ffffff30');
    $('header .gnb > ul > li > a').css('color','#fff');
  }

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
$('.s_info li img').hover(function(){
  let src = $(this).attr('src').replace('png','gif');
  $(this).attr('src', src);
});

$('.s_info li img').mouseleave(function(){
  let src = $(this).attr('src').replace('gif','png');
  $(this).attr('src', src);
});

let optionValue = (target) => {
  let value = target.value;
  // console.log(value);
  if(value==1){
    $('.s_info li:last-child').find('p:last-of-type').text('02-2145-1234');
  }else if(value==2){
    $('.s_info li:last-child').find('p:last-of-type').text('02-3408-1234');
  }else if(value==3){
    $('.s_info li:last-child').find('p:last-of-type').text('02-6438-1234');
  }else if(value==4){
    $('.s_info li:last-child').find('p:last-of-type').text('031-369-7123');
  }
}