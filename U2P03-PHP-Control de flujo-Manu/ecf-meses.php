<html>
<head></head>
<body>
<form action="ecf-meses.php" method="post">
Introduce A: <input type="text" name="A">
<input type="submit" name="enviar">
</form>
<?php
if(isset($_POST["enviar"])){
    $a=$_POST['A'];
    $r=0;
    $c=1;
while ($c<=strlen($a)){
    
    
        for ($r;$r<=(strlen($a)-$c);$r++){
            Echo $a[$r];      
        }
        echo"<p></p>";
        $c++;
        $r=0;
        
}
   
    
   
    
}else
    echo"<p1>Introduce los datos necesarios</p1>";
    
    ?>
</body>
</html>