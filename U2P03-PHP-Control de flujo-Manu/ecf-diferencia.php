<html>
<head></head>
<body>

	<form action="ecf-diferencia.php" method="post">
	Introduce un numero A: <input type="number" name="a">
	Introduce un numero B: <input type="number" name="b"> 
	Enviar: <input type="submit" name="enviar" value="Enviar">
	</form>

</body>
</html>

<?php
    
    if (isset($_POST['enviar'])){
        
        $a=$_POST['a'];
        $b=$_POST['b'];
        $aux=0;
        $contador=0;
        
        if ($a>$b){
            $aux=$b;
            $b=$a;
            $a=$aux;
        }
        
        $contador=$a+1;
        
        while ($contador<$b){
            
            echo "<p>*</p>";
            $contador++;
   
        }
        
        $contador=$a+1;
        
        for($i=$contador;$i<$b;$i++){
            
            echo "<p>#</p>";
            $contador++;
        }
        
    }
    else {
        
        echo "<p>Introduce los datos</p>";
    }

?>