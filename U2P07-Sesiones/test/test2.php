<?php
session_name('idsession01');
session_start ();
if (!isset($_SESSION['name'])){
    header('location:registro.php');
}else if(!isset($_SESSION['test1'])){
    header('location:test1.php');
    
}else{
    if (isset($_POST['enviar'])){
        if ($_POST['bocadillo']=="caramar"){
           
            $_SESSION['test2']="correct";
            header('location:test3.php');
        }else{
            $_SESSION['test2']="incorrecto";
            header('location:test3.php');
        }
    }
    
    ?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>
<h2>Pregunta 2</h2>
<div>¿De que esta hecho bocadillo de caramar?</div>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	caramar:<input type="radio" value="caramar" name="bocadillo">
	carne:<input type="radio" value="carne" name="bocadillo">
	verdura:<input type="radio" name="verdura" name="bocadillo">
    <input type="submit" name="enviar">
	</form> 

</body>
</html>
<?php 
}

?>