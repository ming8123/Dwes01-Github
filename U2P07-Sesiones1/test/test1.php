<?php
session_name('idsession01');
session_start ();
if (!isset($_SESSION['name'])){
    header('location:registro.php');
}else{
   if (isset($_POST['enviar'])){
       if ($_POST['comida']=="patata"){
           $_SESSION['test1']="correcto";
           header('location:test2.php');
       }else{
           $_SESSION['test1']="incorrecto";
           header('location:test2.php');
           }
   }
}
?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>
<h2>Pregunta 1</h2>
<div>¿De que esta echo la tortilla?</div>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	patata:<input type="radio" value="patata" name="comida">
	carne:<input type="radio" value="carne" name="comida">
	tomate:<input type="radio" value="tomate" name="comida">
    <input type="submit" name="enviar">
	</form> 
</body>
</html>

