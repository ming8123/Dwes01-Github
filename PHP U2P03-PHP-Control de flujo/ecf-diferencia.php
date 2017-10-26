<html>
<head></head>
<body>
<form action="ecf-diferencia.php" method="post">
Introduce A: <input type="number" name="A">
Introduce B:<input type="number" name="B">
<input type="submit" name="enviar">
</form>
<?php
if(isset($_POST["enviar"])){
$aux=0;
$a=$_POST['A'];
$b=$_POST['B'];
$c=0;
if($b>$a){    
    $aux=$b;
    $b=$a;
    $a=$aux;        
}
$c=$b;
if(($a>=0 && $a<=10)&&($b>=0 && $b<=10)){
while (($a!=$b)){    
    echo "<h8> * </h8>";
    $b++;
}
$b=$c;
for($b;$b<$a;$b++){
    echo "<h9> # </h9>";    
}
}
}else 
    echo "<p1>introduce los datos necesarios</p1>";
?>
<a href="index.php">volver</a>
</body>
</html>