<html>
<head></head>
<body>

<?php

    $a=1;
    $b=1;
    $acum=0;
    
   while ($a<=1000){
               
        if ($a%3==0){
            echo" $a <br>";
            
        }
        
        if($a%5==0){
            echo "$a<br>";
        }
 
        $a++;
    } 
    $a=0;
    $b=0;
    
    while ($acum<=20){
        $a +=3;
        $b +=5;
        echo "$a <br>";
        echo "$b <br>";
        $acum++;
    }
    
    
?>
<a href="index.php">volver</a>
</body>
</html>