$(function(){


 let tab_mnu = $('#relc .logis li .tab');

 console.log(tab_mnu);
 tab_mnu.click(function() {
  $(this).addClass('on').parent().siblings().find('a').removeClass('on');
  $(this).next().show();
  $(this).parent().siblings().find('.tab').next().hide();

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

let historyCon2020 = [
    {year : '2021', text : 'July, 이마트 스타벅스코리아 지분 추가 인수'},
    {year : '2021', text : 'December, 대한민국 브랜드대상 대통령상 수상'},
    {year : '2020', text : 'May, (주)신세계와 (주)이마트로 법인 분할, 新CI 선포'},
    {year : '2020', text : 'November, 이마트 트레이더스 1호점 오픈'},
]


let historyCon2010 = [
    {year : '2016', text : 'November, 이마트 트레이더스 매출 돌파'},
    {year : '2014', text : 'June, 이마트 이베이코리아 지분 양수도 계약 체결'},
    {year : '2011', text : 'May, (주)신세계와 (주)이마트로 법인 분할, 新CI 선포'},
    {year : '2010', text : 'November, 이마트 트레이더스 1호점 오픈'},
]


let historyCon2000 = [
    {year : '2010', text : 'November, 이마트 트레이더스 1호점 오픈'},
    {year : '2011', text : 'May, (주)신세계와 (주)이마트로 법인 분할, 新CI 선포'},
    {year : '2014', text : 'December, 대한민국 브랜드대상 대통령상 수상'},
    {year : '2016', text : 'November, 이마트 트레이더스 매출 돌파'}
]

let historyCon20