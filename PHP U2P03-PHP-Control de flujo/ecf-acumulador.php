<html>
<head></head>
<body>

<?php

if(!isset($_POST["Enviar"])){
    
 ?>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8")?>" method="post">
Introduce un numero: <input type="number" name="A">
<?php $a=0?>
<input type="hidden" value="<?php echo $a?>" name="acum" >
<input type="submit" name="Enviar">
</form>
<?php   
        
}elseif($_POST["acum"]<50){
    ?>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"],ENT_QUOTES,"UTF-8")?>" method="post">
Introduce un numero: <input type="number" name="A">
<?php $a =$_POST["acum"]+$_POST["A"]?>
<input type="hidden" value="<?php echo $a?>" name="acum" >
<input type="submit" name="Enviar">
</form>
<?php  
    if($a<50){
   echo "<h1>sigue introduciendo amigo,vas por ".$a."</h1>";
    }else 
        echo "ya esta bien amigo";
} else
    echo"buen trabajo";
    
  
?>

<a href="index.php">volver</a>
</body>
</html>