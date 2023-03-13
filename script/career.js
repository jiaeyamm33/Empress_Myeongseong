const select = document.querySelector('.select');
const option_list = document.querySelector('.option_list');
const options = document.querySelectorAll('.option');
const a = document.querySelector(".select span");
console.log(a);
//보여주기
select.addEventListener("click",()=>{
  option_list.classList.toggle('active');
  select.querySelector(".fa-angle-down").classList.toggle("fa-angle-up");
});
//선택한거 보여주게끔
options.forEach((option) => {
  option.addEventListener("click",()=>{
    options.forEach((option)=>{
      option.classList.remove('selected')
    });
    select.querySelector(".select span").innerHTML = option.innerHTML;
    option.classList.add("selected");
    option_list.classList.toggle('active');
    select.querySelector(".fa-angle-down").classList.toggle("fa-angle-up");
  });
});

//셀렉한거만 보여주기
const se1 = document.querySelector('.option:first-child'); //전체
const se2 = document.querySelector('.option:nth-child(2)'); //인턴
const se3 = document.querySelector('.option:nth-child(3)'); //신입
const se4 = document.querySelector('.option:nth-child(4)'); //경력
const se5 = document.querySelector('.option:last-child'); //경력무관


let c=document.querySelectorAll('.list01 .c');
//전체공고보기
se1.addEventListener("click",()=>{
  console.log(c);
  for(let i=0; i<c.length; i++){
    c[i].style.display="block";
  }
});  
// 인턴공고보기
const nnew=document.querySelectorAll('.list01 .nnew');
se2.addEventListener("click",()=>{
  // console.log(c);
  // console.log(asd);
  for(let i=0; i<c.length; i++){
    c[i].style.display="none";
  }
  for(let m=0; m<jnew.length; m++){
    nnew[m].style.display="block";
  }
}); 
// 신입공고보기
const jnew=document.querySelectorAll('.list01 .new');
se3.addEventListener("click",()=>{
  // console.log(c);
  // console.log(asd);
  for(let i=0; i<c.length; i++){
    c[i].style.display="none";
  }
  for(let j=0; j<jnew.length; j++){
    jnew[j].style.display="block";
  }
});  
// 경력공고보기
const nonew=document.querySelectorAll('.list01 .nonew');
se4.addEventListener("click",()=>{
  // console.log(c);
  // console.log(asd);
  for(let i=0; i<c.length; i++){
    c[i].style.display="none";
  }
  for(let k=0; k<nonew.length; k++){
    // nonew[0].parentNode.style.width="800px";
    nonew[k].style.display="block";
  }
}); 
// 경력무관보기
const anyone=document.querySelectorAll('.list01 .anyone');
se5.addEventListener("click",()=>{
  // console.log(c);
  // console.log(asd);
  for(let i=0; i<c.length; i++){
    c[i].style.display="none";
  }
  for(let l=0; l<nonew.length; l++){
    anyone[l].style.display="block";
  }
}); 
