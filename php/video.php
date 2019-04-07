

 <?php





if(isset($_GET['id'])and isset($_GET['direccion'])){
$id = $_GET['id'];
$direccion = $_GET['direccion'];



?>
   <!DOCTYPE html>

<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <title>Mi red TV | Pagina Oficial</title>
    <meta name="description" content="Este es la pagina oficial de MI RED TV"/>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <link rel="icon" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/ed-grid.css"/>
    <link rel="stylesheet" href="css/estilosmios.css"/> -->


  </head>

  <body class="main-header linear-gradient ">

    <header>

      <link href="reproductor/video-js.css" rel="stylesheet">
      <script src="reproductor/videojs-ie8.min.js"></script>
        <div id="video_player_box">
          <video id=example-video style="position: fixed; right: 0; bottom: 0; min-width:100%; min-height:100%;

width:auto; height:auto; background-size:cover;" class="video-js vjs-default-skin video1" controls autoplay>
                <source
                   src="<?php echo $direccion; ?>"

                >
          </video>

      <script src="reproductor/jquery.min.js"></script>
      <link href="reproductor/video-js2.css" rel="stylesheet">
      <script src="reproductor/video.js"></script>
      <script src="reproductor/videojs-flash.js"></script>
      <script src="reproductor/videojs-contrib-hls.js"></script>


 <script>
    (function(window, videojs) {
      var player = window.player = videojs('example-video');
      var loadUrl = document.getElementById('load-url');
      var url = document.getElementById('url');
      loadUrl.addEventListener('submit', function(event) {
        event.preventDefault();
        player.src({
          src: url.value,
          type: 'application/x-mpegURL'
        });
        return false;
      });
    }(window, window.videojs));
  </script>






    </header>
  </body>
</html>
<?php
}else{}

?>
