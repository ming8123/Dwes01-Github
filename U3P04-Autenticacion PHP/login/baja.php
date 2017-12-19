<?php
session_start();
$mensajeError="";

if(isset($_POST['enviar'])){
    if(!isset($_POST['password'])){
        $mensajeError="debes introducir password";
    }else{
        $usuario1="\"".$_SESSION["usuario"]."\"";
        echo"<p> $usuario1</p>";
        $conexion = new mysqli("localhost","alumno_rw","dwes","catalogo01");
        $resultado = $conexion->query("select * from usuario where usuario.login=$usuario1");
        if($resultado->num_rows === 0) $mensajeError="No hay usuarios en la base de datos";
       else{ 
           while ($usu = $resultado->fetch_assoc()) {       
                if($_POST['password']===$usu['password']){                   
                    $conexion->query("DELETE FROM usuario WHERE usuario.login = $usuario1");
                    if(!empty($conexion->error)){
                        $mensajeError=$conexion->error;
                    }else{
                        header("location:logout.php");
                    }
                    
                }
                
                $mensajeError=" password error";
           
            }
        }
        
        
        
       }
        
        
    }




?>
<html>
<body>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8")?>" method="post">
		
		<p>Introduce el password:</p>
		  <input type="password" name="password"><br>		 
		  
		<input type="submit" name="enviar">
	
		<?php if (!empty($mensajeError)){
           		   echo "<h3>".$mensajeError."</h3>";
           		   echo"<p> $usuario1</p>";
                }?>
		
   </form>
  </body>
</html>
