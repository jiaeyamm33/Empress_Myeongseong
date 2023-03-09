$(function(){


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

    let suba = $('.gnb #gnblist li:first-of-type .sub li a'); 

    suba.click(function() {
      $('.gnb').css('display', 'none');

})    

  $('#more').click(function() {
  
   $('#more').hide();
   $.ajax({
       url:'./script/m_news.json',
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