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


