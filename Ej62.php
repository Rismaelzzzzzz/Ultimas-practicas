<!DOCTYPE html>
<html lang="es">

<head>     
	<meta charset="UTF-8">     
	<title>Arreglos de operaciones
	</title> 
</head> 

<body>
	<h2>OPERACIONES</h2>        
<form method="POST" action="">
<?php
$num = array();
$v=10;
$num2 = array();
$v2=50;
$num3 = array();
$v3=35;
$num4 = array();
$e=1;

for ($f=0; $f < 3; $f++) { 
 	for ($c=0; $c <3 ; $c++) { 
 		$num[$f][$c]=$v*$e; 
 		$num2[$f][$c]=$v2*$e; 
 		$num3[$f][$c]=$v3*$e;
 		$e++;
 	}
}
for ($f=0; $f < 3; $f++) { 
 	for ($c=0; $c <3 ; $c++) { 
 		$num4[$f][$c]=$num[$f][$c]+$num2[$f][$c]+$num3[$f][$c]; 
 	}
}
echo "Tabla de 10 en 10";
echo "<table border='1'cellpadding='5' cellspacing='1'>"; 
for ($i=0; $i <3; $i++) { 
	echo "<tr>";
 	for ($j=0; $j <3 ; $j++) {
 		echo "<td>".$num[$i][$j]."</td>";
 	}
 	echo "</tr>";
}
echo "</table>";
echo "<br>";
echo "Tabla de 50 en 50";
echo "<table border='1'cellpadding='5' cellspacing='1'>"; 
for ($i=0; $i <3; $i++) { 
	echo "<tr>";
 	for ($j=0; $j <3 ; $j++) {
 		echo "<td>".$num2[$i][$j]."</td>";
 	}
 	echo "</tr>";
} 
echo "</table>";
echo "<br>";
echo "Tabla de 35 en 35";
echo "<table border='1'cellpadding='5' cellspacing='1'>"; 
for ($i=0; $i <3; $i++) { 
	echo "<tr>";
 	for ($j=0; $j <3 ; $j++) {
 		echo "<td>".$num3[$i][$j]."</td>";
 	}
 	echo "</tr>";
} 
echo "</table>";
echo "<br>";
echo "La suma de todos";
echo "<table border='1'cellpadding='5' cellspacing='1'>"; 
for ($i=0; $i <3; $i++) { 
	echo "<tr>";
 	for ($j=0; $j <3 ; $j++) {
 		echo "<td>".$num4[$i][$j]."</td>";
 	}
 	echo "</tr>";
} 
echo "</table>";

?>
</body>
</head>