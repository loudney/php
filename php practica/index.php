<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    echo " <h3> PRACTICA DE PROGRAMACION WEB INFOCAL </H3>";

?>


<form method ="POST" action="modulo.php" >
<fieldset>
    <legend>modulo de dos numeros</legend>
    <label >Primer numero </label>
    <input type="text" name="num1"><br>
    <label >Segundo numero </label>
    <input type="text" name="num2"><br>
    <input type="submit" name ="enviar" value="calcular">
</fieldset>
</form>

<form method ="GET" action="nombre.php" >
<fieldset>
    <legend>Datos de Usuario</legend>
    <label >Nombre Completo</label>
    <input type="text" name="num11"><br>
    <label >edad </label>
    <input type="text" name="num22"><br>
    <label >Carnet </label>
    <input type="text" name="num33"><br>
    <label >Ciudad </label>
    <input type="text" name="num44"><br>

    <input type="submit" name ="enviar" value="Mostrar">
</fieldset>
</form>

<br><br><br><br>

<?php

    function permanente(){

        static $x=0;
        $num=9;
        echo "<br> el valor de x es de ".$x;
        $x=$x+$num;
        $x++;
       
        
    } 
    permanente();
    permanente();
    permanente();
    permanente();
    permanente();
    permanente();

    echo " <h3> crear una funcion que eleve al cuadrado cada que se llamada  </H3>";

    function cuadrado(){

       static $num2=0;
        $num33=pow($num2,2);
        echo "<br> el valor de ".$num2." es de ".$num33;
        $num2++;
       
        
    } 
    cuadrado();
    cuadrado();
    cuadrado();
    cuadrado();
    cuadrado();
    cuadrado();

?>
</body>
</html>