<html>
<head></head>
<body>

	<form action="ecf-potencia.php" method="post">
	Introduce un numero A: <input type="number" name="a">
	Introduce un numero B: <input type="number" name="b">
	Enviar: <input type="submit" name="enviar" value="Enviar">
	</form>

</body>
</html>

<?php

    if(isset($_POST['enviar'])){
        
        $a=$_POST['a'];
        $b=$_POST['b'];
        $multi=1;
        
        for($i=0;$i<=($b-1);$i++){
            
            $multi*=$a;
        }
        
        echo "<p>$a elevado a $b es: $multi";
        
    }
    else {
        echo "<p>Introduce los datos</p>";
    }
?>