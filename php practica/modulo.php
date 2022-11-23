<?php 
    
    function modulo(){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];

    $res=$num1%$num2;

    echo "<h3> el modulo de los numeros ".$num1." y ".$num2." es ".$res; 

    } modulo ();


   
    
?>