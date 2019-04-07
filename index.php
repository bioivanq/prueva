<?php
session_start();

$_SESSION['usuariopeliculas'] = 'peliculas';
$_SESSION['contrasenapeliculas'] = 'archive';
$_SESSION['usuariopeliculasyoutube'] = 'peliculas';
$_SESSION['contrasenapeliculasyoutube'] = 'youtube';
$_SESSION['usuarioseries'] = 'series';
$_SESSION['contrasenaseries'] = 'archive';
$_SESSION['usuarioseriesyoutube'] = 'series';
$_SESSION['contrasenaseriesyoutube'] = 'youtube';

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mi red TV | Pagina Oficial</title>
    <meta name="description" content="Este es la pagina oficial de MI RED TV"/>
  <!-- Declaraciópn de manifest -->
  <link rel="manifest" href="./manifest.json">
  <meta name="theme-color" content="#2196F3">
  <!-- Detección de Icono de PWA -->
  <link rel="icon" type="image/png" sizes="16x16" href="./img/icon_16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./img/icon_32x32.png">
  <link rel="icon" type="image/png" sizes="64x64" href="./img/icon_64x64.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./img/icon_96x96.png">
  <link rel="icon" type="image/png" sizes="128x128" href="./img/icon_128x128.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./img/icon_192x192.png">
  <link rel="icon" type="image/png" sizes="256x256" href="./img/icon_256x256.png">
  <link rel="icon" type="image/png" sizes="384x384" href="./img/icon_384x384.png">
  <link rel="icon" type="image/png" sizes="512x512" href="./img/icon_512x512.png">
  <link rel="icon" type="image/png" sizes="1024x1024" href="./img/icon_1024x1024.png">
  <!-- Metatags iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-title" content="PWA Myredtv ">
  <link rel="apple-touch-icon" sizes="192x192" href="./img/icon_192x192.png">
  <!-- Metatags Windows -->
  <meta name="msapplication-TileColor" content="#F7DF1E">
  <meta name="msapplication-TileImage" content="./img/icon_192x192.png">
  <!-- Otros Metatags -->
  <meta property="og:title" content="PWA Myredtv">
  <meta property="og:locale" content="es_MX">
  <meta property="og:type" content="website">
  <meta property="og:image" content="./img/icon_128x128.png">
  <meta property="og:site_name" content="Myredtv">
  <meta property="og:url" content="https://pwa.my.redtv">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="./style.css">

  <!-- <header class="Header">
    <h1>Progressive Web Apps Demo</h1>
  </header> -->
  <!-- <section class="GitHubUser"></section>
  <form class="GitHubUser-form">
    <input type="search" id="search" placeholder="Buscador GitHub">
  </form>
  <button id="share">Compartir</button> -->
  <!-- <div id="movies"></div> -->
  <!-- <script src="./promises.js"></script> -->
  <!-- <script src="./fetch.js"></script> -->


      <link rel="icon" href="imagenes/favicon.png"/>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

     <!--  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
     <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
      <script src="js/geturl.js"></script>
      <link rel="stylesheet" href="css/hover-min.css">

      <script type=text/javascript>
    document.oncontextmenu=function(){return false};
  </script>

