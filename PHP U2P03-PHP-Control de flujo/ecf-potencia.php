<html>
<head></head>
<body>
<form action="ecf-potencia.php" method="post">
Introduce A: <input type="number" name="A">
Introduce B:<input type="number" name="B">
<input type="submit" name="Enviar">

</form>
<?php
if(isset($_POST["Enviar"])){
$a=$_POST['A'];
$b=$_POST['B'];
$result=1;
for ($i=1;$i<=$b;$i++){
    
    $result =$result*$a;
    
}

echo"<p> $result </p>";
}else 
    echo"<p1>Introduce los datos necesarios</p1>";

?>
<a href="index.php">volver</a>
</body>
</html>