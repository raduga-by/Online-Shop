var card = document.querySelector('.card');
var video = document.querySelector('.video__card');
var open = false;


   var player;
      function onYouTubeIframeAPIReady() {
        player =  YT.Player('video__card', {
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      function onPlayerReady(event) {
        event.target.playVideo();
      }

      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }


card.onmouseover = function(){
	onPlayerReady();
}
card.onmouseout = function(){	
	stopVideo();
}
