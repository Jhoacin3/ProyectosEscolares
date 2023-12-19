<html>
    <head>
        <title>Pagina de inicio</title>
        <div class="text-light bg-dark">
          <br>
          <h2 class="text-center">Tabla de productos</h2>
          <br>
        </div>
        <meta charset="utf-8">
        <meta name="viewport" content="while=device-width,initial-scale=1,shrink-to-fit=no"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
    </head>
    <body>
      <style>
        body{
          background:url(fondo2.jpg);
          background-size:cover;
          background-repeat: no-repeat;
          color:brown;
        }

      </style>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        
        <div class="contenedor">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="inicio.html">Inicio</a>
            </li>

            <li class="nav-item">
              <a class="nav-link disabled" href="#">CRUD</a>
            </li>
          </ul>
            <div class="row">
                <div class="col">
                    
                </div>
                <!-- para una tabla se necesita table... se neceita
                tr table row
                tres etiquetas se colocó... table: diseño de bootstrap
                table-atripped:negro y blanco diseño...
                 table-hover: para cuando pase cursor se sombrea chido
                -->
                <div class="col-5">
                 
                <br>
                    <table class= "table table-atripped
                    table-bordered table-hover">
                    
                    <tr>
                        <td>
                            Id del producto
                        </td>
                        <td>
                            Descripción
                        </td>
                        <td>
                            Marca
                        </td>
                        <td>
                            Cantidad
                        </td>
                        <td>
                            Precio
                        </td>
                    </tr>

                <?php
                $conexion=
                mysqli_connect("localhost","root","", "practica1")
                or die("Error al conectar a la BD");
                $consulta="SELECT * FROM productos";
                $resultado=mysqli_query($conexion,$consulta);
                while($row=mysqli_fetch_row($resultado))
                {
                    echo "<tr><td>",$row[0],"</td><td>";
                    echo $row [1],"</td><td>";
                    echo $row [2],"</td><td>";
                    echo $row [3],"</td><td>";
                    echo $row [4],"</td></tr>";
                }
                
                ?>
                    </table>
                    <div class="mb-3">
                      <center>
                    <a class="btn btn-success" href="productos.html" role="button">Agregar</a>
                    <a class="btn btn-primary" href="UpdateProductos.html" role="button">Modificar</a>
                    <a class="btn btn-danger" href="Deleteproductos.html" role="button">Eliminar</a>
                     </center>
                    </div>

              </div>

                <div class="col">
                    
                </div>

            </div>
        </div>
        
        
    </body>

    <footer>

    </footer> <!--parte de abajo como comentarios -->
</html>