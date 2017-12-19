<?php
session_start();

    $mensajeError="";
    if(isset($_POST['Enviar'])){
        
        $conexion = new mysqli("localhost","alumno","alumno","examen1718-1ev-sigurros");  
       
         
            if($_POST['username']==="admin"){
                    if($_POST['password']==="secreto" ){
                       echo"Bienvenido  a la session de administrador";
                       $_SESSION['usuario']=$_POST['username'];
                    } else{
                        $mensajeError="Error de usuario o datos";
                    }               
            }else{
                $mensajeError="Error de usuario o datos";
        }
        
        }        
    else{
        echo "Introduce los datos";
    }
    
    




?>
<html>
        
<body>
<h1><img src='img/encabezado/encabezado.jpg'>mingliang zhu</h1>;  
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8")?>" method="post">
		<p>User:</p>
		  <input type="text" name="username"><br>		
		<p>password:</p>
		  <input type="text" name="password"><br>		
		<input type="submit" name="Enviar">
		<p>para dar de baja <a href="admin-baja.php">Haz clic aquí </a></p>
		<p>para cerrar sesion y ir a index <a href="index.php">Haz clic aquí </a></p>
		<?php if (!empty($mensajeError)){
           		   echo "<h3>".$mensajeError."</h3>";
                }?>
		
   </form>
  </body>
</html>