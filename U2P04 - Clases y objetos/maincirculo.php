<html>
<head></head>
<body>
<form action="maincirculo.php" method="post">
Introduce radio: <input type="number" name="A">

<input type="submit" name="Enviar">
</form>
<?php
include 'circulo.php';
if(isset($_POST["Enviar"])){
$a=$_POST['A'];

$c1=new circulo($a);
echo $c1;


}else
    echo"<p1>Introduce los datos necesarios</p1>";



?>
</body>
</html>