<?php
if (!isset($_SESSION['usuario']) and !isset($_SESSION['contrasena']) and !isset($_SESSION['permisos'])){
?>

    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
          <div onClick="cerrar_secion()" class="btn btn-primary btn-sm"><i class="far fa-times-circle"></i></div>
          <!-- <a href="index.php" class="btn btn-primary btn-sm"><i class="far fa-times-circle"></i></a> -->
        </nav>
        <div class="container">
          <h6 class="d-flex justify-content-center">
            Inicio de Sesión
          </h6>


          <!-- <div style="margin-top:100px" class="modal fade" id="mostrar_ventana_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"> -->
  <div class="modal-dialog" id="i" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Inicio de Sesión</h4>
      </div> -->
      <div class="modal-body">
        <form name="form_inicio_sesion">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="text" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Password:</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>


           <div class="checkbox">
          <label>
            <input type="checkbox" id="checkbox_recordar"> Recordar usuario.
          </label>
      </div>



      </div>

     <!-- imagen de carga -->
      <center><div style="display:none;" id="carga"><img src="imagenes/cargando.gif"/></div></center>


      <div style="padding-left:10px; font-size:12px">
        <a href="#" onclick="link_password()">He olvidado mi contraseña</a>
      </div>

      <div style="padding:13px; display:none" id="link_password">
        <div name="form_olvido_password">
          <div class="form-group">
              <label for="recipient-name" class="control-label">Email:</label>
              <input type="text" name="email" class="form-control" id="email2">
            </div>
        </div>
        <button type="button" id="recuperarcuenta" class="btn btn-success">Recuperar Contraseña</button>
      </div>

      <div class="modal-footer">

      <!-- aler contraseña no correcta -->

      <div style="display:none" id="alertlogin" class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span   aria-hidden="true">&times;</span></button>
    <center>Email o password incorrecto</center>
    </div>


        <button type="button" class="btn btn-primary" id="inicio_sesion">Enviar</button>
      </div>
      </form>
    </div>
  <!-- </div> -->
</div>
        </div>

<script>
  $(document).ready(function(){
    $("#inicio_sesion").click(function(){
      var email = $("#email").val();
      var password = $("#password").val();

      var datos ="email=" + email + "&password=" + password + "&inicio_sesion=";

      if($.trim(email).length > 0 & $.trim(password).length > 0){
        $.ajax({
          type: "POST",
          url: "http://localhost/pwa/myredtv/php/validar_sesion.php",
          data: datos,

          beforeSend:function(){

        $("#alertlogin").hide("fast");
        $("#carga").show("fast");


      },

          success: function(data){
            if(data != "error"){

               $("#carga").hide("fast");
               // alert("Guardado correctamente");
          location.href="index.php?vista_index=vista_index";
          // alert(resp);
            }else{

              $("#carga").hide("fast");
               alert("Email o contraseña incorrectas");
          location.href="index.php?validar_sesion=error";
          // alert(resp);
            }
          }
        })
      }


  });
});

</script>
<script type="text/javascript">

function link_password(){


  $("#link_password").toggle("slow");


}

function recuperar_password(){

  // zona ajax
  var email=document.form_olvido_password.email.value;
  $.ajax({
      type:"POST",
      url:"clientes/inicio_de_sesion/recuperar_password.php",
      data:{"email":email},

      beforeSend:function(){


        $("#carga").show("fast");


      },

      success:function(resp){

        if(resp=="exito"){

          $("#carga").hide("fast");
          alert("Hemos enviado un correo con su contraseña");


        }

        if(resp=="fracaso"){

          $("#carga").hide("fast");
          alert("El correo no existe en nuestra base de datos");


        }



      }

    });


  // zona ajax

}
</script>

<?php

}else{

  if (isset($_GET['vista_index']) and $_GET['vista_index'] == "vista_index" ){
?>






    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
          <div onClick="cerrar_secion()" class="btn btn-primary btn-sm"><i class="far fa-times-circle"></i></div>
        </nav>
        <div class="container">
          <h6 class="d-flex justify-content-center">
            Menu
          </h6>



<div class="main" style="min-height: 465px;">

 <!-- contenido -->



<div id="botones" class="ed-container" style=" max-width:1300px;margin: 70px auto 0px auto;">

  <div id="verlogs" onClick="verlogs()" style="display:none; text-decoration:none; color:#000" >
    <div class="hvr-bounce-to-left" style=" width:350px; height:140px; background-color:#F90; margin:20px; margin-left:40px; border-radius:10px; cursor:pointer; text-align:center; padding: 10px; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; float:left"><strong>Pulsa AQUI para ver los logs</strong>
        <div style="color:#FFF;font-size:80px; margin-top:-20px"><i class="fas fa-chart-bar" aria-hidden="true"></i>
          </div>
      </div>
    </div>



   <div id="categorias" onClick="formaniadircategoriasusuario()" style="display:none; text-decoration:none; color:#000" >
    <div class="hvr-bounce-to-left" style="width:350px; height:140px; background-color: #6C3; margin:20px; margin-left:40px;border-radius:10px;cursor:pointer; text-align:center; padding: 10px; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;float:left"><strong>Pulsa AQUI para la administración principal</strong>
        <div style="color:#FFF;font-size:80px"><i class="fa fa-user-secret" aria-hidden="true"></i>
            </div>
    </div>
  </div>

  <div id="gestionusuarios" onClick="gestionusuarios()" style="display:none; text-decoration:none; color:#000" >
    <div  class="hvr-bounce-to-left" style=" width:350px; height:140px; background-color:blue; margin:20px; margin-left:40px; border-radius:10px; cursor:pointer; text-align:center; padding: 10px; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; float:left"><strong>Pulsa AQUI para gestionar a los usuarios</strong>
        <div style="color:#FFF;font-size:80px; margin-top:-20px"><i class="fa fa-users" aria-hidden="true"></i>
          </div>
      </div>
    </div>

    <div id="administraciontienda" onClick="administraciontienda()" style="display:none; text-decoration:none; color:#000" >
      <div  class="hvr-bounce-to-left" style="width:350px; height:140px; background-color: purple; margin:20px; margin-left:40px;border-radius:10px;cursor:pointer; text-align:center; padding: 10px; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;float:left"><strong>Pulsa AQUI para administrar la tienda</strong>
        <div style="color:#FFF;font-size:80px"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
            </div>
    </div>
  </div>

  <div id="inicio" onClick="inicio()" style="display:none; text-decoration:none; color:#000" >
      <div class="hvr-bounce-to-left" style=" width:350px; height:140px; background-color:gold; margin:20px; margin-left:40px; border-radius:10px; cursor:pointer; text-align:center; padding: 10px; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; float:left"><strong>Pulsa AQUI para ir a pagina principal</strong>
        <div style="color:#FFF;font-size:80px; margin-top:-20px"><i class="fa fa-bars " aria-hidden="true"></i>
          </div>
      </div>
   </div>

   <div id="principal" onClick="principal()" style="display:none; text-decoration:none; color:#000" >
    <div class="hvr-bounce-to-left" style="width:350px; height:140px; background-color: green; margin:20px; margin-left:40px;border-radius:10px;cursor:pointer; text-align:center; padding: 10px; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;float:left"><strong>Pulsa AQUI gestionar listas de peliculas y TV</strong>
        <div style="color:#FFF;font-size:80px"><i class="fa fa-list" aria-hidden="true"></i>
            </div>
    </div>
  </div>

   <div id="principalver" onClick="principalver()" style="display:none; text-decoration:none; color:#000" >
    <div class="hvr-bounce-to-left" style=" width:350px; height:140px; background-color: #F39;margin:20px; margin-left:40px;border-radius:10px; cursor:pointer; text-align:center; padding: 10px; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; float:left"><strong>Pulsa AQUI ver peliculas y TV</strong>
        <div style="color:#FFF;font-size:80px"><i class="fas fa-tv " aria-hidden="true"></i>
            </div>
      </div>
      </div>

  </div>
</div>




<script>
  $(document).ready(function(){
    var data = "<?php echo $_SESSION['permisos']; ?>";

     if(data == 1){
     $("#verlogs").show("fast");
     $("#categorias").show("fast");
     $("#gestionusuarios").show("fast");
     $("#administraciontienda").show("fast");
     $("#inicio").show("fast");
     $("#principal").show("fast");
     $("#principalver").show("fast");
     }
     if(data == 2){

     $("#inicio").show("fast");
     $("#principal").show("fast");
     $("#principalver").show("fast");
     }
     if(data == 3){
     $("#inicio").show("fast");
     $("#principalver").show("fast");
     }
     if(data == 4){
     $("#inicio").show("fast");

     }


});

  function verlogs(){

 location.href="index.php?verlogs=verlogs";

  }

   function formaniadircategoriasusuario(){

 location.href="index.php?formaniadircategoriasusuario=formaniadircategoriasusuario";



  }

     function gestionusuarios(){


 location.href="index.php?gestionusuarios=gestionusuarios" ;

  }

     function administraciontienda(){

 location.href="index.php?validar=validar";


  }

     function inicio(){

 location.href="index.php?inicio=inicio" ;


  }

     function principal(){

 location.href="index.php?principal=principal";


  }
     function principalver(){


 location.href="index.php?principalver=principalver";

  }


</script>


<?php
  }
  if (isset($_GET['principalver']) and $_GET['principalver'] == "principalver" ){


    include('php/conexion.php');
 $registros1=mysqli_query($conexion,"select * from categoriaspeliculas order by categoria asc");
?>
















    </head>
    <body>
        <?php
          include 'php/menuprincipalver.php';
        ?>
        <div class="container">
          <h6 class="d-flex justify-content-center">
            Peliculas
          </h6>





<header>




      <div class="ed-container">
         <div class="ed-item s-100 m-100 l-86">


<br /><br />

<div class="container">
    <div class="ed-item s-100 m-50 l-35">
   <form name="form1">
<select onChange="f_ordenar()" class="form-control" name="ordenar" id="categoriaspeliculas">
  <option>Ordenar por...</option><?php
    while ($fila1=mysqli_fetch_array($registros1)){

    ?>

            <option value=<?php echo utf8_encode($fila1['archivo']); ?>><?php echo utf8_encode($fila1['categoria']); ?></option>
            <?php
    }
     ?>

</select>
</form></p>
</div>
</div>

<br />
<div  style="float:right; margin-bottom:30px">
<form class="form2">
<fieldset class="fieldset1">
<input class="input" type="search" id="buscar" placeholder="Buscar..."/>
<button class="btn btn-primary btn-sm" type="button" id="buscador">
<i style="color:black; position: relative; right: 0px" class="fas fa-search"></i>
</button>
</fieldset>
</form>
</div>

<!-- ////socializo////////////////////////////////////////////////////// -->

<did  id="nombrecategoria" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
            <did  id="nombrecategoria2" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
             <did  id="nombrecategoria3" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>




<!-- <div id="peliculasver"></div> -->
<div style="clear:both"></div>
<center><img id="carga" style="display:none; margin-top:50px" src="imagenes/cargando.gif"> </center>
<!-- <div  style="display:none;" id="peliculasver"></div> -->
<div  style="display:none;" id="peliculasver2"></div>
<div  style="display:none;" id="peliculasver3"></div>




<div class="ed-container">

   <br />
   <div id="load_data" class="ed-item s-100 m-100 l-100"></div>
   <div id="load_data_message" class="ed-item s-100 m-100 l-100"></div>
   <br />
   <br />
   <br />
   <br />
   <br />
   <br />
</div>


<script>

$(document).ready(function(){

 var limit = 12;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"php/fetchprincipalver.php",

   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 1);
  }
 });

});
</script>


<script>

  // $(document).ready(function(){



//   $.ajax({


//       url:"http://localhost/pwa/myredtv/php/selectpeliculas.php",

//       beforeSend:function(){

//         $("#peliculasver2").hide("fast");
//         $("#nombrecategoria2").hide("fast");
//         $("#carga").show("fast");


//       },

//       success:function(respuesta){

//         $("#carga").hide("fast");
        $("#nombrecategoria").append("<p>Peliculas</p>");
//         $("#peliculasver").show("fast");

//     var url = "http://localhost/pwa/myredtv/php/selectpeliculas.php";
//    // var url = "../../select.php";
//    $.getJSON(url,function(respuesta){
//     $.each(respuesta,function(i, campo){
//       var id = campo.id;
//       var direccion = campo.direccion;
//       var foto = campo.foto;
//       var titulo = campo.titulo;


//       $("#peliculasver").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><div id="+id+" style='display:inline;'><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + titulo + "</p></div></div></div>");

//       $("#"+id).click(function() {


//     $("#peliculasver").hide("fast");

//     $("#video_player_box").append("<video id=example-video style='position: fixed; right: 0; bottom: 0; min-width:100%; min-height:100%;width:100%; height:auto; background-size:cover;' class='video-js vjs-default-skin video1' controls autoplay><source src=" + direccion + "></video>");
// });





