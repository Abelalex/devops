<?php


include('libs/utils.php');

$editando =  false;

if($_POST){
    
      foreach($_POST as &$valor){
            $valor = addslashes($valor);

      }

       extract($_POST);
    
$sql = "insert into itlaa (cedula, nombre, apellido)
values('{$cedula}', '{$nombre}', '{$apellido}')";

 $rsid = conexion::execute($sql , true);
  
 
$archivo = $_FILES['foto'];
if ($archivo['error'] == 0){
      move_uploaded_file($archivo['tmp_name'], "fotos/{$rsid}.jpg");
}

header("Location:formulalrio.php");

}else if (isset($_GET['ced'])){

   $sql = "select*from itlaa where id = {$_GET{'ced'}}";

   $objs = conexion:: consulta_array($sql); 
    if(count($objs) > 0){
      $data = $objs;
      $data = $data;
      $_POST = $data;
      $editando = true;
    }
}

?>


<div class="row">
<form enctype="multipart/form-data" class="col s12" method = "post">
<center><?php
$cond = ['placeholder'=>'Escribe tu cedula'];
if($editando){
     $cond ['readonly'] = 'readonly';

}

echo asgInput('cedula','Cedula','',$cond); 
?></center>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<center><?= asgInput('nombre', 'Nombre'); ?></center>
<center><?= asgInput('apellido','Apellido'); ?></center>
<center><?= asgInput('foto', '','',['type'=>'file']); ?></center>
<div class = "center-align">
<button class = "btn" type = "submit">
      Guardar
</button>
</form>
</div>

<?php include("pie.php"); ?>