
<html>
<head></head>
<body>
<form action="ecf-cuadrado.php" method="post">
Introduce A: <input type="number" name="A">
<input type="submit" name="Enviar">
</form>
<table border="2">

<?php
if(isset($_POST["Enviar"])){
    $a=$_POST['A'];    
    $b=1;
    $cont=1;
    
    for ($b=1;($b<=$a);$b++){   
        echo"<tr>";
        for($c=1;$c<=$a;$c++){           
            echo"<td style='padding:3px'>$cont</td>" ;             
            $cont++;
         
        }
    
    echo "</tr>";
    }
}else
    echo"<p1>Introduce los datos necesarios</p1>";
    
    ?>
    
 </table>
    <a href="index.php">volver</a>
</body>
</html>