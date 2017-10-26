<html>
<head></head>
<body>

	<form action="ecf-recorte.php" method="post">
	Introduce un numero: <input type="text" name="a">
	Enviar: <input type="submit" name="enviar" value="Enviar">
	</form>

</body>
</html>

<?php

    if (isset($_POST['enviar'])){
        
        $a=$_POST['a'];      
        
        if(is_string($a)){
            
            for($i=0;$i<=(strlen($a)-1);$i++){              
                
                
                for($j=0;$j<=strlen($a)-1-$i;$j++){
                    
                    echo "$a[$j]";
                }                       
                
                echo "<br />";
                
            }
        }      
        else {
            
            echo "<p>No es una cadena</p>";
        }
        
    }
    else {
        
        echo "<p>Introduce los datos</p>";
    }

?>