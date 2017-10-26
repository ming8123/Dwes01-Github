<html>
<head></head>
<body>

	<form action="ecf-meses.php" method="post">
	Introduce un mes: <input type="number" name="a">
	Bisiesto <input type="radio" name="bisiesto">
	Enviar: <input type="submit" name="enviar" value="Enviar">
	</form>

</body>
</html>

<?php

    if (isset($_POST['enviar'])){
        
        $a=$_POST['a'];
        $bisiesto=$_POST['bisiesto'];
        $meses= array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
        $acumulador=0;
        
        if(is_string($a) || is_numeric($a)){
            
            if (is_string($a)){
                
                for($i=0;$i<=strlen($meses);$i++){
                    
                    if(strcasecmp($meses[$i], $a)){
                        
                        $acumulador=$i;
                    }
                }
                
            }
            
            if (isset($acumulador)){
                
                $acumulador=$a;
            }
                
            switch ($acumulador){
                
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    
                    echo "<p>Este mes tiene 31 dias</p>";
                    break;
                    
                case 2:
                case 4:
                case 6:
                case 9:
                case 11:
                    
                    echo "<p>Este mes tiene 30 dias>/p>";
                    break;
                    
                case 2:
                    
                    if (isset($_POST['bisiesto'])){
                        
                        echo "<p>Este mes tiene 28 días</p>";
                    }
                    else {
                        
                        echo "<p>Este mes tiene 29 días</p>";
                    }
                    
                    break;
            }
            
        }
        
        else {
            
            "<p>Introduce un mes en numero o en letra</p>";
        }
        
    }
    else {
        
        echo "<p>Introduce los datos</p>";
    }


?>