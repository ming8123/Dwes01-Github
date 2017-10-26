
<html>
<head></head>
<body>
<form action="ecf-multiplicacion.php" method="post">
Introduce A: <input type="number" name="A">
<input type="submit" name="Enviar">
</form>
<?php
if(isset($_POST["Enviar"])){
    $a=$_POST['A'];
    $resultado=1;
    for ($b=1;$b<=10;$b++){
        
        echo "<h$b>$b * ".$a." = ".$b*$a."</h$b>";
        
    }
    
   
    
}else
    echo"<p1>Introduce los datos necesarios</p1>";
    
    ?>
    <a href="index.php">volver</a>
</body>
</html>