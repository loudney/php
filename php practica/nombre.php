
<?php
function nombres(){

$num11=$_GET["num11"];
$num22=$_GET["num22"];
$num33=$_GET["num33"];
$num44=$_GET["num44"];

echo "<h3>".$num11." ".$num22." ".$num33." ".$num44; 
}nombres();

?>

<form action="index.php" method="GET">
<input type="submit" name ="enviar" value="volver">
</form>