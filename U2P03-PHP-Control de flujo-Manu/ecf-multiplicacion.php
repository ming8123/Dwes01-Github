<html>
<head></head>
<body>

	<form action="ecf-multiplicacion.php" method="post">
	Introduce un numero: <input type="number" name="a">
	Enviar: <input type="submit" name="enviar" value="Enviar">
	</form>

</body>
</html>

<?php

    if (isset($_POST['enviar'])){
        
        $a=$_POST['a'];
        
        echo "<p>La tabla del $a es:</p>";
        
        for($i=1;$i<=10;$i++){
            
            echo "<p>$a * $i = ".($a*$i)."</p>";
                       
        }
        
    }
    else {
        
        echo "<p>Introduce los datos</p>";
    }

?>