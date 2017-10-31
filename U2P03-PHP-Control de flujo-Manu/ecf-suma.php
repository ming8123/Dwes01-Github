<html>
<head></head>
<body>

	<form action="ecf-suma.php" method="post">
	Introduce un numero: <input type="number" name="a">
	Enviar: <input type="submit" name="enviar" value="Enviar">
	</form>

</body>
</html>

<?php

    if(isset($_POST['enviar'])){
        
        $a=$_POST['a'];
        $suma=0;
        
        for($i=0;$i<=$a;$i++){
            
            $suma+=$i;
        }
        
        echo "<p>La suma de los tres primeros numeros es: $suma</p>";
        
    }
    else {
        
        echo "<p>Introduce los datos</p>";
    }

    

?>
