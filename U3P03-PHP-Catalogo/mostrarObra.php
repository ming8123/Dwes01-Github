<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
	
</head>
<body>
<h2 align="left">Buscar Obra</h2>
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
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	Nombre de la Obra:<input type="text" name="nombre">
    <input type="submit" name="enviar">
	</form> 
<?php     

if(isset($_REQUEST['idObra'])){
    $resultado = $conexion -> query("SELECT ID,Nombre_obra,ID_autor,Imagen FROM obra");    
    
    while ($obra = $resultado->fetch_object('Obra')) {
        
        if($obra->getID()=== $_REQUEST['idObra']){
            $vobra=true;
            ?>
            <table bgcolor='lightgreen' border="5" align="left">
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
        if($vobra){
            echo "<h1>Encontrado</h1>";
        }else{
        echo "<h1>No Encontrado</h1>";
        }
?>
</table>
<?php 

}


    if(isset($_POST['enviar'])){
      $resultado = $conexion -> query("SELECT ID,Nombre_obra,ID_autor,Imagen FROM obra");    
 
  
    while ($obra = $resultado->fetch_object('Obra')) { 
     
         if($obra->getID()===$_POST['nombre'] ){
            $vobra=true;
            ?>
            <table bgcolor='lightgreen' border="5" align="left">
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
        if($vobra){
            echo "<h1>Encontrado</h1>";
        }else{
        echo "<h1>No Encontrado</h1>";
        }


}
}
?>
</table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a href='mostrarCatalogo01.php'><button>volver</button></a>


</body>
</html>