//     })

//    });



//       }




//   });




// });







//  $(document).ready(function(){
//    var url = "http://localhost/pwa/myredtv/php/selectcategoriaspeliculas.php";
//    // var url = "../../select.php";
//    $.getJSON(url,function(result){
//     $.each(result,function(i, campo){

//       var categoria = campo.categoria;
//       var archivo = campo.archivo;

//       $("#categoriaspeliculas").append("<option value=" + categoria + ">" + archivo + "</option>");

//     })

//    });
// });


function f_ordenar(){
   var name=document.form1.ordenar.value;
  $.ajax({


      // url:"http://localhost/pwa/myredtv/php/selectpeliculasordenar.php?ordenar="+name+"&ordenarpor=",

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#peliculasver2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#peliculasver").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria2").append("<p>" +name + "</p>");
$("#nombrecategoria2").show("fast");
$("#peliculasver2").show("fast");
     var url = "http://localhost/pwa/myredtv/php/selectpeliculasordenar.php?ordenar="+name+"&ordenarpor=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var direccion = campo.direccion;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#peliculasver2").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?videoprincipalver=" + direccion + "'><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + titulo + "</p></a></div></div>");

  $("#"+id).click(function() {


    $("#peliculasver2").hide("fast");

    $("#video_player_box").append("<video id=example-video style='position: fixed; right: 0; bottom: 0; min-width:100%; min-height:100%;width:100%; height:auto; background-size:cover;' class='video-js vjs-default-skin video1' controls autoplay><source src=" + direccion + "></video>");
});


    })

   });
   }




  });


}


 $("#buscador").click(function(){
      var buscar = $("#buscar").val();


      $.ajax({
        url:"http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&peliculas=",

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#peliculasver2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#peliculasver").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria3").append("<p>Resultados " +buscar + "</p>");
$("#nombrecategoria3").show("fast");
$("#peliculasver3").show("fast");
     var url = "http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&peliculas=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var direccion = campo.direccion;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#peliculasver3").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?videoprincipalver=" + direccion + "'><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + titulo + "</p></a></div></div>");

  $("#"+id).click(function() {


    $("#peliculasver3").hide("fast");

    $("#video_player_box").append("<video id=example-video style='position: fixed; right: 0; bottom: 0; min-width:100%; min-height:100%;width:100%; height:auto; background-size:cover;' class='video-js vjs-default-skin video1' controls autoplay><source src=" + direccion + "></video>");
});


    })

   });
   }




 });
 });



</script>
<!-- <tr><td>" + nombre + "</td><td>" + autor + "</td><td>" + precio + "</td><td><a class='btn btn-info' href='edit.html?id=" + id + "&nombre=" + nombre + "&autor=" + autor + "&precio=" + precio + "'><i class='fas fa-edit'></i></a></td></tr>");
      // $("tbody").append("<p>hola</p>"); -->


<!-- // <a href="crearfavoritomilista.php?id_usuario='.$_SESSION['id'].'&id_peliculas='.$fila["id"].'&usuario='.$fila["usuario"].'&contrasena='.$fila["contrasena"].'&tituloserie='.$fila["tituloserie"].'&titulo='.$fila["titulo"].'&direccion='.$fila["direccion"].'&foto='.$fila["foto"].'&categoria='.$fila["categoria"].'&comentario='.$fila["comentario"].'&valoracion='.$fila["valoracion"].'"><img  style="
//       width: 15%;
//       height: 6%;
//       display: inline;" src="img/agregar.png" alt="AGREGAR A MI LISTA"></a>

// <a href="eliminarfavoritomilista.php?id='.$fila["id"].'">
//       <img  style="
//       width: 15%;
//       height: 6%;
//       display: inline;" src="img/eliminar.png" alt="ELIMINAR DE MI LISTA"></a>
// <img  style="width: 20%;height: 6%;display: inline;" src="img/vistas.png" alt="VISTAS">

//       <p style="width: 15%;
//       height: 6%;
//       display: inline;">'.$fila["valoracion"].'</p>   -->
<?php
  }
  if (isset($_GET['principalveryoutube']) and $_GET['principalveryoutube'] == "principalveryoutube" ){

      include('php/conexion.php');
 $registros1=mysqli_query($conexion,"select * from categoriaspeliculas order by categoria asc");
?>








    </head>
    <body>
        <?php
          include 'php/menuprincipalver.php';
        ?>
        <div class="container">
          <h6 class="d-flex justify-content-center">
            Peliculas Youtube
          </h6>





<header>




      <div class="ed-container">
         <div class="ed-item s-100 m-100 l-86">


<br /><br />

<div class="container">
    <div class="ed-item s-100 m-50 l-35">
   <form name="form1">
<select onChange="f_ordenar()" class="form-control" name="ordenar" id="categoriaspeliculasyoutube">
  <option>Ordenar por...</option><?php
    while ($fila1=mysqli_fetch_array($registros1)){

    ?>

            <option value=<?php echo utf8_encode($fila1['archivo']); ?>><?php echo utf8_encode($fila1['categoria']); ?></option>
            <?php
    }
     ?>

</select>
</form></p>
</div>
</div>

<br />
<div  style="float:right; margin-bottom:30px">
<form class="form2">
<fieldset class="fieldset1">
<input class="input" type="search" id="buscar" placeholder="Buscar..."/>
<button class="btn btn-primary btn-sm" type="button" id="buscador">
<i style="color:black; position: relative; right: 0px" class="fas fa-search"></i>
</button>
</fieldset>
</form>
</div>

<!-- ////socializo////////////////////////////////////////////////////// -->

<did  id="nombrecategoria" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
            <did  id="nombrecategoria2" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
             <did  id="nombrecategoria3" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>

<!-- <div id="peliculasyoutubever"></div> -->
<div style="clear:both"></div>
<center><img id="carga" style="display:none; margin-top:50px" src="imagenes/cargando.gif"> </center>
<!-- <div  style="display:none;" id="peliculasyoutubever"></div> -->
<div  style="display:none;" id="peliculasyoutubever2"></div>
<div  style="display:none;" id="peliculasyoutubever3"></div>








  </div>
<!-- reproductor -->

  <div class="ed-item l-14">
  </div>
</div>

<div class="ed-container">

   <br />
   <div id="load_data" class="ed-item s-100 m-100 l-100"></div>
   <div id="load_data_message" class="ed-item s-100 m-100 l-100"></div>
   <br />
   <br />
   <br />
   <br />
   <br />
   <br />
</div>


<script>

$(document).ready(function(){

 var limit = 12;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"php/fetchprincipalveryoutube.php",

   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 1);
  }
 });

});
</script>


<script>
//   $(document).ready(function(){



//   $.ajax({


//       url:"http://localhost/pwa/myredtv/php/selectpeliculasyoutube.php",

//       beforeSend:function(){

//         $("#peliculasyoutubever2").hide("fast");
//         $("#nombrecategoria2").hide("fast");
//         $("#carga").show("fast");


//       },

//       success:function(respuesta){

//         $("#carga").hide("fast");
        $("#nombrecategoria").append("<p>Peliculas Youtube</p>");
//         $("#peliculasyoutubever").show("fast");

//     var url = "http://localhost/pwa/myredtv/php/selectpeliculasyoutube.php";
//    // var url = "../../select.php";
//    $.getJSON(url,function(respuesta){
//     $.each(respuesta,function(i, campo){
//       var id = campo.id;
//       var direccion = campo.direccion;
//       var foto = campo.foto;
//       var titulo = campo.titulo;

//       $("#peliculasyoutubever").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='videoyoutube.html?direccion=" + direccion +"'><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + titulo + "</p></a></div></div>");



//     })

//    });



//       }




//   });




// });







//  $(document).ready(function(){
//    var url = "http://localhost/pwa/myredtv/php/selectcategoriaspeliculas.php";
//    // var url = "../../select.php";
//    $.getJSON(url,function(result){
//     $.each(result,function(i, campo){

//       var categoria = campo.categoria;
//       var archivo = campo.archivo;

