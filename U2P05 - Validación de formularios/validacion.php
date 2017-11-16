<html>
<head></head>
<meta charset="UTF-8">
<link href="../style.css" rel="stylesheet">

<body>
<?php 
include'funcion.php';
$nombre=null;
$errornombre=null;
$errorapellido=null;
$apellido=null;
$bool=true;
$pass=null;
$errorpass=null;
$min=false;
$may=false;
$sim=false;


if ((!isset($_POST['enviar']))){
    echo "<p id='error'>Debes rellanar los datos para darte de alta </p>";
}
else{
    
    if(ctype_alpha($_POST["nombre"])){
        $nombre=strtoupper($_POST["nombre"]);
    }else {
       $errornombre="**Dato no valido";
        $bool=false;
    }
    
    if(ctype_alpha($_POST["apellido1"])){
        $apellido=strtoupper($_POST["apellido1"]);
        
    }else {
        $errorapellido="**Datos no valido";
        $bool=false;
        
    }
    if(strlen($_POST["password"])>=8){       
        for($i=0;$i<=strlen($_POST["password"]);$i++){
            if (ctype_lower($i)){                
                $min=true;
            } 
            if (ctype_upper($i)){
                $may=true;
            }
            if (ctype_punct($i)){
                $sim=true;
            }
            }
            
            if(($may=true)&&($min=true)&&($sim=true)){
                $pass=$_POST["password"];
            }else {
                $errorpass="**Datos no valido";
                $bool=false;
            }
    }else {
     
        $bool=false;
        $errorpass="**Datos no valido";
    }
    
?>

<?php
echo "<p id='resultado'>";

    if($bool){
        echo "<p>El nombre de alumno es: ".$nombre."</p>";
        echo "<p>El primer apellido de alumno es: ".$apellido."</p>";
        echo "<p>la contraeña es validas";
    }  
}
echo"</p>";
?>
<form action="validacion.php" method="post">
<fieldset>
<legend>validacion.php</legend>
<p>Introduce nombre: <input type="text" name="nombre" value="<?php  echo $nombre?>"><?php echo "<span id='error'>$errornombre</span>"?><p>
<p>Introduce primer apellidos: <input type="text" name="apellido1" value="<?php  echo $apellido?>"><?php echo "<span id='error'>$errorapellido</span>"?><p>
<p>Introduce password: <input type="password" name="password" value="<?php  echo $pass?>" ><?php echo "<span id='error'>$errorpass</span>"?><p>
<p>Introduce correo: <input type="text" name="correo"><p>
<p>Introduce fecha de nacimiento: <input type="date" name="fecha"><p>
<p>Introduce direccion: <input type="text" name="direccion"><p>
<p>Introduce ciclo formativo: <input type="text" name="ciclo"><p>
<p>Introduce telefono: <input type="text" name="telefono"></p>
<input type="submit" name="enviar">
</fieldset>
</form>
</body>
</html>
