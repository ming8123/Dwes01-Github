<?php
session_start();
$mensajeError="";

if(!isset($_SESSION['usuario'])){/*si no hay valor redirecciona*/
    header("location:login.php");
}else{
   $conexion = new mysqli("localhost","alumno","alumno","catalogo01");
    $resultado = $conexion->query("select * from usuario");
    if($resultado->num_rows === 0) header("Location:logout.php");   
    $nombre="";
    $admin="";
    while($fila=$resultado->fetch_assoc()) {
        if ($fila["login"]==$_SESSION["usuario"]){
            $nombre=$_SESSION["usuario"];
            $admin=$fila['admin'];
        }
    }
    
    
    if ($admin==1){
        $admin="administrador";
    }else{
        $admin="estandar";
    }
    if (empty($nombre)){
        header("location:login.php");
    }else{
       echo "<h1>Bienvenido ".$nombre." y es un usuario $admin</h1>";
        ?>
        <p><a href="logout.php">Cerrar sesión por logout.php</a></p>
        <p><a href="baja.php">Dar de baja</a></p>
    
        <?php 
    } 
   
    
?>
<html>
<head>
</head>
<body>

 

</body>
</html>
<?php 
}

?>