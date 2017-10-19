<?php include 'aparte.php';

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

 echo "<h1>Array alumno3</h1>";
 
echo "<p>".var_dump($alumno3)."</p>"; 
echo "<p>";
print_r($alumno3);
"</p>";
echo "<h2>Ordenado de Z-A</h2>";
rsort($alumno3);
foreach ($alumno3 as $actual){
    echo "<li>".$actual."</li>";
}
 
"<p>Primera forma</p>"; 

$moviles= array("zing"=>"123456789","Manu"=>"603237125");
arsort($moviles);
"<p>Segunda forma</p>"; 

$moviles2["Ming"]=12345678;
$moviles2["Manu"]=603237125;

echo "<h1>Array moviles</h1>";

echo "<p>";
print_r($moviles);
echo "</p>";
ksort($moviles2);
echo "<p>".var_dump($moviles2)."</p>";

foreach ($moviles as $persona => $movil){
    echo "<li>El numero de $persona es $movil</li>";
}

$m=122222;
echo "<p>la variable m es ".gettype($m)."</p>";
echo"<h4>agente de usuario utilizado: ".$_SERVER['HTTP_USER_AGENT']."</h4>";

$manu="tontos";
$ming=" por dos";
$sergio=" feos";
$juan="o no ";
function tontos($manu,$ming){
    $resultado="$manu $ming";
    return  $resultado;
}

echo tontos($manu, $ming);




function tontos1($manu1,$ming1,$v=FALSE){
    global $sergio;
    $resultado=$manu1.' '.$ming1.$sergio.' '.$GLOBALS["juan"];
  
    if ($v==true){       
        return $resultado;
    }
}



echo'<p>'.tontos1($manu1="machote", $ming1="que pasa",$v=true).'</p>';

echo "<p>Estamos a ". date('d-m-y'). " y la son las ". date('h:i'). "</p>";

?>