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
$conexion = new mysqli($servidor,$usuario,$clave, "catalogo01");
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}else{
?>
<table bgcolor='lightgreen' border="5" align="center">
<tr>
<td>Nombre_obra</td>
<td>ID_autor</td>
<td>Nombre_Autor</td>

</tr>
<?php 

    $resultado = $conexion -> query("SELECT ID,Nombre_obra,ID_autor FROM obra");
    
    while ($obra = $resultado->fetch_object('Obra')) {        
        echo "<tr  >";
      
        echo "<td><a href='mostrarObra.php?idObra=".$obra->getID()."'>".$obra->getNombre_obra()."</a></td>\n";  

        echo "<td>".$obra->getID_autor()."</td>\n";
        
        $id1=$obra->getID_autor();
        $consulta="SELECT Nombre FROM autor where ID="."'$id1'"; 
    
        $autor = $conexion -> query($consulta);
        if($autor->num_rows === 0) echo "<p>No se encontró el autor</p>";
        else {
            $fila=$autor->fetch_assoc();
            echo "<td>".$fila['Nombre']."</td>";
        }
        mysqli_free_result($autor);
        
        echo "</tr>";      
    }   
}
?>
</table>
<?php 
mysqli_close($conexion);

?>


</body>
</html>