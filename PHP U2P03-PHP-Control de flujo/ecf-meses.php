<html>
<head></head>
<body>
<form action="ecf-meses.php" method="post">
Introduce el mes: <input type="text" name="A">
bisiesto<input type="radio" name="bisiesto" value="bisiesto">
no bisiesto<input type="radio"  name="bisiesto"  value="nobisiesto">
<input type="submit" name="Enviar">
</form>
<?php

if(!isset($_POST["Enviar"]) && !isset($_POST['A']) &&(!isset($bisiesto)) && (!isset($_POST["enviar"]))){
    echo"<h1>Rellena los datos anteriores</h1>";        
}else{    
  $bisiesto=$_POST["bisiesto"];

  $meses=$_POST["A"];
  
  if(($meses==1)||($meses==3)||($meses==5)||($meses==7)||($meses==8)||($meses==10)||($meses==12)||(strcmp($meses, "enero")==0)||(strcmp($meses, "marzo")==0)||(strcmp($meses, "mayo")==0)||(strcmp($meses, "julio")==0)||(strcmp($meses, "agosto")==0)||(strcmp($meses, "octubre")==0)||(strcmp($meses, "diciembre")==0)){
    
      echo "<h1>El mes ".$meses." tiene 31 dia</h1>";
  }else if(($meses==4)||($meses==6)||($meses==9)||($meses==11)||(strcmp($meses, "abril")==0)||(strcmp($meses, "junio")==0)||(strcmp($meses, "septiempre")==0)||(strcmp($meses, "noviempre")==0)){
      
      echo "<h1>El mes ".$meses." tiene 30 dia</h1>";
  }elseif(($meses==2) || (strcmp($meses, "febrero")==0)){
      if (strcasecmp($bisiesto, "bisiesto")==0){
          echo "El mes ".$meses." tiene 29 dia</h1>";
       }else 
           echo "El mes ".$meses." tiene 28 dia</h1>";
      
  }else {
      echo"alert:error en datos introducido";
  }
  
    
    
    
    
    
    
    
}
    
    ?>
    <a href="index.php">volver</a>
</body>
</html>