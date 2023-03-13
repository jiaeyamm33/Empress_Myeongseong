$(function(){

  $('.top_btn').click(function() {
    $('html, body').animate({scrollTop:'0px'}, 700);
  });

 let tab_mnu = $('#relc .logis li .tab');

 console.log(tab_mnu);
 tab_mnu.click(function() {
  $(this).addClass('on').parent().siblings().find('a').removeClass('on');
  $(this).next().show();
  $(this).parent().siblings().find('.tab').next().hide();
  })

  $('#ht').change(function(){
    let htv = $(this).val();
    console.log(htv);
    if(htv == '2000') {
        $('.hiscon .y2000').show().siblings('ul').hide();
    } if(htv == '2020') {
        $('.hiscon .y2020').show().siblings('ul').hide();
    }  if(htv == '2010') {
        $('.hiscon .y2010').show().siblings('ul').hide();
    }  if(htv == '1990') {
        $('.hiscon .y1990').show().siblings('ul').hide();
    }
  })

  $(window).scroll(function() {
    let ws = $(this).scrollTop();
    console.log(ws);
    if(ws >= 640) {
        var otime = 300;
        $( '.vslist li:first-child' ).animate( {
          opacity: '1'
        }, otime, function() {
          $( '.vslist li:nth-child(2)' ).animate( {
            opacity: '1'
          }, otime, function() {
            $( '.vslist li:nth-child(3)' ).animate( {
              opacity: '1'
            }, otime, function() {
                $('.vslist li:last-child').animate({opacity: '1'})
            });
          });
        } );
        } 
    })



  $('#more').click(function() {
  
   $('#more').hide();
   $( '#news' ).css( "height", "1800px" );    
   $.ajax({
       url:'./script/news.json',
       type: 'get',
       dataType:'json',
       success:function(result) {
           let t = '<ul class="newslist">';
           $.each(result.news,function(i,e){
            t+="<li><div><a href="+e.href+"' title="+e.tit2+"'><img src='./image/"+e.path+"'alt='"+e.tit+"'></a><a ="+e.href+"' title="+e.tit2+"'>"+e.tit2+"</a><a a href="+e.href+"' title="+e.ndate+"'>"+e.ndate+"</a></div></li>";
           });
           t+="</ul><a href='#none' title='더보기' id='more'>더보기</a>";

           $('#newsmore').html(t);
;            }         
   })
})

})

window.addEventListener('scroll', ()=> {
  console.log(window, scrollY);
  let ws = window.scrollY;
  console.log(ws);
  if(ws>=1500) {
      document.querySelector('.top_btn').style.display = 'block';
  } else {
      document.querySelector('.top_btn').style.display = 'none';
  }
 });


// let historyCon = [
//     {value: '2020', year : '2021', text : 'July, 이마트 스타벅스코리아 지분 추가 인수'},
//     {value: '2020', year : '2021', text : 'June, 이마트 이베이코리아 지분 양수도 계약 체결'},
//     {value: '2020', year : '2020', text : 'October, 이마트 트레이더스 오픈 10주년'},
//     {value: '2020', year : '2020', text : 'April, 이마트 ESG 위원회 설치'},

//     {value: '2010', year : '2016', text : 'November, 이마트 트레이더스 매출 1조원 돌파'},
//     {value: '2010', year : '2014', text : 'June, 이마트 이베이코리아 지분 양수도 계약 체결'},
//     {value: '2010', year : '2011', text : 'May, (주) 신세계와 (주)이마트로 법인 분할, 新CI 선포'},
//     {value: '2010', year : '2010', text : 'November, 이마트 트레이더스 1호점 오픈'},

//     {value: '2000', year : '2007', text : 'December, 이마트 총매출 10조원 돌파'},
//     {value: '2000', year : '2006', text : 'May, 월마트 코리아 인수(16개점)'},
//     {value: '2000', year : '2004', text : 'August, 이마트 온라인쇼핑몰 오픈'},
//     {value: '2000', year : '2003', text : 'February, 한국 유통업체 최초 금탑산업훈장 수상'},

//     {value: '1990', year : '1999', text : 'December, 12월 한국유통대상 대통령상 수상'},
//     {value: '1990', year : '1997', text : 'February, 중국 이마트 1호점 상하이 취양점 오픈'},
//     {value: '1990', year : '1996', text : 'December, 이마트 물류센터 오픈'},
//     {value: '1990', year : '1993', text : 'November, 이마트 1호점 창동점 오픈(최초 할인점)'}
// ]