<?php

echo "

<a style='text-decoration: none;' href='index.php?videoprincipalvertv=".$fila['direccion']."'><div id='".$fila['id']."' class='productosmain hvr-grow'><div style='width: 250px;  height: 35px;display: inline-block;background: teal;margin: .5%;float: left;border: 1px solid #ccc;padding: 5px;margin-left:40px;'><p style='  text-transform: capitalize;text-decoration:none;font-family: ubuntuBold;width: 10%;height: 100%;margin:0px;padding:0px;font-size:16px;text-shadow: 2px 2px 5px rgba(0,0,0,0.5);color:white;display:inline;'> ".$fila['id']."</p><img src='' alt='' /><img style='margin-left:4px;margin-right:4px;width: 15%;height: 100%;display: inline;' src='".$fila['foto']."' alt=''/><p style='overflow: auto;width: 75%;color:black;height: 100%;text-align: center;margin: 0;display: inline;font-size: .8em;line-height: 1.5;'>".$fila['titulo']."</p></div></div></a>

";



?>
