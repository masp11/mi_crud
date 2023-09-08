<?php

if (!empty($_POST["btnregistrar"])){
    //echo "boton presionadp" ;
   if(!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["cantidad"]) and !empty($_POST["descripcion"])){
      $id=$_POST["id"] ;
      $nombre=$_POST["nombre"];
      $precio=$_POST["precio"];
      $cantidad=$_POST["cantidad"];
      $descripcion=$_POST["descripcion"];
 
      $sql=$conexion->query("update producto set nombre='$nombre',precio='$precio',cantidad='$cantidad',descripcion='$descripcion' where id_producto=$id "); 
       if ($sql==true) {
          header("Location:index.php") ;
       }else{
        echo "<div class='alert alert-danger'>Error al modificar el producto</div>";
       }

      }else{
    //echo "campos vacios";
       echo "<div class='alert alert-warning'>campos estan vacios</div>";
   }
}

?>