//       $("#categoriaspeliculasyoutube").append("<option value=" + categoria + ">" + archivo + "</option>");

//     })

//    });
// });


function f_ordenar(){
   var name=document.form1.ordenar.value;
  $.ajax({


      // url:"http://localhost/pwa/myredtv/php/selectpeliculasyoutubeordenar.php?ordenar="+name+"&ordenarpor=",

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#peliculasyoutubever2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#peliculasyoutubever").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria2").append("<p>" +name + "</p>");
$("#nombrecategoria2").show("fast");
$("#peliculasyoutubever2").show("fast");
     var url = "http://localhost/pwa/myredtv/php/selectpeliculasyoutubeordenar.php?ordenar="+name+"&ordenarpor=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var direccion = campo.direccion;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#peliculasyoutubever2").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?videoprincipalveryoutube=" + direccion +"'><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + titulo + "</p></a></div></div>");




    })

   });
   }




  });


}

$("#buscador").click(function(){
      var buscar = $("#buscar").val();


      $.ajax({
        url:"http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&peliculasyoutube=",

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#peliculasyoutubever2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#peliculasyoutubever").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria3").append("<p>Resultados " +buscar + "</p>");
$("#nombrecategoria3").show("fast");
$("#peliculasyoutubever3").show("fast");
     var url = "http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&peliculasyoutube=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var direccion = campo.direccion;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#peliculasyoutubever3").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?videoprincipalveryoutube=" + direccion +"'><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + titulo + "</p></a></div></div>");




    })

   });
   }




 });
 });



</script>
<!-- <tr><td>" + nombre + "</td><td>" + autor + "</td><td>" + precio + "</td><td><a class='btn btn-info' href='edit.html?id=" + id + "&nombre=" + nombre + "&autor=" + autor + "&precio=" + precio + "'><i class='fas fa-edit'></i></a></td></tr>");
      // $("tbody").append("<p>hola</p>"); -->


<!-- // <a href="crearfavoritomilista.php?id_usuario='.$_SESSION['id'].'&id_peliculasyoutube='.$fila["id"].'&usuario='.$fila["usuario"].'&contrasena='.$fila["contrasena"].'&tituloserie='.$fila["tituloserie"].'&titulo='.$fila["titulo"].'&direccion='.$fila["direccion"].'&foto='.$fila["foto"].'&categoria='.$fila["categoria"].'&comentario='.$fila["comentario"].'&valoracion='.$fila["valoracion"].'"><img  style="
//       width: 15%;
//       height: 6%;
//       display: inline;" src="img/agregar.png" alt="AGREGAR A MI LISTA"></a>

// <a href="eliminarfavoritomilista.php?id='.$fila["id"].'">
//       <img  style="
//       width: 15%;
//       height: 6%;
//       display: inline;" src="img/eliminar.png" alt="ELIMINAR DE MI LISTA"></a>
// <img  style="width: 20%;height: 6%;display: inline;" src="img/vistas.png" alt="VISTAS">

//       <p style="width: 15%;
//       height: 6%;
//       display: inline;">'.$fila["valoracion"].'</p>   -->
<?php
  }
  if (isset($_GET['principalverseries']) and $_GET['principalverseries'] == "principalverseries" ){

     include('php/conexion.php');
 $registros3=mysqli_query($conexion,"select * from categoriasseries order by categoria asc");
?>











    </head>
    <body>
       <?php
          include 'php/menuprincipalver.php';
        ?>
        <div class="container">
          <h6 class="d-flex justify-content-center">
            Series
          </h6>





<header>




      <div class="ed-container">
         <div class="ed-item s-100 m-100 l-86">


<br /><br />

<div class="container">
    <div class="ed-item s-100 m-50 l-35">
   <form name="form1">
<select onChange="f_ordenar()" class="form-control" name="ordenar" id="categoriasseries">
  <option>Ordenar por...</option><?php
    while ($fila3=mysqli_fetch_array($registros3)){

    ?>

            <option value=<?php echo utf8_encode($fila3['categoria']); ?>><?php echo utf8_encode($fila3['archivo']); ?></option>
            <?php
    }
     ?>

</select>
</form></p>
</div>
</div>

<br />
<div  style="float:right; margin-bottom:30px">
<form class="form2">
<fieldset class="fieldset1">
<input class="input" type="search" id="buscar" placeholder="Buscar..."/>
<button class="btn btn-primary btn-sm" type="button" id="buscador">
<i style="color:black; position: relative; right: 0px" class="fas fa-search"></i>
</button>
</fieldset>
</form>
</div>

<!-- ////socializo////////////////////////////////////////////////////// -->

<did  id="nombrecategoria" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
            <did  id="nombrecategoria2" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
             <did  id="nombrecategoria3" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>

<!-- <div id="seriesver"></div> -->
<div style="clear:both"></div>
<center><img id="carga" style="display:none; margin-top:50px" src="imagenes/cargando.gif"> </center>
<!-- <div  style="display:none;" id="seriesver"></div> -->
<div  style="display:none;" id="seriesver2"></div>
<div  style="display:none;" id="seriesver3"></div>








  </div>
<!-- reproductor -->

  <div class="ed-item l-14">
  </div>
</div>

<div class="ed-container">

   <br />
   <div id="load_data" class="ed-item s-100 m-100 l-100"></div>
   <div id="load_data_message" class="ed-item s-100 m-100 l-100"></div>
   <br />
   <br />
   <br />
   <br />
   <br />
   <br />
</div>


<script>

$(document).ready(function(){

 var limit = 12;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"php/fetchprincipalverseries.php",

   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 1);
  }
 });

});
</script>


<script>
//   $(document).ready(function(){



//   $.ajax({


//       url:"http://localhost/pwa/myredtv/php/selectseries.php",

//       beforeSend:function(){

//         $("#seriesver2").hide("fast");
//         $("#nombrecategoria2").hide("fast");
//         $("#carga").show("fast");


//       },

//       success:function(respuesta){

//         $("#carga").hide("fast");
        $("#nombrecategoria").append("<p>series</p>");
//         $("#seriesver").show("fast");

//     var url = "http://localhost/pwa/myredtv/php/selectseries.php";
//    // var url = "../../select.php";
//    $.getJSON(url,function(respuesta){
//     $.each(respuesta,function(i, campo){
//       var id = campo.id;
//       var tituloserie = campo.tituloserie;
//       var foto = campo.foto;
//       var titulo = campo.titulo;
//       var data = "<?php echo $_SESSION['permisos']; ?>";

//       $("#seriesver").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='videoserie.html?tituloserie=" + tituloserie + "&data=" + data + "'><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + tituloserie + "</p></a></div></div>");



//     })

//    });



//       }




//   });




// });







//  $(document).ready(function(){
//    var url = "http://localhost/pwa/myredtv/php/selectcategoriasseries.php";
//    // var url = "../../select.php";
//    $.getJSON(url,function(result){
//     $.each(result,function(i, campo){

//       var categoria = campo.categoria;
//       var archivo = campo.archivo;

//       $("#categoriasseries").append("<option value=" + categoria + ">" + archivo + "</option>");

//     })

//    });
// });


function f_ordenar(){
   var name=document.form1.ordenar.value;
  $.ajax({


      // url:"http://localhost/pwa/myredtv/php/selectseriesordenar.php?ordenar="+name,

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#seriesver2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#seriesver").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria2").append("<p>" +name + "</p>");
$("#nombrecategoria2").show("fast");
$("#seriesver2").show("fast");
     var url = "http://localhost/pwa/myredtv/php/selectseriesordenar.php?ordenar="+name+"&ordenarpor=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var tituloserie = campo.tituloserie;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#seriesver2").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?tituloserie=" + tituloserie +"&videoserie='><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + tituloserie + "</p></a></div></div>");




    })

   });
   }




  });


}


$("#buscador").click(function(){
      var buscar = $("#buscar").val();


      $.ajax({
        url:"http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&series=",

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#seriesver2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#seriesver").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria3").append("<p>Resultados " +buscar + "</p>");
$("#nombrecategoria3").show("fast");
$("#seriesver3").show("fast");
     var url = "http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&series=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var tituloserie = campo.tituloserie;
      var direccion = campo.direccion;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#seriesver3").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?tituloserie=" + tituloserie +"&videoserie='><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + tituloserie + "</p></a></div></div>");




    })

   });
   }




 });
 });



