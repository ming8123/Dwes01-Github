<?php
$mensaje="";
if(session_status() == PHP_SESSION_NONE) {
    session_name("ming");
    session_start();
  
}
if (isset($_POST['Enviar'])){
    if(empty($_POST['A'])){
        $mensaje="falta nombre";
   
    }else{
     $_SESSION['v1']=$_POST['A'];
   
    }
    
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
?>

<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>  
<?php 
if (isset($_SESSION['v1'])){
    echo "<p>Bienvenido usuario ".$_SESSION['v1']."<p>"; 
    ?>
     <p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>">Cerrar sesión</a></p>
     <?php  
}else{

?>
 
   <form action="saludo.php" method="post">
    Introduce tu nombre: <input type="text" name="A">
    <input type="submit" name="Enviar">
    <p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>">Cerrar sesión</a></p>
    
    </form>
<?php 
}
if (!empty($mensaje)){
 
    echo"<p>$mensaje</p>";
}

?>

</body></html>
