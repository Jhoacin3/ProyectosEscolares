<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="css/bootstrap.min.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />

    <title>Conectar BD</title>
    <h2>Mi Primer proyecto Web</h2>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="inicio.html">Menu Principal</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="consultaProductos.php">Productos</a>
          <a class="nav-item nav-link disabled" href="#"></a>


        </div>
      </div>
    </nav>
  </head>

  <body>
  <?php
  $IdProducto=$_POST['imputIdProductos'];
  $Marca=$_POST['selectMarca'];
  $Descripcion=$_POST['inputDescripcion'];
  $Cantidad=$_POST['imputCantidad'];
  $Precio=$_POST['imputprecio'];
  echo "Id  Productos: ".$IdProducto."<br>";
  echo"Descripcion: " .$Descripcion."<br>";
  echo "Marca: ".$Marca."<br>";
  echo "Cantidad: ".$Cantidad."<br>";
  echo "Precio: ".$Precio."<br>";
  
  $conexion=
  mysqli_connect("localhost","root","", "practica1")
  or die("Error al conectar a la BD");
  $consulta="INSERT INTO productos VALUE
  ('$IdProducto','$Descripcion','$Marca','$Cantidad','$Precio')";
  $resultado=mysqli_query($conexion,$consulta);
  echo $consulta;
  if ($resultado==1)
  {
    echo "<h3>LOS DATOS DEL PRODUCTO SE HAN ALMACENADO CON EXITO</h3>";
  }
  ?>

  </body>
</html>
