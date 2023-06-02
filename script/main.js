$(document).ready(function () {
  $('#fullpage').fullpage({
    //options here
    autoScrolling: true,
    scrollHorizontally: true,
    KeyboardScrolling: true,
    navigation: true,
    afterLoad: function () {
      // 헤더 색상 변경
      if ($('#m_con').hasClass('active')) {
        $('header').css('background', '#ffffff30');
        $('header .h_inner2').css('background', '#ffffff30');
        $('header .gnb > ul > li > a').css('color', '#fff');
      } else {
        $('header').css('background', '#fff');
        $('header .h_inner2').css('background', '#fff');
        $('header .gnb > ul > li > a').css('color', '#333');
      }

      // pb 나타나기
      if ($('#pb').hasClass('active')) {
        $('.pb_list li').stop().css('top', '0');
        $('.pb_list li').stop().css('opacity', '1');
      } else {
        $('.pb_list li').stop().css('top', '700px');
        $('.pb_list li').stop().css('opacity', '0');
      }

      // esg 나타나기
      if ($('#esg').hasClass('active')) {
        $('#esg h2').stop().css('transform', 'translateX(0)');
        $('#esg .inner > p').stop().css('transform', 'translateX(0)');
        $('#esg .esg_list').stop().fadeIn(1000);
      } else {
        $('#esg h2').stop().css('transform', 'translateX(-100%)');
        $('#esg .inner > p').stop().css('transform', 'translateX(-100%)');
        $('#esg .esg_list').stop().fadeOut(10);
      }
    },
  });
});


// 매장찾기
$('.s_info li img').hover(function () {
  let src = $(this).attr('src').replace('png', 'gif');
  $(this).attr('src', src);
});

$('.s_info li img').mouseleave(function () {
  let src = $(this).attr('src').replace('gif', 'png');
  $(this).attr('src', src);
});

let optionValue = (target) => {
  let value = target.value;
  // console.log(value);
  if (value == 1) {
    $('.s_info li:last-child').find('p:last-of-type').text('02-2145-1234');
  } else if (value == 2) {
    $('.s_info li:last-child').find('p:last-of-type').text('02-3408-1234');
  } else if (value == 3) {
    $('.s_info li:last-child').find('p:last-of-type').text('02-6438-1234');
  } else if (value == 4) {
    $('.s_info li:last-child').find('p:last-of-type').text('031-369-7123');
  }
}