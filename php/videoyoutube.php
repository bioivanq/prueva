 <?php
  
// session_start();



if(isset($_GET['id'])and isset($_GET['direccion'])){
$id = $_GET['id'];
$direccion = $_GET['direccion'];


// include('../conexion.php');

// mysqli_query($conexion,"UPDATE peliculas SET titulo =titulo, direccion=direccion, foto=foto, categoria=categoria, comentario=comentario, valoracion=valoracion+1 WHERE id='".$id."'");


// mysqli_query($conexion,"UPDATE milista SET titulo =titulo, direccion=direccion, foto=foto, categoria=categoria, comentario=comentario, valoracion=valoracion+1 WHERE id_peliculas='".$id."'");


// mysqli_close($conexion);

?>


<!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <title>Mi red TV | Pagina Oficial</title>
    <meta name="description" content="Este es la pagina oficial de MI RED TV"/>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="img/favicon.png"/>


<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />

        <!-- Latest compiled and minified JavaScript -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>

        <style type="text/css">
           #slider .ui-slider-range { background: #ef2929; }
           #slider .ui-slider-handle { border-color: #ef2929;height: 13px; }
            
        </style>
        
    </head>
    <body>
        <did class="fondo" style="position: fixed; right: 0; bottom: 0; min-width:100%; min-height:100%;

width:auto; height:auto; background-size:cover; z-index: 100;"></did>





        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="player" style="position: fixed; right: 0; bottom: 0; min-width:100%; min-height:100%;

width:auto; height:auto; background-size:cover;"></div>
                </div>
                <div class="col-md-7">
                    <div class="col-md-1">
                        <!-- button play/pause -->
                        <span class="button-play glyphicon glyphicon-play" style="position: fixed;color:white;z-index: 200;top: 97%;"></span>
                        <span class="button-play glyphicon glyphicon-pause" style="position: fixed;color:white;z-index: 200;top: 97%;"></span>

                    </div>
                    <div class="col-md-1">
                        <!-- button volume -->
                        <span class="button-volume glyphicon glyphicon-volume-up" style="position: fixed;color:white;z-index: 200;top: 97%;"></span>
                        <span class="button-volume glyphicon glyphicon-volume-down" style="position: fixed;color:white;z-index: 200;top: 97%;"></span>                        
                    </div>
                    <div class="col-md-9">
                        <!-- input range with JqueryUI -->
                        <div id="slider" style="position: fixed;width:930px;z-index: 200;top: 98%;height: 4px;"></div>

                    </div>
                    <div class="col-md-1">
                        <!-- button fullscreen -->
                        <span class="button-resize glyphicon glyphicon-resize-full" onclick="viewPage();" style="position: fixed; right: 150px; top: 97%;color:white;z-index: 200;"></span>

                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $("#slider").slider({
                range: "min"
            });
        </script>


        <script>
          var tag = document.createElement('script');
 
  tag.src = "//www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
 
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        width: '100%',
        height: '100%',
        videoId: '<?php echo $direccion; ?>',
        playerVars: {
        'autoplay' : 1,
        'disablekb': 1,
        'controls' : 0,
        'modestbranding' : 1,
        'rel' : 0,
        'showinfo' : 0
      },
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }
  var ready = false;
  function onPlayerReady(event) {
    ready = true;

    $('.button-play').click(function() {

        var pst = player.getPlayerState();
        if(pst == 0 || pst == 2 || pst == 5) {
            player.playVideo();

        } else if (pst == 1) {
            player.pauseVideo();
        }

    });

    $('.button-volume').click(function() {
        if(player.isMuted()) {
            player.unMute();
            $('.glyphicon-volume-down').hide();
            $('.glyphicon-volume-up').show();           
        } else {
            player.mute();
            $('.glyphicon-volume-up').hide();
            $('.glyphicon-volume-down').show();
        }

    });

    var query = document.querySelector.bind(document);

    // Once the user clicks a custom fullscreen button
    query('#fullsize').addEventListener('click', function(){
      // Play video and go fullscreen
      player.playVideo();

      var playerElement = query("#player");
      var requestFullScreen = playerElement.requestFullScreen || playerElement.mozRequestFullScreen || playerElement.webkitRequestFullScreen;
      if (requestFullScreen) {
        requestFullScreen.bind(playerElement)();
      }
    });

    $('#slider').on("slide", function(event, ui) {
        player.pauseVideo();
    });
    $('#slider').on("slidestop", function(event, ui) {
        var timeVideo = player.getDuration();
        var seekTo = (ui.value*timeVideo)/100;
        player.seekTo(seekTo, true);
        player.playVideo();
    });   

  }
 
  function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING) {
      
        $('.glyphicon-play').hide();
        $('.glyphicon-pause').show();

        var timeVideo = player.getDuration();
        mytimer = setInterval(function() {

            timeElapsed = player.getCurrentTime();
            currentTime = ( timeElapsed / timeVideo ) * 100;
            if(currentTime > 100) {
                $('#slider').slider('value', 0);
            } else {
                $('#slider').slider('value', currentTime);
            }

        }, 100);



    } else {
        clearTimeout(mytimer);
        $('.glyphicon-pause').hide();
        $('.glyphicon-play').show();
        
    }
  }
 
  function stopVideo() {
    player.stopVideo();
  }
 
  function playVideo() {
    if(ready) player.playVideo();
    else setTimeout(function(){ playVideo() },1000);
  }
        </script>










<script type="text/javascript">

      function viewPage () {
        var el = document.body;
        toggleFullscreen(el);
      };

      function toggleFullscreen (el) {
        if(document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement){
          if(document.exitFullscreen){
            document.exitFullscreen();
          }else if(document.mozCancelFullScreen){
            document.mozCancelFullScreen();
          }else if(document.webkitExitFullscreen){
            document.webkitExitFullscreen();
          }else if(document.msExitFullscreen){
            document.msExitFullscreen();
          }
        }else{
          if(document.documentElement.requestFullscreen){
            el.requestFullscreen();
          }else if(document.documentElement.mozRequestFullScreen){
            el.mozRequestFullScreen();
          }else if(document.documentElement.webkitRequestFullscreen){
            el.webkitRequestFullscreen();
          }else if(document.documentElement.msRequestFullscreen){
            el.msRequestFullscreen();
          }
        }
      };
    </script>

 
     </body>
</html>
<?php
}else{}

?>