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

let historyCon = [
    {value: '2020', year : '2021', text : 'July, 이마트 스타벅스코리아 지분 추가 인수'},
    {value: '2020', year : '2021', text : 'June, 이마트 이베이코리아 지분 양수도 계약 체결'},
    {value: '2020', year : '2020', text : 'October, 이마트 트레이더스 오픈 10주년'},
    {value: '2020', year : '2020', text : 'April, 이마트 ESG 위원회 설치'},

    {value: '2010', year : '2016', text : 'November, 이마트 트레이더스 매출 돌파'},
    {value: '2010', year : '2014', text : 'June, 이마트 이베이코리아 지분 양수도 계약 체결'},
    {value: '2010', year : '2011', text : 'April, 이마트 ESG 위원회 설치'},
    {value: '2010', year : '2010', text : 'April, 이마트 ESG 위원회 설치'},

    {value: '2000', year : '2007', text : 'December, 이마트 총매출 10조원 돌파'},
    {value: '2000', year : '2006', text : 'May, 월마트 코리아 인수(16개점)'},
    {value: '2000', year : '2004', text : 'August, 이마트 온라인쇼핑몰 오픈'},
    {value: '2000', year : '2003', text : 'February, 한국 유통업체 최초 금탑산업훈장 수상'},

    {value: '1990', year : '1999', text : 'December, 12월 한국유통대상 대통령상 수상'},
    {value: '1990', year : '1997', text : 'February, 중국 이마트 1호점 상하이 취양점 오픈'},
    {value: '1990', year : '1996', text : 'December, 이마트 물류센터 오픈'},
    {value: '1990', year : '1993', text : 'November, 이마트 1호점 창동점 오픈(최초 할인점)'}
];


let ht = document.getElementById('ht');
let htv = document.getElementById('ht').value;
function htvSet(num) {
    // 카테고리에 맞게 배열 교체
    
    productSort(products.slice(num*16, (num+1)*16));
    historyCon2 = historyCon.slice()
    cateNum = num;
    shop_itemlist.innerHTML = '';
    for(let i=0;i<productSortArray.length;i++){
      let product_form = '<a href="#none" class="product" title="상품01">';
      let product_img = '<img src="'+productSortArray[i].src+'" alt="상품"'+i+'>';
      let product_content = '<div>'+
      '<strong>'+productSortArray[i].name+'</strong>'+
      '<p>'+productSortArray[i].category+'</p>'+
      '<p>&#xFFE6;'+productSortArray[i].price.toLocaleString('ko-KR')+'</p>'+
      '</div></a>';
      shop_itemlist.innerHTML += product_form+product_img+product_content;
    }
    if(productSortArray.length == 0){
      shop_itemlist.innerHTML = '<p class="search_empty">검색된 상품이 없습니다.</p>';
      shop_itemlist.style.gridTemplateColumns = 'repeat(1, 1fr)';
    }
  }


    ht.addEventListener('change', function(){
        htv = document.getElementById('ht').value;
        if(htv == '2020') {
            for(let i = 0; i < historyCon2020[i].length; i++) {
                document.getElementById('hislist').innerHTML = his
            }
        }
        

        
    })