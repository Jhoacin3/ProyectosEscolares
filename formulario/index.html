<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripe J</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <head>
        
    </head>
<div class="container">
    <div class="form-calcular">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">

        <h4>Operción</h4>
        <h5>Ingrese la demanda por años:</h5>
        <input class="controls" type="text" name="D"  placeholder="Escriba la demanda por años">
        <h5>Ingrese el costo a ordenar:</h5>
        <input class="controls" type="text" name="S" placeholder="Escriba el costo a ordenar">
        <h5>Ingrese el costo anual de mantener:</h5>
        <input class="controls" type="text" name="H" placeholder="Escriba el costo anual de mantener">
        <h5>Ingrese los días de trabajo al año:</h5>
        <input class="controls" type="text" name="L" placeholder="Escriba los días de trabajo al año ">
        <input class="bottons" type="submit" value="Calcular" name="submit">
        </form>

    </div>
    <div class="form-calcular1">
    <h4>Resultado</h4>
        <h5>La cantidad optima de unidad por pedido es de:</h5>
        <input class="controls" type="text" name="resultado1" id="resultado1" placeholder="El resultado es">
        <h5>El numero esperado de ordenes es de:</h5>
        <input class="controls" type="text" name="resultado2" id="resultado2" placeholder="El resultado es">
        <h5>Los dias de trabajo son:</h5>
        <input class="controls" type="text" name="resultado3" id="resultado3" placeholder="El resultado es">
        <h5>El punto de orden es de:</h5>
        <input class="controls" type="text" name="resultado4" id="resultado4" placeholder="El resultado es">
        <h5>El costo de ordenar es de:</h5>
        <input class="controls" type="text" name="resultado5" id="resultado5" placeholder="El resultado es">
        <h5>El costo de mantener es de:</h5>
        <input class="controls" type="text" name="resultado6" id="resultado6" placeholder="El resultado es">
        <h5>El costo total es de:</h5>
        <input class="controls" type="text" name="resultado7" id="resultado7" placeholder="El resultado es">

        <input class="bottons" type="submit" value="Calcular" name="submit">
    <?php
    if(isset($_POST['submit']))
    {
        $D=$_POST['D'];
        $S=$_POST['S'];
        $H=$_POST['H'];
        $L=$_POST['L'];
        // calcular la cantidad óptima de pédido
        
        $Q=sqrt((2*$D*$S)/$H);
        echo '<script>document.getElementById("resultado1").value="' . $Q . '";</script>';
       // echo $Q,'<br/>';

        // ya con el EOQ calculado se obtendra la cantidad de veces que se debe ordenar por año.
        $N=($D/$Q);
        echo '<script>document.getElementById("resultado2").value="' . $N . '";</script>';
       // echo $N,'<br/>';
        
        // dividir los dias de trabajo por año por la cantidad de veces que se hace un pedidopara obtener el tiempo entre una orden y otra.
        $l=($L/$N);
        echo '<script>document.getElementById("resultado3").value="' . $l . '";</script>';
       // echo $l,'<br/>';
        
        // R= Punto de reorden
        $R=($D/$L*$l);
        echo '<script>document.getElementById("resultado4").value="' . $R . '";</script>';
       // echo $R,'<br/>';
        
        // Calcular los datos de ordenar, mantener y el costo total reemplazando los datos con base en la formula
        
        $CO=($D/$Q*$S);
        echo '<script>document.getElementById("resultado5").value="' . $CO . '";</script>';
        //echo $CO,'<br/>';
        
        // CM= Costo de Mantener
        $CM=($Q/2*$H);
        echo '<script>document.getElementById("resultado6").value="' . $CM . '";</script>';
       // echo $CM,'<br/>';
        
        //CT= Costo total
        $CT=($D*$S+($D/$Q)*$S+($Q/2)*$H);
        echo '<script>document.getElementById("resultado7").value="' . $CT . '";</script>';
        //echo $CT,'<br/>';
        
    }
    ?>
        
    </div>
</div> 
</body>
</html>