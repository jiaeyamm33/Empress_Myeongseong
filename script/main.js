
// 스크롤
window.addEventListener("wheel", function(e){
	e.preventDefault();
},{passive : false});

let $html = $("html");
let page = 1;
let lastPage = $("section").length;

$html.animate({scrollTop:0},10);

$(window).on("wheel", function(e){

  if($html.is(":animated")) return;

  if(e.originalEvent.deltaY > 0){
    if(page == lastPage) return;

    page++;
  }else if(e.originalEvent.deltaY < 0){
    if(page == 1) return;

    page--;
  }
  let posTop = (page-1) * $(window).height();

  $html.animate({scrollTop : posTop});

});


$(function(){

  $(window).scroll(function(){
    let ws = $(this).scrollTop();
    console.log(ws);

    // pb
    if(ws>900){
      $('.pb_list li').css('top','0');
    }else{
      $('.pb_list li').css('top','1000px');
    }

    // esg
    if(ws>1900){
      $('#esg h2').css('transform','translateX(0)');
      $('#esg .inner > p').css('transform','translateX(0)');
      $($('#esg .esg_list')).fadeIn(1000);
    }else{
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

});