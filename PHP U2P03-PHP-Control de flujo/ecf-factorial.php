<html>
<head></head>
<body>
<form action="ecf-factorial.php" method="post">
Introduce A: <input type="number" name="A">
<input type="submit" name="Enviar">
</form>
<?php
if(isset($_POST["Enviar"])){
  $a=$_POST['A'];
  $resultado=1;  
    for ($a;$a>=1;$a--){
        
       $resultado *=$a;
        
    }
    
    echo "<p1>El factorial del numero A es $resultado</p1>";
    
}else
    echo"<p1>Introduce los datos necesarios</p1>";
    
?>
</body>
</html>