</script>
<!-- <tr><td>" + nombre + "</td><td>" + autor + "</td><td>" + precio + "</td><td><a class='btn btn-info' href='edit.html?id=" + id + "&nombre=" + nombre + "&autor=" + autor + "&precio=" + precio + "'><i class='fas fa-edit'></i></a></td></tr>");
      // $("tbody").append("<p>hola</p>"); -->


<!-- // <a href="crearfavoritomilista.php?id_usuario='.$_SESSION['id'].'&id_series='.$fila["id"].'&usuario='.$fila["usuario"].'&contrasena='.$fila["contrasena"].'&tituloserie='.$fila["tituloserie"].'&titulo='.$fila["titulo"].'&direccion='.$fila["direccion"].'&foto='.$fila["foto"].'&categoria='.$fila["categoria"].'&comentario='.$fila["comentario"].'&valoracion='.$fila["valoracion"].'"><img  style="
//       width: 15%;
//       height: 6%;
//       display: inline;" src="img/agregar.png" alt="AGREGAR A MI LISTA"></a>

// <a href="eliminarfavoritomilista.php?id='.$fila["id"].'">
//       <img  style="
//       width: 15%;
//       height: 6%;
//       display: inline;" src="img/eliminar.png" alt="ELIMINAR DE MI LISTA"></a>
// <img  style="width: 20%;height: 6%;display: inline;" src="img/vistas.png" alt="VISTAS">

//       <p style="width: 15%;
//       height: 6%;
//       display: inline;">'.$fila["valoracion"].'</p>   -->

<?php
  }
  if (isset($_GET['principalverseriesyoutube']) and $_GET['principalverseriesyoutube'] == "principalverseriesyoutube" ){

      include('php/conexion.php');
 $registros3=mysqli_query($conexion,"select * from categoriasseries order by categoria asc");
?>










    </head>
    <body>
       <?php
          include 'php/menuprincipalver.php';
        ?>
        <div class="container">
          <h6 class="d-flex justify-content-center">
            Series Youtube
          </h6>





<header>




      <div class="ed-container">
         <div class="ed-item s-100 m-100 l-86">


<br /><br />

<div class="container">
    <div class="ed-item s-100 m-50 l-35">
   <form name="form1">
<select onChange="f_ordenar()" class="form-control" name="ordenar" id="categoriasseriesyoutube">
  <option>Ordenar por...</option><?php
    while ($fila3=mysqli_fetch_array($registros3)){

    ?>

            <option value=<?php echo utf8_encode($fila3['categoria']); ?>><?php echo utf8_encode($fila3['archivo']); ?></option>
            <?php
    }
     ?>


</select>
</form></p>
</div>
</div>

<br />
<div  style="float:right; margin-bottom:30px">
<form class="form2">
<fieldset class="fieldset1">
<input class="input" type="search" id="buscar" placeholder="Buscar..."/>
<button class="btn btn-primary btn-sm" type="button" id="buscador">
<i style="color:black; position: relative; right: 0px" class="fas fa-search"></i>
</button>
</fieldset>
</form>
</div>

<!-- ////socializo////////////////////////////////////////////////////// -->

<did  id="nombrecategoria" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
            <did  id="nombrecategoria2" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
             <did  id="nombrecategoria3" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>

<!-- <div id="seriesyoutubever"></div> -->
<div style="clear:both"></div>
<center><img id="carga" style="display:none; margin-top:50px" src="imagenes/cargando.gif"> </center>
<!-- <div  style="display:none;" id="seriesyoutubever"></div> -->
<div  style="display:none;" id="seriesyoutubever2"></div>
<div  style="display:none;" id="seriesyoutubever3"></div>








  </div>
<!-- reproductor -->

  <div class="ed-item l-14">
  </div>
</div>


<div class="ed-container">

   <br />
   <div id="load_data" class="ed-item s-100 m-100 l-100"></div>
   <div id="load_data_message" class="ed-item s-100 m-100 l-100"></div>
   <br />
   <br />
   <br />
   <br />
   <br />
   <br />
</div>


<script>

$(document).ready(function(){

 var limit = 12;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"php/fetchprincipalverseriesyoutube.php",

   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 1);
  }
 });

});
</script>


<script>
//   $(document).ready(function(){



//   $.ajax({


//       url:"http://localhost/pwa/myredtv/php/selectseriesyoutube.php",

//       beforeSend:function(){

//         $("#seriesyoutubever2").hide("fast");
//         $("#nombrecategoria2").hide("fast");
//         $("#carga").show("fast");


//       },

//       success:function(respuesta){

//         $("#carga").hide("fast");
        $("#nombrecategoria").append("<p>Series Youtube</p>");
//         $("#seriesyoutubever").show("fast");

//     var url = "http://localhost/pwa/myredtv/php/selectseriesyoutube.php";
//    // var url = "../../select.php";
//    $.getJSON(url,function(respuesta){
//     $.each(respuesta,function(i, campo){
//       var id = campo.id;
//       var tituloserie = campo.tituloserie;
//       var foto = campo.foto;
//       var titulo = campo.titulo;

//       $("#seriesyoutubever").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?tituloserie=" + tituloserie +"&videoserieyoutube='><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + tituloserie + "</p></a></div></div>");



//     })

//    });



//       }




//   });




// });







//  $(document).ready(function(){
//    var url = "http://localhost/pwa/myredtv/php/selectcategoriasseries.php";
//    // var url = "../../select.php";
//    $.getJSON(url,function(result){
//     $.each(result,function(i, campo){

//       var categoria = campo.categoria;
//       var archivo = campo.archivo;

//       $("#categoriasseriesyoutube").append("<option value=" + categoria + ">" + archivo + "</option>");

//     })

//    });
// });


function f_ordenar(){
   var name=document.form1.ordenar.value;
  $.ajax({


      // url:"http://localhost/pwa/myredtv/php/selectseriesyoutubeordenar.php?ordenar="+name,

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#seriesyoutubever2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#seriesyoutubever").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria2").append("<p>" +name + "</p>");
$("#nombrecategoria2").show("fast");
$("#seriesyoutubever2").show("fast");
     var url = "http://localhost/pwa/myredtv/php/selectseriesyoutubeordenar.php?ordenar="+name+"&ordenarpor=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var tituloserie = campo.tituloserie;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#seriesyoutubever2").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?tituloserie=" + tituloserie +"&videoserieyoutube='><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + tituloserie + "</p></a></div></div>");




    })

   });
   }




  });


}


$("#buscador").click(function(){
      var buscar = $("#buscar").val();


      $.ajax({
        url:"http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&seriesyoutube=",

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#seriesyoutubever2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#seriesyoutubever").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria3").append("<p>Resultados " +buscar + "</p>");
$("#nombrecategoria3").show("fast");
$("#seriesyoutubever3").show("fast");
     var url = "http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&seriesyoutube=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var tituloserie = campo.tituloserie;
      var direccion = campo.direccion;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#seriesyoutubever3").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?tituloserie=" + tituloserie +"&videoserieyoutube='><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + tituloserie + "</p></a></div></div>");




    })

   });
   }




 });
 });


</script>
<!-- <tr><td>" + nombre + "</td><td>" + autor + "</td><td>" + precio + "</td><td><a class='btn btn-info' href='edit.html?id=" + id + "&nombre=" + nombre + "&autor=" + autor + "&precio=" + precio + "'><i class='fas fa-edit'></i></a></td></tr>");
      // $("tbody").append("<p>hola</p>"); -->


