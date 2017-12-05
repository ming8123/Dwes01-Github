<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Pruebas con la base de datos de animales</h2>
<?php
$servidor = "localhost";
$usuario = "alumno_rw";
$clave = "dwes";
echo "<h3>Estableciendo conexión...</h3>";
$conexion = new mysqli($servidor,$usuario,$clave,"animales" );
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
else {
	echo "<p>Información de servidor: $conexion->host_info</p>";
	?>
	
	<table style='border:0'>
	<tr style='background-color:lightblue'>
	<th>Chip</th>
	<th>Nombre</th>
	<th>Especie</th>
	<th>Imagen</th>
	</tr>
        <?php
        $resultado = $conexion -> query("SELECT * FROM animal ORDER BY nombre");
        if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
        while($fila=$resultado->fetch_assoc()) {
        	echo "<tr style='background-color:lightgreen'>";
        	echo "<td>$fila[chip]</td>";
        	echo "<td>$fila[nombre]</td>";
        	echo "<td>$fila[especie]</td>\n";
        	echo "<td><img src='img/$fila[imagen]' width='100' height='100'></td>\n";
        	echo "</tr>";
        }
        
        
       
        $conexion ->query("UPDATE animal SET especie='jabali' WHERE nombre='Babe'");
        echo "<h3 style='color:red'>". $conexion->error ."</h3>";
   
        $conexion ->query ("DROP TABLE animal");
        echo "<h3 style='color:red'>". $conexion->error ."</h3>";
     
     
        echo "<h2>Listado de cuidadores</h2>";
        echo "<h3>Pulsa en cada cuidador para ver los animales de los que se ocupa</h3>";
        
        $resultado = $conexion-> query("SELECT * FROM cuidador");
        if($resultado->num_rows === 0) echo "<p>No hay cuidadores en la base de datos</p>";
        echo "<ul>\n";
        while($fila=$resultado->fetch_assoc()) {
            echo "<li><a href='cuidador.php?idCuidador=$fila[idCuidador]'>$fila[Nombre]</a></li>\n";
            // Ejemplo: <li><a href='cuidador.php?idCuidador=12345'>Alberto</a></li>
        }
        echo "</ul>";
   
      
        ?>
</table>
		<?php 
}
echo "<h3>Desconectando...</h3>";
	mysqli_close($conexion);
?>

</body>
</html>