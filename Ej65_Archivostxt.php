<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">     
	<title>Guardar informacion
	</title> 
</head> 
<body>
	<h2>Guardar informacion en un archivo</h2>
<form method="POST">
	<input type="text" name="nombre">
	<br><br>
	<input type="text" name="edad">
	<br><br>
	<input type="text" name="pasat">
	<br><br>
	<button type="submit" name="guardar">Guardar</button>
	<?php 
	$mensaje = '';
	if ($mensaje): 
	?>
        <p><strong><?= htmlspecialchars($mensaje) ?></strong></p>
    <?php endif; ?>
</form>
<br>

  <form method="post">
        <input type="text" name="dato" placeholder="Texto a eliminar" required>
        <button type="submit" name="borrar_dato">Eliminar dato</button>
    </form>
<br>
<form method="post">
    <button type="submit" name="vaciar">Vaciar archivo TXT</button>
</form>


<?php
echo "<br><br>";
$archivo = 'datos1.txt';

if (isset($_POST['guardar'])) {
	$nom=$_POST["nombre"];
	$ed=$_POST["edad"];
	$pas=$_POST["pasat"];
	
	echo "<h3>Valores almacenados en el vector: </h3>";
} 

$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vaciar'])) {
    if (file_exists($archivo) && is_writable($archivo)) {
        file_put_contents($archivo, '');
        $mensaje = 'Datos eliminados correctamente.';
    } else {
        $mensaje = 'El archivo no existe o no tiene permisos de escritura.';
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['borrar_dato'])) {
    $datoEliminar = trim($_POST['dato']);

    if (file_exists($archivo) && is_writable($archivo)) {
        $lineas = file($archivo, FILE_IGNORE_NEW_LINES);
        $nuevasLineas = array_filter($lineas, function ($linea) use ($datoEliminar) {
            return trim($linea) !== $datoEliminar;
        });

        file_put_contents($archivo, implode(PHP_EOL, $nuevasLineas) . (count($nuevasLineas) ? PHP_EOL : ''));
        $mensaje = 'Dato eliminado si existía.';
    } else {
        $mensaje = 'El archivo no existe o no tiene permisos de escritura.';
    }
}
$fp = fopen("datos1.txt", "a");
fwrite($fp, " " . PHP_EOL);
fclose($fp);

file_put_contents("datos1.txt", $nom .PHP_EOL, FILE_APPEND);
file_put_contents("datos1.txt", $ed .PHP_EOL, FILE_APPEND);
file_put_contents("datos1.txt", $pas .PHP_EOL, FILE_APPEND);
$cont= file_get_contents("datos1.txt");
echo nl2br($cont);

?>