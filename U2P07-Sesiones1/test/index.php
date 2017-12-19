<?php
session_name('idsession01');
session_start ();

if (!isset($_SESSION['name'])){
    header('location:registro.php');
}else{
    echo "<p>Bienvenido a la pagina de ".$_SESSION['name']."</p>";
 echo"<div>Quieres jugar?</div>";   
    
}

?>
<html>
<head><title>Sesiones</title>
<meta charset="UTF-8"/></head>
<body>
  
	<p><a href ="test1.php">Click aqui para jugar</a>
	
</body>
</html>