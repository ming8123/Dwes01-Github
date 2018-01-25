<!DOCTYPE html>
<html><head><meta charset='UTF-8'/></head>
<body>
<?php
$rutaArchivo = "files/nuevo1.txt";
/*readfile("files/modulos.txt");*/

/*$lineasArchivo = file($rutaArchivo);
print_r($lineasArchivo);


$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
echo fread($archivo,filesize($rutaArchivo));
fclose($archivo);
$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
while(!feof($archivo)) {
    $c = fgetc($archivo);
    if (($c == "\n") or ($c == "\r\n")) echo "<br/>";
    else echo $c;
}
fclose($archivo);*/
$archivo = fopen($rutaArchivo, "c") or die("Imposible  abrir el archivo para escritura");
fwrite($archivo,"ming\n");
fwrite($archivo,"nuevo de desarrollo\n");
fclose($archivo);
$archivo = fopen($rutaArchivo, "r") or die("Imposible abrir el archivo");
while(!feof($archivo)) {
    $c = fgetc($archivo);
    if (($c == "\n") or ($c == "\r\n")) echo "<br/>";
    else echo $c;
}
fclose($archivo);
?>
</body></html>