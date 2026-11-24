<!DOCTYPE html>
<html lang="es">

<head>     
	<meta charset="UTF-8">     
	<title>Guardar informacion
	</title> 
</head> 
<body>
	<h2>Guardar informacion en un archivo</h2>

<?php 
$nom= "Ana López";
file_put_contents("alumnos.txt", $nom .PHP_EOL, FILE_APPEND);
echo "Informacion guardada correctamente";
echo "<br><br>";
?>

<?php 
$nom= "Steve Rogers";
file_put_contents("alumnos.txt", $nom .PHP_EOL, FILE_APPEND);
echo "Alumno guardado correctamente";
echo "<br><br>";
?>

<?php 
echo "<br><br>";
$cont= file_get_contents("alumnos.txt");
echo nl2br($cont);
?>