<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("location:admin-login.php");
}else{
    ?>
    
    <html>
    <head></head>
    <body>
    <ul>
    <?php   
    
    $servidor = "localhost";
    $usuario = "alumno";
    $clave = "alumno";
  
    $conexion = new mysqli($servidor,$usuario,$clave,"examen1718-1ev-sigurros");
    $conexion->query("SET NAMES 'UTF8'");
    
    $resultado = $conexion->query("SELECT *  FROM temas");
    if($resultado->num_rows === 0){
        echo"Error de tema";
    }
    while($fila=$resultado->fetch_assoc()) {
       
        echo" <li>".$fila['nombre_e']."</li>";    
        ?>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8")?>" method="post">		
		  <input type="submit" name="eliminar" value="eliminar">

        <?php      
        if(isset($_POST['eliminar'])){
            $nombre1=$fila['nombre_e'];
           $resultado1= "DELETE FROM `temas` WHERE nombre_e="."'$nombre1'";          
        }
            
    }   
    
}


?>
</ul>
<p>para dar de baja <a href="admin-login.php">Haz clic aquí </a></p>
</body>
</html>