<!-- // <a href="crearfavoritomilista.php?id_usuario='.$_SESSION['id'].'&id_seriesyoutube='.$fila["id"].'&usuario='.$fila["usuario"].'&contrasena='.$fila["contrasena"].'&tituloserie='.$fila["tituloserie"].'&titulo='.$fila["titulo"].'&direccion='.$fila["direccion"].'&foto='.$fila["foto"].'&categoria='.$fila["categoria"].'&comentario='.$fila["comentario"].'&valoracion='.$fila["valoracion"].'"><img  style="
//       width: 15%;
//       height: 6%;
//       display: inline;" src="img/agregar.png" alt="AGREGAR A MI LISTA"></a>

// <a href="eliminarfavoritomilista.php?id='.$fila["id"].'">
//       <img  style="
//       width: 15%;
//       height: 6%;
//       display: inline;" src="img/eliminar.png" alt="ELIMINAR DE MI LISTA"></a>
// <img  style="width: 20%;height: 6%;display: inline;" src="img/vistas.png" alt="VISTAS">

//       <p style="width: 15%;
//       height: 6%;
//       display: inline;">'.$fila["valoracion"].'</p>   -->

<?php
  }
  if (isset($_GET['principalvertv']) and $_GET['principalvertv'] == "principalvertv" ){

     include('php/conexion.php');
 $registros2=mysqli_query($conexion,"select * from categoriastv order by categoria asc");
?>












    </head>
    <body>
        <?php
          include 'php/menuprincipalver.php';
        ?>
        <div class="container">
          <h6 class="d-flex justify-content-center">
            Televisión
          </h6>





<header>




      <div class="ed-container">
         <div class="ed-item s-100 m-100 l-86">


<br /><br />

<div class="container">
    <div class="ed-item s-100 m-50 l-35">
   <form name="form1">
<select onChange="f_ordenar()" class="form-control" name="ordenar" id="categoriastv">
  <option>Ordenar por...</option><?php
    while ($fila2=mysqli_fetch_array($registros2)){

    ?>

            <option value=<?php echo utf8_encode($fila2['archivo']); ?>><?php echo utf8_encode($fila2['categoria']); ?></option>
            <?php
    }
     ?>


</select>
</form></p>
</div>
</div>

<br />
<div  style="float:right; margin-bottom:30px">
<form class="form2">
<fieldset class="fieldset1">
<input class="input" type="search" id="buscar" placeholder="Buscar..."/>
<button class="btn btn-primary btn-sm" type="button" id="buscador">
<i style="color:black; position: relative; right: 0px" class="fas fa-search"></i>
</button>
</fieldset>
</form>
</div>

<!-- ////socializo////////////////////////////////////////////////////// -->

<did  id="nombrecategoria" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
            <did  id="nombrecategoria2" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
             <did  id="nombrecategoria3" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>

<!-- <div id="tvver"></div> -->
<div style="clear:both"></div>
<center><img id="carga" style="display:none; margin-top:50px" src="imagenes/cargando.gif"> </center>
<!-- <div  style="display:none;" id="tvver"></div> -->
<div  style="display:none;" id="tvver2"></div>
<div  style="display:none;" id="tvver3"></div>








  </div>
<!-- reproductor -->

  <div class="ed-item l-14">
  </div>
</div>


<div class="ed-container">

   <br />
   <div id="load_data" class="ed-item s-100 m-100 l-100"></div>
   <div id="load_data_message" class="ed-item s-100 m-100 l-100"></div>
   <br />
   <br />
   <br />
   <br />
   <br />
   <br />
</div>


<script>

$(document).ready(function(){

 var limit = 36;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"php/fetchprincipalvertv.php",

   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 1);
  }
 });

});
</script>

<script>
//   $(document).ready(function(){



//   $.ajax({


//       url:"http://localhost/pwa/myredtv/php/selecttv.php",

//       beforeSend:function(){

//         $("#tvver2").hide("fast");
//         $("#nombrecategoria2").hide("fast");
//         $("#carga").show("fast");


//       },

//       success:function(respuesta){

//         $("#carga").hide("fast");
        $("#nombrecategoria").append("<p>Televisión</p>");
//         $("#tvver").show("fast");

//     var url = "http://localhost/pwa/myredtv/php/selecttv.php";
//    // var url = "../../select.php";
//    $.getJSON(url,function(respuesta){
//     $.each(respuesta,function(i, campo){
//       var id = campo.id;
//       var direccion = campo.direccion;
//       var foto = campo.foto;
//       var titulo = campo.titulo;
//       var data = "<?php echo $_SESSION['permisos']; ?>";




// $("#tvver").append("<a style='text-decoration: none;' href='videotv.html?direccion=" + direccion +"&data=" + data +"'><div id='"+i+"' class='productosmain hvr-grow'><div style='width: 450px;  height: 35px;display: inline-block;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;margin-left:40px;'><p style='  text-transform: capitalize;text-decoration:none;font-family: ubuntuBold;width: 10%;height: 100%;margin:0px;padding:0px;font-size:16px;text-shadow: 2px 2px 5px rgba(0,0,0,0.5);color:white;display:inline;'> "+id+"</p><img src='' alt='' /><img style='margin-left:4px;margin-right:4px;width: 15%;height: 100%;display: inline;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 75%;color:black;height: 100%;text-align: center;margin: 0;display: inline;font-size: .8em;line-height: 1.5;'>" + titulo + "</p></div></div></a>");
//     })

//    });



//       }




//   });




// });







//  $(document).ready(function(){
//    var url = "http://localhost/pwa/myredtv/php/selectcategoriastv.php";
//    // var url = "../../select.php";
//    $.getJSON(url,function(result){
//     $.each(result,function(i, campo){

//       var categoria = campo.categoria;
//       var archivo = campo.archivo;

//       $("#categoriastv").append("<option value=" + categoria + ">" + archivo + "</option>");

//     })

//    });
// });


function f_ordenar(){
   var name=document.form1.ordenar.value;
  $.ajax({


      // url:"http://localhost/pwa/myredtv/php/selecttvordenar.php?ordenar="+name+"&ordenarpor=",

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#tvver2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#tvver").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria2").append("<p>" +name + "</p>");
$("#nombrecategoria2").show("fast");
$("#tvver2").show("fast");
     var url = "http://localhost/pwa/myredtv/php/selecttvordenar.php?ordenar="+name+"&ordenarpor=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var direccion = campo.direccion;
      var foto = campo.foto;
      var titulo = campo.titulo;
      var data = "<?php echo $_SESSION['permisos']; ?>";

      $("#tvver2").append("<a style='text-decoration: none;' href='index.php?videoprincipalvertv=" + direccion +"'><div id='"+id+"' class='productosmain hvr-grow'><div style='width: 250px;  height: 35px;display: inline-block;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;margin-left:40px;'><p style='  text-transform: capitalize;text-decoration:none;font-family: ubuntuBold;width: 10%;height: 100%;margin:0px;padding:0px;font-size:16px;text-shadow: 2px 2px 5px rgba(0,0,0,0.5);color:white;display:inline;'> "+id+"</p><img src='' alt='' /><img style='margin-left:4px;margin-right:4px;width: 15%;height: 100%;display: inline;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 75%;color:black;height: 100%;text-align: center;margin: 0;display: inline;font-size: .8em;line-height: 1.5;'>" + titulo + "</p></div></div></a>");




    })

   });
   }




  });


}


$("#buscador").click(function(){
      var buscar = $("#buscar").val();


      $.ajax({
        url:"http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&tv=",

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#tvver2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#peliculasver").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria3").append("<p>Resultados " +buscar + "</p>");
$("#nombrecategoria3").show("fast");
$("#tvver3").show("fast");
     var url = "http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&tv=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var direccion = campo.direccion;
      var foto = campo.foto;
      var titulo = campo.titulo;

       $("#tvver3").append("<a style='text-decoration: none;' href='index.php?videoprincipalvertv=" + direccion +"'><div id='"+id+"' class='productosmain hvr-grow'><div style='width: 250px;  height: 35px;display: inline-block;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;margin-left:40px;'><p style='  text-transform: capitalize;text-decoration:none;font-family: ubuntuBold;width: 10%;height: 100%;margin:0px;padding:0px;font-size:16px;text-shadow: 2px 2px 5px rgba(0,0,0,0.5);color:white;display:inline;'> "+id+"</p><img src='' alt='' /><img style='margin-left:4px;margin-right:4px;width: 15%;height: 100%;display: inline;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 75%;color:black;height: 100%;text-align: center;margin: 0;display: inline;font-size: .8em;line-height: 1.5;'>" + titulo + "</p></div></div></a>");




    })

   });
   }




 });
 });



