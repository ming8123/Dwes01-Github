<html>
<head></head>
<body>

	<form action="ecf-factorial.php" method="post">
	Introduce un numero: <input type="number" name="a">
	Enviar: <input type="submit" name="enviar" value="Enviar">
	</form>

</body>
</html>

<?php

    if (isset($_POST['enviar'])){
        
        $a=$_POST['a'];
        $fact=1;
        
        for($i=$a;$i>=1;$i--){
            
            $fact*=$i;
        }
        
        echo "<p>El factorial de $a es $fact</p>";
        
    }
    else {
        
        echo "<p>Introduce los datos</p>";
    }

?>