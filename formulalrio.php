<?php
 include("libs/utils.php"); ?>



<html>
<head>
<title>Formulario</title>
</head>
<body bgcolor="#EFF7CF">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

   <h4>
   Solicitud de tarjetas de solidaridad
   </h4>

<div class= "right-align">
<a href="editar.php" class="btnNuevo btn-waves-effect waves-light btn"><i class="material-icons">Añadir</i></a>
</div>

<h4><Font color = "black"> Solicitudes Recibidas</FONT></h4>
<div class= "right-align">


</div>
 <table>
   <thead>
     <tr>
         <th>Foto</th>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Localizacion del usuario</th>
  

       
     </tr>
   </thead> 
   <tbody class = "striped">

   <?php

    $datos = conexion::consulta_array('select*from itlaa');

    foreach($datos as $data){
     
     echo "
          <tr>
           <td><img style='height:100px;'src= 'fotos/{$data['id']}.jpg'></td>
           <td>{$data['cedula']}</td>
           <td>{$data['nombre']}</td>
           <td>{$data['apellido']}</td>
           <td>
                 <a href='buscar.php'><i class='btn'>Localizacion</i></a>
                 
           </td>
          </tr>
     
     
     ";
  }

    

   ?>
   </tbody >
</table>
   </tbody >
</table>


<?php
include("pie.php");
?>
<script>
$(document).ready(function(){
   
    $('.btnNuevo').floatingActionButton();
  });

</script>
