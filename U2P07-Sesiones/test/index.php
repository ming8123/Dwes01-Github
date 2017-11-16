<?php


if (!isset($_SESSION['index'])){
    header('location:registro.php');
}else{
    echo "<p>Bienvenido a la pagina de ".session_name()."</p>";
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