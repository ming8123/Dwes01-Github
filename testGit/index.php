<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Primer ejemplo de PHP</title>
</head>
<body>
<?php
echo "<h1>Mi primera web escrita en PHP(ming y manu)</h1>\n";
echo "<p>PHP es un preprocesador de hipertexto <em>(Hypertext Preprocessor)</em></p>\n";
?>
<p>Permite insertar c�digo de programaci�n intercalado en el lenguaje HTML sin que el usuario final tenga constancia de que el c�digo que est� viendo en pantalla haya sido generado por PHP.</p>
<?php
echo "<p>Examina el c�digo fuente de esta p�gina y compru�balo.</p>\n";
// el c�digo PHP queda oculto al usuario final
echo "<!-- s�lo se ver� lo que nosotros queramos-->\n";
$variableSecreta = 12345;
?>
</body>
</html>