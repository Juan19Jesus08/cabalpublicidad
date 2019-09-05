<script src="https://www.youtube.com/player_api"></script>
<div id="video-youtube"></div>
<div class="controls">
  
</div>

<script type="text/javascript">
var player;

function onYouTubePlayerAPIReady() {
    player = new YT.Player('video-youtube', {
      height: '315',
      width: '560',
      videoId: 'kqEfoD9XYHQ',
      events: {
        'onReady': onAutoPlay,
        'onStateChange': onFinish
      }
    });
}

function onAutoPlay(event) {
    event.target.playVideo();
}
function onFinish(event) {        
    if(event.data === 0) {            
        alert("Fin");
    }
}


</script>