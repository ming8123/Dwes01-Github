<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2 align="center">Catalogo01</h2>
<?php

include 'Obra.php';
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
$vobra=false;
$conexion = new mysqli($servidor,$usuario,$clave, "catalogo01");
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}else{
    session_name("ming");
    session_start();
    
    if(!isset($_REQUEST['idAutor'])){
?>
<table bgcolor='lightgreen' border="5" align="center">
<tr>


<th>Nombre_obra <br>
<a href='mostrarCatalogo01.php?OA=true'>'>'</a>
<a href='mostrarCatalogo01.php?OZ=true'>'<'</a></th>
<th>ID_autor</th>
<th>Nombre_Autor</th>

</tr>
<?php 

    $resultado = $conexion -> query("SELECT ID,Nombre_obra,ID_autor FROM obra");
    
    if(isset($_REQUEST['OA'])){
        mysqli_free_result($resultado);
        $resultado = $conexion -> query("SELECT ID,Nombre_obra,ID_autor FROM obra order by nombre_obra ASC");
    }
    if(isset($_REQUEST['OZ'])){
        mysqli_free_result($resultado);
        $resultado = $conexion -> query("SELECT ID,Nombre_obra,ID_autor FROM obra order by nombre_obra DESC");
        
    }
    
    while ($obra = $resultado->fetch_object('Obra')) {        
        echo "<tr  >";
      
        echo "<td><a href='mostrarObra.php?idObra=".$obra->getID()."'>".$obra->getNombre_obra()."</a></td>\n";  

        echo "<td>".$obra->getID_autor()."</td>\n";
        
        $id1=$obra->getID_autor();
        $consulta="SELECT * FROM autor where ID="."'$id1'"; 
    
        $autor = $conexion -> query($consulta);
        if($autor->num_rows === 0) echo "<p>No se encontró el autor</p>";
        else {
            $fila=$autor->fetch_assoc();
            echo "<td><a href='mostrarCatalogo01.php?idAutor=".$fila['ID']."'>".$fila['Nombre']."</a></td>";
        }
        mysqli_free_result($autor);
        
        echo "</tr>";      
    }   

?>
</table>
<?php 
if(isset($_POST['enviar'])){
    $resultado = $conexion -> query("SELECT ID,Nombre_obra,ID_autor,Imagen FROM obra");
    
    
    while ($obra = $resultado->fetch_object('Obra')) {
        
        if($obra->getID()===$_POST['nombre'] ){
            $vobra=true;
            ?>
            <table bgcolor='lightgreen' border="5" align="center">
            <tr>
            <td>Nombre_obra</td>
            <td>ID_autor</td>
            <td>Nombre_Autor</td>
            <td>Imagen</td>
            </tr>
            <?php 
            echo "<tr  >";
            echo "<td>".$obra->getNombre_obra()."</td>\n";
            echo "<td>".$obra->getID_autor()."</td>\n";       
            $id1=$obra->getID_autor();
            $consulta="SELECT Nombre FROM autor where ID="."'$id1'";
            $autor = $conexion -> query($consulta);
            if($autor->num_rows === 0) echo "<p>No se encontró el autor</p>";
            else {
                $fila=$autor->fetch_assoc();
                echo "<td>".$fila['Nombre']."</td>";
                echo "<td><img src='img/".$obra->getImagen()."'></td>\n";
                echo "img/".$obra->getImagen();
                echo "</tr>";   
            }          
           
            mysqli_free_result($autor);
        }
        }
        
        if($vobra==FALSE){      
            echo "<div align='center'><h1>No Encontrado</h1></div>";
        }
             


}

mysqli_close($conexion);
?>
<br>
<div align="center">

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	Nombre de la Obra:<input type="text" name="nombre">
    <input type="submit" name="enviar">  
</form> 
</p>

<?php 
}else{
    $resultado = $conexion -> query("SELECT ID,Nombre_obra,ID_autor,Imagen FROM obra");
    
    
    while ($obra = $resultado->fetch_object('Obra')) {
        
        if($obra->getID_autor()===$_REQUEST['idAutor'] ){
           
            ?>
            <table bgcolor='lightgreen' border="5" align="center">
            <tr>
            <td>Nombre_obra</td>
            <td>ID_autor</td>
            <td>Nombre_Autor</td>
            <td>Imagen</td>
            </tr>
            <?php 
            echo "<tr  >";
            echo "<td>".$obra->getNombre_obra()."</td>\n";
            echo "<td>".$obra->getID_autor()."</td>\n";       
            $id1=$obra->getID_autor();
            $consulta="SELECT Nombre FROM autor where ID="."'$id1'";
            $autor = $conexion -> query($consulta);
            if($autor->num_rows === 0) echo "<p>No se encontró el autor</p>";
            else {
                $fila=$autor->fetch_assoc();
                echo "<td>".$fila['Nombre']."</td>";
                echo "<td><img src='img/".$obra->getImagen()."'></td>\n";
                echo "</tr>";   
            }          
           
            mysqli_free_result($autor);
        }
        }
         
    ?>
    <div align="center"><a href='mostrarCatalogo01.php'><button>volver</button>
    </a></div>
  <?php 
}
}
?>

 
</div>
    
   
</body>
</html>