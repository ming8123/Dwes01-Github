<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Pruebas con la base de datos de animales</h2>
<?php
include 'animal.php';
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
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
	
    <?php
    $resultado = $conexion -> query("SELECT chip,nombre,especie as raza ,imagen FROM animal ORDER BY nombre");
    while ($animal = $resultado->fetch_object('Animal')) {
        // echo $animal."<br/>"; // primer intento más sencillo
        echo "<tr bgcolor='lightgreen'>";
        echo "<td>".$animal->getChip()."</td>\n";
        echo "<td>".$animal->getNombre()."</td>\n";
        echo "<td>".$animal->getRaza()."</td>\n";
        echo "<td><img src='img/".$animal->getImagen()."' width='100' height='100'></td>\n";
        
        echo "</tr>";
    }
}
?>

	</table>
	
		<?php 

echo "<h3>Desconectando...</h3>";
	mysqli_close($conexion);
?>

</body>
</html>
