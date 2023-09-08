<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    <title>Crud en php</title> 
       

<body>
    <script>
        function eliminar(){
           let respuesta=confirm("Estas seguro que deseas eliminar?") ;
           return respuesta 
        }
    </script>

    <?php
     include"modelo/conexion.php";
     include "controlador/eliminar_producto.php";

    ?>
    <div class="container-fluid  row">
        <form class="col-4 p-3"  method="POST">
            <h3 class="text-center  text-secondary">Registro de productos</h3>
            <?php
             // include"modelo/conexion.php";

              include"controlador/registro_producto.php" ;

              ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="cantidad">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion">
            </div>
            
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar Producto</button>
        </form>
        

        <div class="col-8 p-4">
            <table class="table">
                 <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">DESCRIPCION</th>
                        
                        <th scope="col"></th>
                    </tr>
                </thead> 
                <tbody class="table-group-divider">
                    <?php
                    include"modelo/conexion.php";
                    $sql=$conexion->query("select * from producto") ;
                    while($datos=$sql->fetch_object()){ ?>
                      <tr>                         
                        <td><?php print($datos->id_producto);?></td>
                        <td><?php print($datos->nombre)?> </td>
                        <td><?php print($datos->precio);?> </td>
                        <td><?=$datos->cantidad ;?> </td>
                         <td><?=$datos->descripcion?> </td>
                        
                        <td>
                            <a href="modificar_producto.php?id=<?php print($datos->id_producto);?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return eliminar()" href="index.php?id=<?=$datos->id_producto ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i> </a>
                        </td>
                    </tr>
                   <?php }
                    ?>
                  
                   
                 </tbody>
            </table>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>