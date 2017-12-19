<html>
<head>
	<title>Exanmen</title>
	<meta charset="UTF-8"/>
</head>
<body>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";
?>
<table border="1">
<ul>
<?php
 
$conexion = new mysqli($servidor,$usuario,$clave,"examen1718-1ev-sigurros");
$conexion->query("SET NAMES 'UTF8'");
if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
else {    
    
    $resultado = $conexion->query("SELECT DISTINCT tipo FROM discos");
    if($resultado->num_rows === 0){
        echo"Error de categoria";
    }   
    while($fila=$resultado->fetch_assoc()) {        

     echo" <li><a href='index.php?idTipo=".$fila['tipo']."'>".$fila['tipo']."</a></li>";
     
    }   
    ?>
            <table bgcolor='lightgreen' border="5" align="left">
            <tr>
            <td>Titulo
            <a href='index.php?OA=true'>'>'</a>
            <a href='index.php?OA=false'>'<'</a></th>
            </td>
            <td>Discografica</td>
            <td>ano
            <a href='index.php?OF=true'>'>'</a>
            <a href='index.php?OF=false'>'<'</a></th>
            </td>            
            <td>formato</td>
            <td>imagen</td>
            </tr>
            <?php 

  if(isset($_POST['nombre'])){   
      $nombre=$_POST['nombre'];
      

      $resultado = $conexion->query("SELECT * FROM discos where nombre="."'$nombre'");
      if($resultado->num_rows === 0) echo "<p>No se encontró el nombre pulsa voler a index.php</p>";
      while($fila=$resultado->fetch_assoc()) {
          
          echo "<tr  >";
          echo "<td>".$fila['nombre']."</td>\n";
          echo "<td>".$fila['discografica']."</td>\n";
          echo "<td>".$fila['year']."</td>\n";
          echo "<td>".$fila['soporte']."</td>\n";       
          echo "</tr>";  
      }
 
  }else{
    if(!isset($_REQUEST['idTipo'])){       
        
        
        $resultado = $conexion->query("SELECT * FROM discos where tipo='Álbumes'");
        if(isset($_REQUEST['OA'])){            
            mysqli_free_result($resultado);
            if($_REQUEST['OA']=="true"){
            $resultado = $conexion -> query("SELECT * FROM discos order by nombre ASC");
            }
            if($_REQUEST['OA']=="false"){
             $resultado = $conexion -> query("SELECT * FROM discos order by nombre DESC");
            }
        }
        if(isset($_REQUEST['OF'])){
            mysqli_free_result($resultado);
            if($_REQUEST['OF']=="true"){
                $resultado = $conexion -> query("SELECT * FROM discos  order by year ASC");
            }if($_REQUEST['OF']=="false"){
                $resultado = $conexion -> query("SELECT * FROM discos order by year DESC");
            }
        }
        
        if($resultado->num_rows === 0) echo"no hay ningu disco en esta categoria";   
            while($fila=$resultado->fetch_assoc()) {
            echo "<tr  >";
            echo "<td>".$fila['nombre']."</td>\n";
            echo "<td>".$fila['discografica']."</td>\n";
            echo "<td>".$fila['year']."</td>\n";
            echo "<td>".$fila['soporte']."</td>\n";
            $img= $fila['imagen'].".jpg";
            echo "<td><img src='img/discografia/".$img."'></td>\n";
            echo "</tr>";  
           
        }  
        
    }else{
        $id1=$_REQUEST['idTipo'];        
        $resultado = $conexion -> query("SELECT * FROM discos where tipo="."'$id1'");
        if(isset($_REQUEST['OA'])){
            mysqli_free_result($resultado);
            if($_REQUEST['OA']=="true"){
                $resultado = $conexion -> query("SELECT * FROM discos where tipo="."'$id1' order by nombre ASC");
            }
            if($_REQUEST['OA']=="false"){
                $resultado = $conexion -> query("SELECT * FROM discos where tipo="."'$id1' order by nombre DESC");
            }
        }
        if(isset($_REQUEST['OF'])){
            mysqli_free_result($resultado);
            if($_REQUEST['OF']=="true"){
                $resultado = $conexion -> query("SELECT * FROM discos  order by year ASC");
            }if($_REQUEST['OF']=="false"){
                $resultado = $conexion -> query("SELECT * FROM discos order by year DESC");
            }
        }
        
        
        while ($fila=$resultado->fetch_assoc()) {          
         
       
            echo "<tr  >";
            echo "<td>".$fila['nombre']."</td>\n";
            echo "<td>".$fila['discografica']."</td>\n";       
            echo "<td>".$fila['year']."</td>\n";    
            echo "<td>".$fila['soporte']."</td>\n";     
            $img= $fila['imagen'].".jpg";    
            echo "<td><img src='img/discografia/".$img."'></td>\n";          
            echo "</tr>";  
    }
    }
     }    
    
}

	mysqli_close($conexion);
	
?>
</ul>
</table>
<h1><img src='img/encabezado/encabezado.jpg'>mingliang zhu</h1>;  
<div align="center">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	    Nombre del disco:<input type="text" name="nombre">
	    <input type="submit" name="enviar">
	    </form> 
	        
    <div >
    <a href='index.php'><button>volver al index.php</button>
    </a></div>

</div>
</body>
</html>