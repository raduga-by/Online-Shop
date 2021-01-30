const vidio = document.getElementById('player');
const bl = document.querySelector('.video__card');
const bl3 = document.querySelector('.card');


bl.onmouseover = function (){start()};
bl.onmouseout = function (){stop()};


function stop(){
  vidio.src = "";
  vidio.style.display = "none";
}

function start(){
  vidio.src = "https://www.youtube.com/embed/xCTne5YV8SA?ecver=1";
  vidio.style.display = "block";
}

