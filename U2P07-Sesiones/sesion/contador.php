<?php
if(session_status() == PHP_SESSION_NONE) {
    session_name("idSession01");
	session_start();
}

if (isset($_REQUEST["reiniciarContador"])) {
	unset($_SESSION["contador"]); 
}

if (isset($_REQUEST["cerrarSesion"])) {
	$_SESSION=array();
	session_unset();
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000,
				$params["path"], $params["domain"],
				$params["secure"], $params["httponly"]
				);
	}
	session_destroy();
}

if(session_status() == PHP_SESSION_NONE)
	$mensaje = "No hay sesión iniciada";
else {
   if(!empty($_POST['A']))
      $_SESSION['contador']=$_POST['A'];         
      if (isset ( $_SESSION ['contador'] ))
          $_SESSION ['contador'] += 1;
          else
              $_SESSION ['contador'] = 1;
              $mensaje = "Has visitado esta página " . $_SESSION ['contador'] . " veces en esta sesión.";
}
?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>
<h3><?php echo $mensaje;?></h3>
<p><a href="<?php echo $_SERVER['PHP_SELF']?>">Recargar la página</a></p>
<p><a href="<?php echo $_SERVER['PHP_SELF']."?reiniciarContador=true"?>">Reiniciar contador</a></p>
<p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>">Cerrar sesión</a></p>
<form action="contador.php" method="post">
Introduce el numero de contador: <input type="number" name="A">

</form>
</body></html>
