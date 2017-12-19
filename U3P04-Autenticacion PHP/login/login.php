<?php
session_start();

if(isset($_SESSION['usuario'])){/*si hay sesion iniciado redirige a index(variable sesion usuario almacena nombre de usuario donde lo ha rellenado)*/
    header("location:index.php");
}else{
    $mensajeError="";
    if(isset($_POST['Enviar'])){
        
        $conexion = new mysqli("localhost","alumno","alumno","catalogo01");
        $resultado = $conexion->query("select * from usuario");
        if($resultado->num_rows === 0) $mensajeError="No hay usuarios en la base de datos";
        else{
            while ($usu = $resultado->fetch_assoc()) {   
            if($_POST['username']===$usu['login']){
                    if($_POST['password']===$usu['password'] ){
                        $_SESSION['usuario']=$usu['login'];
                        header("location:index.php");
                    }               
                
            }else{
                $mensajeError="Error de usuario o datos";
        }
        
        }
        }
    }else{
        echo "Introduce los datos";
    }
    
    
}



?>
<html>
<body>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8")?>" method="post">
		<p>User:</p>
		  <input type="text" name="username"><br>		
		<p>password:</p>
		  <input type="text" name="password"><br>		
		<input type="submit" name="Enviar">
		<p>¿aún no tienes cuenta? <a href="alta.php">Haz clic aquí para crear una</a></p>		
		<?php if (!empty($mensajeError)){
           		   echo "<h3>".$mensajeError."</h3>";
                }?>
		
   </form>
  </body>
</html>