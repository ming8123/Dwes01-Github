
<table border="1">
<ul>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";

$conexion = new mysqli($servidor,$usuario,$clave,"examen1718-1ev-sigurros");
$conexion->query("SET NAMES 'UTF8'");
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
else {  
    $resultado1 = $conexion->query("SELECT * tipo FROM discos");
    ?>
            <table bgcolor='lightgreen' border="5" align="left">
            <tr>
            <td>Titulo       
            </td>
            <td>Discografica</td>
            <td>ano            
            </td>            
            <td>formato</td>
            <td>imagen</td>
            </tr>
            <?php 
            
            if($resultado1->num_rows === 0) echo "<p>No se encontró el nombre pulsa voler a index.php</p>";
            while($fila=$resultado1->fetch_assoc()) {                
                echo "<tr  >";
                echo "<td>".$fila['nombre']."</td>\n";
                echo "<td>".$fila['discografica']."</td>\n";
                echo "<td>".$fila['year']."</td>\n";
                echo "<td>".$fila['soporte']."</td>\n";         
                echo "</tr>";
            }
    
}
?>