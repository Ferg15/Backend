<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TP1</title>
</head>
<body>
	<h1>Hola Mundo</h1>

	<?php
		$mensaje = "Hola Mundo";
		echo $mensaje;
	?>
	<hr>
	<?php
		$numero1 = 15; 
		$numero2 = 10;

		echo $numero1 + $numero2;
	?> 
	<br>
	<?php
		$numero1 = 15; 
		$numero2 = 10;

		echo $numero1 - $numero2;
	?>
	<br>
	<?php
		$numero1 = 15; 
		$numero2 = 10;

		echo $numero1 * $numero2;
	?>
	<br>
	<?php
		$numero1 = 15; 
		$numero2 = 10;

		echo $numero1 / $numero2;
	?>
	<br>
	<hr>
	<?php
		$gradoscentigrados = 20;
		$multiplicacion = 1.8;
		$suma = 32;
		$gradosfahrenheit = $gradoscentigrados * $multiplicacion + $suma;
		
		print "<p> $gradoscentigrados grados centigrados seria $gradosfahrenheit grados fahrenheit</p>";
	?>	
	<br>
	<hr>
	<?php
		$base = 18;
		$altura = 12;
		$perimetro = $base * 2 + $altura *2;
		$area = $base * $altura;
		print "<p> el perimetro de un rectangulo de base de 18 cm y altura es de 12 cm es de $perimetro y el area es de $area </p>";
	?>	
	<br>
	<hr>
	<?php
		$radio = 30;
		$perimetro = 2 * 3.14 * $radio;
		$area = 3.14 * ($radio * $radio) ;
		print " <p> el perimetro de un circulo cuyo radio es de 30 cm es $perimetro cm y su area es de $area cm </p>";
	?>
	
</body>
</html>