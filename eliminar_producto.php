<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"] ;

    $sql=$conexion->query("delete from producto where id_producto=$id") ;
    if ($sql==true) {
       echo "<div class='alert alert-success' >Persona eliminada correctamente</div>";
    }else{
        echo "<div  class='alert alert-danger' >Error al eliminar</div>";
}
}
?> 