</script>
<!-- <tr><td>" + nombre + "</td><td>" + autor + "</td><td>" + precio + "</td><td><a class='btn btn-info' href='edit.html?id=" + id + "&nombre=" + nombre + "&autor=" + autor + "&precio=" + precio + "'><i class='fas fa-edit'></i></a></td></tr>");
      // $("tbody").append("<p>hola</p>"); -->


<!-- // <a href="crearfavoritomilista.php?id_usuario='.$_SESSION['id'].'&id_tv='.$fila["id"].'&usuario='.$fila["usuario"].'&contrasena='.$fila["contrasena"].'&tituloserie='.$fila["tituloserie"].'&titulo='.$fila["titulo"].'&direccion='.$fila["direccion"].'&foto='.$fila["foto"].'&categoria='.$fila["categoria"].'&comentario='.$fila["comentario"].'&valoracion='.$fila["valoracion"].'"><img  style="
//       width: 15%;
//       height: 6%;
//       display: inline;" src="img/agregar.png" alt="AGREGAR A MI LISTA"></a>

// <a href="eliminarfavoritomilista.php?id='.$fila["id"].'">
//       <img  style="
//       width: 15%;
//       height: 6%;
//       display: inline;" src="img/eliminar.png" alt="ELIMINAR DE MI LISTA"></a>
// <img  style="width: 20%;height: 6%;display: inline;" src="img/vistas.png" alt="VISTAS">

//       <p style="width: 15%;
//       height: 6%;
//       display: inline;">'.$fila["valoracion"].'</p>   -->


<?php
  }

  if (isset($_GET['videoprincipalver'])){


$direccion = $_GET['videoprincipalver'];



?>








      <link href="reproductor/video-js.css" rel="stylesheet">
      <script src="reproductor/videojs-ie8.min.js"></script>
        <div id="video_player_box">
          <video id=example-video style="position: fixed; right: 0; bottom: 0; min-width:100%; min-height:100%;width:100%; height:auto; background-size:cover;" class="video-js vjs-default-skin video1" controls autoplay>
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

<?php
  }
  if (isset($_GET['videoprincipalveryoutube'])){




$direccion = $_GET['videoprincipalveryoutube'];


?>





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
        <did class="fondo" style="position: fixed; right: 0; bottom: 0; min-width:100%; min-height:100%;width:100%; height:auto; background-size:cover; z-index: 100;"></did>





        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="player" style="position: fixed; right: 0; bottom: 0; min-width:100%; min-height:100%;width:100%; height:auto; background-size:cover;"></div>
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



<?php
  }
  if (isset($_GET['videoserie'])){
     include('php/conexion.php');
 $registros3=mysqli_query($conexion,"select * from categoriasseries order by categoria asc");
?>

      <link href="reproductor/video-js.css" rel="stylesheet">
      <script src="reproductor/videojs-ie8.min.js"></script>
<script src="reproductor/jquery.min.js"></script>
      <link href="reproductor/video-js2.css" rel="stylesheet">
      <script src="reproductor/video.js"></script>
      <script src="reproductor/videojs-flash.js"></script>
      <script src="reproductor/videojs-contrib-hls.js"></script>
    </head>
    <body>
       <?php
          include 'php/menuprincipalver.php';
        ?>
        <div class="container">
          <h6 class="d-flex justify-content-center">
            Series
          </h6>





<header>




      <div class="ed-container">
         <div class="ed-item s-100 m-100 l-86">


<br /><br />

<div class="container">
    <div class="ed-item s-100 m-50 l-35">
   <form name="form1">
<select onChange="f_ordenar()" class="form-control" name="ordenar" id="categoriasseries">
  <option>Ordenar por...</option><?php
    while ($fila3=mysqli_fetch_array($registros3)){

    ?>

            <option value=<?php echo utf8_encode($fila3['categoria']); ?>><?php echo utf8_encode($fila3['archivo']); ?></option>
            <?php
    }
     ?>

</select>
</form></p>
</div>
</div>

<br />
<div  style="float:right; margin-bottom:30px">
<form class="form2">
<fieldset class="fieldset1">
<input class="input" type="search" id="buscar" placeholder="Buscar..."/>
<button class="btn btn-primary btn-sm" type="button" id="buscador">
<i style="color:black; position: relative; right: 0px" class="fas fa-search"></i>
</button>
</fieldset>
</form>
</div>

<!-- ////socializo////////////////////////////////////////////////////// -->

<did  id="nombrecategoria" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
            <did  id="nombrecategoria2" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
            <did  id="nombrecategoria3" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>

            <div id="video_player_box"></div>

<!-- <div id="seriesver"></div> -->
<div style="clear:both"></div>
<center><img id="carga" style="display:none; margin-top:50px" src="imagenes/cargando.gif"> </center>
<div  style="display:none;" id="seriesver"></div>
<div  style="display:none;" id="seriesver2"></div>
<div  style="display:none;" id="seriesver3"></div>









  </div>
<!-- reproductor -->

  <div class="ed-item l-14">
  </div>
</div>


<script>
  $(document).ready(function(){

  var tituloserie = decodeURI(getUrlVal()["tituloserie"]);

  $.ajax({


      url:"http://localhost/pwa/myredtv/php/selectseriesespecifica.php?tituloserie=" + tituloserie,

      beforeSend:function(){

        $("#seriesver2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");


      },

      success:function(respuesta){

        $("#carga").hide("fast");
        $("#nombrecategoria").append("<p>"+tituloserie+"</p>");
        $("#seriesver").show("fast");

    var url = "http://localhost/pwa/myredtv/php/selectseriesespecifica.php?tituloserie=" + tituloserie;
   // var url = "../../select.php";
   $.getJSON(url,function(respuesta){
    $.each(respuesta,function(i, campo){
      var id = campo.id;
      var direccion = campo.direccion;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#seriesver").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?videoprincipalver=" + direccion +"'><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + titulo + "</p></a></div></div>");



    })

   });



      }




  });




});







//  $(document).ready(function(){
//    var url = "http://localhost/pwa/myredtv/php/selectcategoriasseries.php";
//    // var url = "../../select.php";
//    $.getJSON(url,function(result){
//     $.each(result,function(i, campo){

//       var categoria = campo.categoria;
//       var archivo = campo.archivo;

//       $("#categoriasseries").append("<option value=" + categoria + ">" + archivo + "</option>");

//     })

//    });
// });


function f_ordenar(){
   var name=document.form1.ordenar.value;
  $.ajax({


      // url:"http://localhost/pwa/myredtv/php/selectseriesordenar.php?ordenar="+name,

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#seriesver2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#seriesver").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria2").append("<p>" +name + "</p>");
$("#nombrecategoria2").show("fast");
$("#seriesver2").show("fast");
     var url = "http://localhost/pwa/myredtv/php/selectseriesordenar.php?ordenar="+name+"&ordenarpor=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var tituloserie = campo.tituloserie;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#seriesver2").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?tituloserie=" + tituloserie +"&videoserie='><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + tituloserie + "</p></a></div></div>");




    })

   });
   }




  });


}


$("#buscador").click(function(){
      var buscar = $("#buscar").val();


      $.ajax({
        url:"http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&series=",

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#seriesver2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#seriesver").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria3").append("<p>Resultados " +buscar + "</p>");
$("#nombrecategoria3").show("fast");
$("#seriesver3").show("fast");
     var url = "http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&series=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var tituloserie = campo.tituloserie;
      var direccion = campo.direccion;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#seriesver3").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?tituloserie=" + tituloserie +"&videoserie='><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + tituloserie + "</p></a></div></div>");




    })

   });
   }




 });
 });



