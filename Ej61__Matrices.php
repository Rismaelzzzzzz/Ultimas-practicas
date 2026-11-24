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
$v=100;
$num2 = array();
$v2=500;
$num3 = array();

for ($f=0; $f < 3; $f++) { 
 	for ($c=0; $c <3 ; $c++) { 
 		$num[$f][$c]=$v; 
 		$v+=10;
 		$num2[$f][$c]=$v; 
 		$v2+=20;
 	}
}
for ($f=0; $f < 3; $f++) { 
 	for ($c=0; $c <3 ; $c++) { 
 		$num3[$f][$c]=$num[$f][$c]+$num2[$f][$c]; 
 	}
}
echo "<br>";
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
echo "<table border='1'cellpadding='5' cellspacing='1'>"; 
for ($i=0; $i <3; $i++) { 
	echo "<tr>";
 	for ($j=0; $j <3 ; $j++) {
 		echo "<td>".$num3[$i][$j]."</td>";
 	}
 	echo "</tr>";
} 
echo "</table>";

?>
</body>
</head>