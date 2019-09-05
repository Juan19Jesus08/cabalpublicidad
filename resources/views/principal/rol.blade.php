
<script src="https://www.youtube.com/player_api"></script>
<!--<div id="player"></div>-->
<iframe id="player" type="text/html" width="640" height="360"
  src="http://www.youtube.com/embed/M_gT23X1RgI?enablejsapi=1"
  frameborder="0"></iframe>
<div class="controls">

<script type="text/javascript">
var player;

var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
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