</script>
<?php
  }
  if (isset($_GET['videoserieyoutube'])){
 // include('php/conexion.php');
 // $registros3=mysqli_query($conexion,"select * from categoriasseries order by categoria asc");


?>


    </head>
    <body>
       <?php
          include 'php/menuprincipalver.php';
        ?>
        <div class="container">
          <h6 class="d-flex justify-content-center">
            Series Youtube
          </h6>





<header>




      <div class="ed-container">
         <div class="ed-item s-100 m-100 l-86">


<br /><br />

<div class="container">
    <div class="ed-item s-100 m-50 l-35">
   <form name="form1">
<select onChange="f_ordenar()" class="form-control" name="ordenar" id="categoriasseriesyoutube">
  <option>Ordenar por...</option><?php
    while ($fila3=mysqli_fetch_array($registros3)){

    ?>

            <option value=<?php echo utf8_encode($fila3['categoria']); ?>><?php echo utf8_encode($fila3['archivo']); ?></option>
            <?php
    }
     ?>


</select>
</form></p>
</div>
</div>

<br />
<div  style="float:right; margin-bottom:30px">
<form class="form2">
<fieldset class="fieldset1">
<input class="input" type="search" id="buscar" placeholder="Buscar..."/>
<button class="btn btn-primary btn-sm" type="button" id="buscador">
<i style="color:black; position: relative; right: 0px" class="fas fa-search"></i>
</button>
</fieldset>
</form>
</div>

<!-- ////socializo////////////////////////////////////////////////////// -->

<did  id="nombrecategoria" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
            <did  id="nombrecategoria2" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>
            <did  id="nombrecategoria3" style='
            display:block;
            width: 100%;text-transform: capitalize;
            text-decoration:none;
            font-family: ubuntuBold;
            margin:0px;
            padding:0px;
            font-size:36px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
            color:gold;
            display:inline;'
            ></did>

<!-- <div id="seriesyoutubever"></div> -->
<div style="clear:both"></div>
<center><img id="carga" style="display:none; margin-top:50px" src="imagenes/cargando.gif"> </center>
<div  style="display:none;" id="seriesyoutubever"></div>
<div  style="display:none;" id="seriesyoutubever2"></div>
<div  style="display:none;" id="seriesyoutubever3"></div>









  </div>
<!-- reproductor -->

  <div class="ed-item l-14">
  </div>
</div>


<script>
  $(document).ready(function(){
var tituloserie = decodeURI(getUrlVal()["tituloserie"]);


  $.ajax({


      url:"http://localhost/pwa/myredtv/php/selectseriesyoutubeespecifica.php?tituloserie=" +tituloserie,

      beforeSend:function(){

        $("#seriesyoutubever2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");


      },

      success:function(respuesta){

        $("#carga").hide("fast");
        $("#nombrecategoria").append("<p>"+tituloserie+"</p>");
        $("#seriesyoutubever").show("fast");

    var url = "http://localhost/pwa/myredtv/php/selectseriesyoutubeespecifica.php?tituloserie=" +tituloserie;
   // var url = "../../select.php";
   $.getJSON(url,function(respuesta){
    $.each(respuesta,function(i, campo){
       var id = campo.id;
      var direccion = campo.direccion;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#seriesyoutubever").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?videoprincipalveryoutube=" + direccion +"'><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + titulo + "</p></a></div></div>");



    })

   });



      }




  });




});







 $(document).ready(function(){
   var url = "http://localhost/pwa/myredtv/php/selectcategoriasseries.php";
   // var url = "../../select.php";
   $.getJSON(url,function(result){
    $.each(result,function(i, campo){

      var categoria = campo.categoria;
      var archivo = campo.archivo;

      $("#categoriasseriesyoutube").append("<option value=" + categoria + ">" + archivo + "</option>");

    })

   });
});


function f_ordenar(){
   var name=document.form1.ordenar.value;
  $.ajax({


      // url:"http://localhost/pwa/myredtv/php/selectseriesyoutubeordenar.php?ordenar="+name,

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#seriesyoutubever2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#seriesyoutubever").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria2").append("<p>" +name + "</p>");
$("#nombrecategoria2").show("fast");
$("#seriesyoutubever2").show("fast");
     var url = "http://localhost/pwa/myredtv/php/selectseriesyoutubeordenar.php?ordenar="+name+"&ordenarpor=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var tituloserie = campo.tituloserie;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#seriesyoutubever2").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?tituloserie=" + tituloserie +"&videoserieyoutube='><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + tituloserie + "</p></a></div></div>");




    })

   });
   }




  });


}


$("#buscador").click(function(){
      var buscar = $("#buscar").val();


      $.ajax({
        url:"http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&seriesyoutube=",

      beforeSend:function(){

        $("#load_data").hide("fast");
        $("#load_data_message").hide("fast");
        $("#nombrecategoria").hide("fast");
        $("#seriesyoutubever2").hide("fast");
        $("#nombrecategoria2").hide("fast");
        $("#carga").show("fast");
        $("p").remove();
        $("div.productosmain").remove();


      },

      success:function(respuesta){

  // location.href="principalver.html";

  // $("#seriesyoutubever").hide("fast");
  // $("#nombrecategoria").hide("fast");
  $("#carga").hide("fast");

$("#nombrecategoria3").append("<p>Resultados " +buscar + "</p>");
$("#nombrecategoria3").show("fast");
$("#seriesyoutubever3").show("fast");
     var url = "http://localhost/pwa/myredtv/php/buscarpelicula.php?consulta="+buscar+"&seriesyoutube=";

   $.getJSON(url,function(result){
    $.each(result,function(i, campo){
      var id = campo.id;
      var tituloserie = campo.tituloserie;
      var direccion = campo.direccion;
      var foto = campo.foto;
      var titulo = campo.titulo;

      $("#seriesyoutubever3").append("<div id='i' class='productosmain hvr-buzz-out'><div style='width: 165px;height: 330px;display: flexbox;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;'><a style='text-decoration: none;' href='index.php?tituloserie=" + tituloserie +"&videoserieyoutube='><img src='' alt='' /><img style='width: 100%;height: 70%;display: block;' src='" + foto + "' alt=''/><p style='overflow: auto;width: 100%;color:black;height: 24%;text-align: center;margin: 0;line-height: 1.5;'>" + tituloserie + "</p></a></div></div>");




    })

   });
   }




 });
 });


</script>

<?php
  }
  if (isset($_GET['videoprincipalvertv'])){


$direccion = $_GET['videoprincipalvertv'];




?>





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



<?php
}

  }

?>


<script>

  function vista_index(){

 location.href="index.php?vista_index=vista_index";

  }

   function principalver(){

 location.href="index.php?principalver=principalver";



  }

     function principalveryoutube(){


 location.href="index.php?principalveryoutube=principalveryoutube";

  }

     function principalverseries(){

 location.href="index.php?principalverseries=principalverseries";


  }

     function principalverseriesyoutube(){

 location.href="index.php?principalverseriesyoutube=principalverseriesyoutube";


  }

     function principalvertv(){

 location.href="index.php?principalvertv=principalvertv";


  }
     function principalverbuscar(){


 location.href="index.php?principalverbuscar=principalverbuscar";

  }
function cerrar_secion(){

$.ajax({
          type: "POST",
          url: "http://localhost/pwa/myredtv/php/unlog.php",


          beforeSend:function(){

        $("#alertlogin").hide("fast");
        $("#carga").show("fast");


      },

          success: function(data){
            if(data == "exito"){

               location.href="index.php";
            }else{


          location.href="index.php?cerrar_sesion=error";

            }
          }
        })












  }

</script>


  <script src="./script.js"></script>

<script>
// Inhabilitar el botón derecho
var DADrccolor = "#F1F1F1";
var DADrcimage = "https://lh5.googleusercontent.com/-70ZyK7Gt4XE/VI8sxCvJGII/AAAAAAAAGd0/RZA9e6iSJBM/s300/superheroe.png";
</script>
<script type="text/javascript" src="http://yourjavascript.com/2122535051/antirightclick.js"></script>
<!-- <script>
window.onload=function(){
var pos=window.name || 0;
window.scrollTo(0,pos);
}
window.onunload=function(){
window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);
}
</script> -->
</body>
</html>
