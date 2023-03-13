
let mobile = ['Android','iPhone','iPad','SAMSUNG','BlackBerry','Window CE','MOT','SonyEricsson','Nokia', 'vivo', 'Xiaomi'];

if(document.URL.match('move_pc_screen')) mobile = null;

for(let i in mobile) {
  if(navigator.userAgent.match(mobile[i]) != null) {
    location.href = "http://jiaeyammas.dothome.co.kr/empress_myeongseong/m_index.html";
    break;
  }
}
