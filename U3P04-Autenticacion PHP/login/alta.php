
<?php
session_start();
$mensajeError="";
if(isset($_POST['enviar'])){
    if(empty($_POST['username1'])){
        $mensajeError="el nombre del usuario esta vacio";
    }else{
        if(empty($_POST['password1'])){
            $mensajeError="debes introducir una contrasena";
                       
        }else{
            
            $conexion = new mysqli("localhost","alumno_rw","dwes","catalogo01");
            $resultado = $conexion->query("select * from usuario");
            
            while ($usu = $resultado->fetch_assoc()) {
                if($_POST['username1']===$usu['login']){                    
                $mensajeError="Ya existe el usuario";
                }else{
                    $conexion->query("INSERT INTO `usuario` (`login`, `password`, `nombre`, `admin`)
                    VALUES ('".$_POST["username1"]."', '".$_POST["password1"]."', '".$_POST["nombre"]."', '".$_POST["admin"]."');");
                    if(!empty($conexion->error)){
                        $mensajeError=$conexion->error;
                    }else{
                        header("location: login.php");
                    }
                }
           }
    
    
    
}
    }
}
?>
<html>
<body>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8")?>" method="post">
		<p>Nombre de User:</p>
		  <input type="text" name="username1"><br>		
		<p>Introduce el password:</p>
		  <input type="password" name="password1"><br>
		  <p>introduce el nombre:</p>
		  	  <input type="text" name="nombre"><br>		
		  <p>introdece 1 si es administrador si no introdece 0:</p>	  
		  	  <input type="integer" name="admin"><br>
		  
		<input type="submit" name="enviar">
	<p><a href="login.php">¿Ya tienes cuenta? Haz clic aquí para iniciar sesión</a></p>
		<?php if (!empty($mensajeError)){
           		   echo "<h3>".$mensajeError."</h3>";
                }?>
		
   </form>
  </body>
</html>
