 <?php
  


if(isset($_GET['direccion'])){
$direccion = $_GET['direccion'];




?>
<!-- </div> -->
<!-- reproductor -->

 <!--  <div class="ed-item l-14"> 
  </div>
</div>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/scripts4.js"></script> -->
<!-- <script src="js/scripts5.js"></script> -->

<!--  </body>
</html> -->
<!-- <div style="position:fixed;
  top:5em;
  right: 2em;width: 48%;height: 100%;"> -->
  


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mi red TV | Pagina Oficial</title>
    <meta name="description" content="Este es la pagina oficial de MI RED TV"/>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="icon" href="imagenes/favicon.png"/>
<!--     <link rel="stylesheet" href="css/ed-grid.css"/>
  <link rel="stylesheet" href="css/estilosmios.css"/> -->
  <script language="JavaScript" type="text/javascript" CHARSET="UTF-8" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body style="margin:-8px;">
  
    <script type="text/javascript" src="http://jwpsrv.com/library/echLdpbKEeSi8w4AfQhyIQ.js"></script>
    <script type="text/javascript">jwplayer.key="cbPZjCLEJ+O5oZl0AvaDQqyb50+ydDAD5kEqJuS10Zg=";</script>
    <div id="vplayer" style="position: fixed; right: 0; bottom: 0; min-width:100%; min-height:100%;

width:auto; height:auto; background-size:cover;"></div>


      <script type="text/javascript">
        jwplayer("vplayer").setup({
            sources: [{
                file: "<?php echo $direccion; ?>",
                autostart:true,
                label: "Auto"
            }],
            width: $(window).width(),
            height: $(window).height(),
            preload: "none",
            primary: "html5",
            cast: {}
        });
        var jw_retry_count = 0;
        jwplayer().onError(function() {
            if (jw_retry_count < 6) {
                setTimeout(function() {
                    jw_retry(jwplayer("vplayer").getPlaylistItem()["file"]);
                }, 2000);
            }
        });

        function jw_retry($v) {
            jwplayer().load([{
                sources: [{
                    file: $v,
                    label: "Auto"
                }]
            }]);
            jwplayer().play();
            jw_retry_count = jw_retry_count + 1;
        }
    </script>
</body>
</html>

<script>
// Inhabilitar el botón derecho
var DADrccolor = "#F1F1F1";
var DADrcimage = "https://lh5.googleusercontent.com/-70ZyK7Gt4XE/VI8sxCvJGII/AAAAAAAAGd0/RZA9e6iSJBM/s300/superheroe.png";
</script>
<script type="text/javascript" src="http://yourjavascript.com/2122535051/antirightclick.js"></script>

<!-- </div> -->

<?php
}else{
echo 'error';
}
?>
