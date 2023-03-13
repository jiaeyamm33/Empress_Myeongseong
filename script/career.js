const select = document.querySelector('.select');
const option_list = document.querySelector('.option_list');
const option = document.querySelector('.option');

//보여주기
select.addEventListener("click",()=>{
  option_list.classList.toggle('active');
  select.querySelector(".fa-angle-down").classList.toggle("fa-angle-up");
});
