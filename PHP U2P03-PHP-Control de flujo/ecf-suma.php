<html>
<head></head>
<body>
<form action="ecf-suma.php" method="post">
Introduce A: <input type="number" name="A">
<input type="submit" name="Esnviar">
</form>
<?php
$a=$_POST['A'];
$result=0;
for ($i=1;$i<=$a;$i++){
    
    $result +=$i;
    
}

echo"<p> $result </p>";


?>
</body>
</html>