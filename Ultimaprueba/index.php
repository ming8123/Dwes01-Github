<?php

$nombre1="ming";
$nombre2="manu";
$a=2;
$b=3;


if ($a<$b):
echo $a."es menor que ".$b;
elseif($a=$b):
echo "son igules";
else:
echo $b." es menor que ".$a;
endif;
for ($x=0; $x<=5; $x++)
{
    echo "<h5>Esta pagina es impotante </h5>";
}
echo "<h1>Funciona esta pagina de maravilla, ATENTO me presento llego el momento somos $nombre1 $nombre2</h1>";
echo "<h2>la edad de manu es $a</h2>";
echo "<h2>la edad de manu es $b</h2>";
$a +=$b;
echo "<h2>la edad de manu es $a</h2>";
$a *=$b;
echo "<h2>la edad de manu es $a</h2>";
$a .=$b;
echo "<h2>la edad de manu es $a</h2>";

echo "<h2>la edad de manu es ".($a /=$b)."</h2>";
define("alumno", "manu");

echo "<p> el alumno es " .alumno. "</p>";


$z=" ";
if (isset($z)){
    echo "la variable \$z tiene valor $z ";
       }  
       
    $cadena="esto es una cadena de prueba";
    echo "<p>el texto '$cadena' contiene  ".strlen($cadena)."caracteres</p>";
    
 echo "<h1>la primera forma</h1>";   
 $alumno=array("manu","ming","t.sergio");   
 echo"el tamaño del array es : ".sizeof($alumno)." .";
 for ($x=0;$x<sizeof($alumno);$x++){
     echo "<p>alumno $x es ".$alumno[$x].".</p>" ;
     echo " ";
     
 }
 
 echo "<h1> la segunda forma </h1>";
 $alumno1=array(0=>"manu",2=>"ming",1=>"sergio");

 for ($x=0;$x<sizeof($alumno1);$x++){
     echo "<p>alumno $x es ".$alumno1[$x].".</p>" ;
     echo " ";
     
 }
 
echo "<h1> la tercera forma </h1> ";
 $alumno3[0]="ming";
 $alumno3[2]="manu";
 $alumno3[5]="sergio";
 
 $c=count($alumno3);
 for ($y=0;$y<$c;$y++){
     if (isset($alumno3[$y])){
         echo "<p>alumno $y es ".$alumno3[$y].".</p>" ;
         echo " ";
     }  else{
         $c++;
     }
 }

var_dump($alumno3); 
print_r($alumno3);
 
 
?>