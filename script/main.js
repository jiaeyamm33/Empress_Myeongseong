
// 메인 내비 이동
let mn = $('.m_nav li');
mn.click(function(){
  $('.m_nav li a').removeClass('mn_on');
  $(this).find('a').addClass('mn_on');

  let id_name = $(this).find('a').attr('href');
  let secOffset = $(id_name).offset().top;

  $('html, body').animate({scrollTop:secOffset}, 500);

  return false;
});

$('section').each(function(){
    // 개별적으로 Wheel 이벤트 적용
  $(this).on('wheel DOMMouseScroll',function(e){
    
    let delta = 0;
    let moveTop = null;
    let boxMax = $('section').length;
    let winEvent = '';
    let sec_n = $(this).index();

    console.log(boxMax);
    console.log(sec_n);
    
    if(!winEvent) {
      winEvent = window.event;
    }
    if(winEvent.wheelDelta) {
      delta = winEvent.wheelDelta / 120;
      if(window.opera) {
        delta = -delta;
      }
    }
    else if(winEvent.detail) {
      delta = -winEvent.detail / 3;
    }
    
    if(delta < 0) {
      if($(this).index() < boxMax) {
        if($(this).next() != undefined) {
          moveTop = $(this).next().offset().top;
          sec_n++;
        }
      }
      else {
        return false;
      }
    }
    
    else {
      if($(this).index() > 1) {
        if($(this).prev() != undefined) {
          moveTop = $(this).prev().offset().top;
          sec_n--;
        }
      }
      else {
        return false;
      }
    }
    
    $('html, body').animate({scrollTop : moveTop + 'px'}, 500);

    // gnb 색상 변경
    $('.m_nav a').each(function(i){
      if(i==sec_n-1){
        $('.m_nav a').removeClass('mn_on');
        $(this).addClass('mn_on');
      }
    });
  });
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