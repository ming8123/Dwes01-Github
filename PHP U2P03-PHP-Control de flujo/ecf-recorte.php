
<html>
<head></head>
<body>
<form action="ecf-recorte.php" method="post">
Introduce A: <input type="text" name="A">
<input type="submit" name="Enviar">
</form>
<?php
if(isset($_POST["Enviar"])){
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
    <a href="index.php">volver</a>
</body>
</html>