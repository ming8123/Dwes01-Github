<?php
session_name('idsession01');
session_start ();
if (!isset($_SESSION['name'])){
    header('location:registro.php');
}else if(!isset($_SESSION['test2'])){
    header('location:test2.php');
    
}else{
    if (isset($_POST['enviar'])){
        if ($_POST['pais']=="china"){
            $_SESSION['test3']="correcto";
            header('location:respuesta.php');
        }else{
            $_SESSION['test3']="incorrecto";
            header('location:respuesta.php');
        }
    }
    
    ?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>
<h2>Pregunta 3</h2>
<div>¿cual es la comida preferida de ming?</div>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	china:<input type="radio" value="china" name="pais">
	japon:<input type="radio" value="japon" name="pais">
	espanol:<input type="radio" value="espanol" name="pais">
    <input type="submit" name="enviar">
	</form> 
</body>
</html>
<?php 
}

?>
